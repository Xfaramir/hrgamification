<?php

namespace App\Http\Controllers\Admin;

use App\Selfdocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSelfdocumentsRequest;
use App\Http\Requests\Admin\UpdateSelfdocumentsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SelfdocumentsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Selfdocument.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('selfdocument_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('selfdocument_delete')) {
                return abort(401);
            }
            $selfdocuments = Selfdocument::onlyTrashed()->get();
        } else {
            $selfdocuments = Selfdocument::all();
        }

        return view('admin.selfdocuments.index', compact('selfdocuments'));
    }

    /**
     * Show the form for creating new Selfdocument.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('selfdocument_create')) {
            return abort(401);
        }
        return view('admin.selfdocuments.create');
    }

    /**
     * Store a newly created Selfdocument in storage.
     *
     * @param  \App\Http\Requests\StoreSelfdocumentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSelfdocumentsRequest $request)
    {
        if (! Gate::allows('selfdocument_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $selfdocument = Selfdocument::create($request->all());


        foreach ($request->input('self_resume_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $selfdocument->id;
            $file->save();
        }

        return redirect()->route('admin.selfdocuments.index');
    }


    /**
     * Show the form for editing Selfdocument.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('selfdocument_edit')) {
            return abort(401);
        }
        $selfdocument = Selfdocument::findOrFail($id);

        return view('admin.selfdocuments.edit', compact('selfdocument'));
    }

    /**
     * Update Selfdocument in storage.
     *
     * @param  \App\Http\Requests\UpdateSelfdocumentsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSelfdocumentsRequest $request, $id)
    {
        if (! Gate::allows('selfdocument_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $selfdocument = Selfdocument::findOrFail($id);
        $selfdocument->update($request->all());


        $media = [];
        foreach ($request->input('self_resume_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $selfdocument->id;
            $file->save();
            $media[] = $file;
        }
        $selfdocument->updateMedia($media, 'self_resume');

        return redirect()->route('admin.selfdocuments.index');
    }


    /**
     * Display Selfdocument.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('selfdocument_view')) {
            return abort(401);
        }
        $selfdocument = Selfdocument::findOrFail($id);

        return view('admin.selfdocuments.show', compact('selfdocument'));
    }


    /**
     * Remove Selfdocument from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('selfdocument_delete')) {
            return abort(401);
        }
        $selfdocument = Selfdocument::findOrFail($id);
        $selfdocument->deletePreservingMedia();

        return redirect()->route('admin.selfdocuments.index');
    }

    /**
     * Delete all selected Selfdocument at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('selfdocument_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Selfdocument::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->deletePreservingMedia();
            }
        }
    }


    /**
     * Restore Selfdocument from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('selfdocument_delete')) {
            return abort(401);
        }
        $selfdocument = Selfdocument::onlyTrashed()->findOrFail($id);
        $selfdocument->restore();

        return redirect()->route('admin.selfdocuments.index');
    }

    /**
     * Permanently delete Selfdocument from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('selfdocument_delete')) {
            return abort(401);
        }
        $selfdocument = Selfdocument::onlyTrashed()->findOrFail($id);
        $selfdocument->forceDelete();

        return redirect()->route('admin.selfdocuments.index');
    }
}
