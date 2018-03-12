<?php

namespace App\Http\Controllers\Admin;

use App\Selfprofessional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSelfprofessionalsRequest;
use App\Http\Requests\Admin\UpdateSelfprofessionalsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SelfprofessionalsController extends Controller
{
    /**
     * Display a listing of Selfprofessional.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('selfprofessional_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('selfprofessional_delete')) {
                return abort(401);
            }
            $selfprofessionals = Selfprofessional::onlyTrashed()->get();
        } else {
            $selfprofessionals = Selfprofessional::all();
        }

        return view('admin.selfprofessionals.index', compact('selfprofessionals'));
    }

    /**
     * Show the form for creating new Selfprofessional.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('selfprofessional_create')) {
            return abort(401);
        }
        
        $self_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.selfprofessionals.create', compact('self_titles'));
    }

    /**
     * Store a newly created Selfprofessional in storage.
     *
     * @param  \App\Http\Requests\StoreSelfprofessionalsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSelfprofessionalsRequest $request)
    {
        if (! Gate::allows('selfprofessional_create')) {
            return abort(401);
        }
        $selfprofessional = Selfprofessional::create($request->all());



        return redirect()->route('admin.selfprofessionals.index');
    }


    /**
     * Show the form for editing Selfprofessional.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('selfprofessional_edit')) {
            return abort(401);
        }
        
        $self_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $selfprofessional = Selfprofessional::findOrFail($id);

        return view('admin.selfprofessionals.edit', compact('selfprofessional', 'self_titles'));
    }

    /**
     * Update Selfprofessional in storage.
     *
     * @param  \App\Http\Requests\UpdateSelfprofessionalsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSelfprofessionalsRequest $request, $id)
    {
        if (! Gate::allows('selfprofessional_edit')) {
            return abort(401);
        }
        $selfprofessional = Selfprofessional::findOrFail($id);
        $selfprofessional->update($request->all());



        return redirect()->route('admin.selfprofessionals.index');
    }


    /**
     * Display Selfprofessional.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('selfprofessional_view')) {
            return abort(401);
        }
        $selfprofessional = Selfprofessional::findOrFail($id);

        return view('admin.selfprofessionals.show', compact('selfprofessional'));
    }


    /**
     * Remove Selfprofessional from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('selfprofessional_delete')) {
            return abort(401);
        }
        $selfprofessional = Selfprofessional::findOrFail($id);
        $selfprofessional->delete();

        return redirect()->route('admin.selfprofessionals.index');
    }

    /**
     * Delete all selected Selfprofessional at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('selfprofessional_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Selfprofessional::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Selfprofessional from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('selfprofessional_delete')) {
            return abort(401);
        }
        $selfprofessional = Selfprofessional::onlyTrashed()->findOrFail($id);
        $selfprofessional->restore();

        return redirect()->route('admin.selfprofessionals.index');
    }

    /**
     * Permanently delete Selfprofessional from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('selfprofessional_delete')) {
            return abort(401);
        }
        $selfprofessional = Selfprofessional::onlyTrashed()->findOrFail($id);
        $selfprofessional->forceDelete();

        return redirect()->route('admin.selfprofessionals.index');
    }
}
