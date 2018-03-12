<?php

namespace App\Http\Controllers\Admin;

use App\Badge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBadgesRequest;
use App\Http\Requests\Admin\UpdateBadgesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BadgesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Badge.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('badge_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('badge_delete')) {
                return abort(401);
            }
            $badges = Badge::onlyTrashed()->get();
        } else {
            $badges = Badge::all();
        }

        return view('admin.badges.index', compact('badges'));
    }

    /**
     * Show the form for creating new Badge.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('badge_create')) {
            return abort(401);
        }
        
        $statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.badges.create', compact('statuses'));
    }

    /**
     * Store a newly created Badge in storage.
     *
     * @param  \App\Http\Requests\StoreBadgesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBadgesRequest $request)
    {
        if (! Gate::allows('badge_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $badge = Badge::create($request->all());



        return redirect()->route('admin.badges.index');
    }


    /**
     * Show the form for editing Badge.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('badge_edit')) {
            return abort(401);
        }
        
        $statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $badge = Badge::findOrFail($id);

        return view('admin.badges.edit', compact('badge', 'statuses'));
    }

    /**
     * Update Badge in storage.
     *
     * @param  \App\Http\Requests\UpdateBadgesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBadgesRequest $request, $id)
    {
        if (! Gate::allows('badge_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $badge = Badge::findOrFail($id);
        $badge->update($request->all());



        return redirect()->route('admin.badges.index');
    }


    /**
     * Display Badge.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('badge_view')) {
            return abort(401);
        }
        $badge = Badge::findOrFail($id);

        return view('admin.badges.show', compact('badge'));
    }


    /**
     * Remove Badge from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('badge_delete')) {
            return abort(401);
        }
        $badge = Badge::findOrFail($id);
        $badge->delete();

        return redirect()->route('admin.badges.index');
    }

    /**
     * Delete all selected Badge at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('badge_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Badge::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Badge from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('badge_delete')) {
            return abort(401);
        }
        $badge = Badge::onlyTrashed()->findOrFail($id);
        $badge->restore();

        return redirect()->route('admin.badges.index');
    }

    /**
     * Permanently delete Badge from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('badge_delete')) {
            return abort(401);
        }
        $badge = Badge::onlyTrashed()->findOrFail($id);
        $badge->forceDelete();

        return redirect()->route('admin.badges.index');
    }
}
