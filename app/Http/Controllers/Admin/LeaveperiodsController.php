<?php

namespace App\Http\Controllers\Admin;

use App\Leaveperiod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLeaveperiodsRequest;
use App\Http\Requests\Admin\UpdateLeaveperiodsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class LeaveperiodsController extends Controller
{
    /**
     * Display a listing of Leaveperiod.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('leaveperiod_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('leaveperiod_delete')) {
                return abort(401);
            }
            $leaveperiods = Leaveperiod::onlyTrashed()->get();
        } else {
            $leaveperiods = Leaveperiod::all();
        }

        return view('admin.leaveperiods.index', compact('leaveperiods'));
    }

    /**
     * Show the form for creating new Leaveperiod.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('leaveperiod_create')) {
            return abort(401);
        }
        return view('admin.leaveperiods.create');
    }

    /**
     * Store a newly created Leaveperiod in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveperiodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveperiodsRequest $request)
    {
        if (! Gate::allows('leaveperiod_create')) {
            return abort(401);
        }
        $leaveperiod = Leaveperiod::create($request->all());



        return redirect()->route('admin.leaveperiods.index');
    }


    /**
     * Show the form for editing Leaveperiod.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('leaveperiod_edit')) {
            return abort(401);
        }
        $leaveperiod = Leaveperiod::findOrFail($id);

        return view('admin.leaveperiods.edit', compact('leaveperiod'));
    }

    /**
     * Update Leaveperiod in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveperiodsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveperiodsRequest $request, $id)
    {
        if (! Gate::allows('leaveperiod_edit')) {
            return abort(401);
        }
        $leaveperiod = Leaveperiod::findOrFail($id);
        $leaveperiod->update($request->all());



        return redirect()->route('admin.leaveperiods.index');
    }


    /**
     * Display Leaveperiod.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('leaveperiod_view')) {
            return abort(401);
        }
        $leaveentitlements = \App\Leaveentitlement::where('leave_type_id', $id)->get();

        $leaveperiod = Leaveperiod::findOrFail($id);

        return view('admin.leaveperiods.show', compact('leaveperiod', 'leaveentitlements'));
    }


    /**
     * Remove Leaveperiod from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('leaveperiod_delete')) {
            return abort(401);
        }
        $leaveperiod = Leaveperiod::findOrFail($id);
        $leaveperiod->delete();

        return redirect()->route('admin.leaveperiods.index');
    }

    /**
     * Delete all selected Leaveperiod at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('leaveperiod_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Leaveperiod::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Leaveperiod from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('leaveperiod_delete')) {
            return abort(401);
        }
        $leaveperiod = Leaveperiod::onlyTrashed()->findOrFail($id);
        $leaveperiod->restore();

        return redirect()->route('admin.leaveperiods.index');
    }

    /**
     * Permanently delete Leaveperiod from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('leaveperiod_delete')) {
            return abort(401);
        }
        $leaveperiod = Leaveperiod::onlyTrashed()->findOrFail($id);
        $leaveperiod->forceDelete();

        return redirect()->route('admin.leaveperiods.index');
    }
}
