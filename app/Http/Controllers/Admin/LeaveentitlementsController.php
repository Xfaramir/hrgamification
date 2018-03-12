<?php

namespace App\Http\Controllers\Admin;

use App\Leaveentitlement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLeaveentitlementsRequest;
use App\Http\Requests\Admin\UpdateLeaveentitlementsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class LeaveentitlementsController extends Controller
{
    /**
     * Display a listing of Leaveentitlement.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('leaveentitlement_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('leaveentitlement_delete')) {
                return abort(401);
            }
            $leaveentitlements = Leaveentitlement::onlyTrashed()->get();
        } else {
            $leaveentitlements = Leaveentitlement::all();
        }

        return view('admin.leaveentitlements.index', compact('leaveentitlements'));
    }

    /**
     * Show the form for creating new Leaveentitlement.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('leaveentitlement_create')) {
            return abort(401);
        }
        
        $leave_types = \App\Leaveperiod::get()->pluck('leave_type', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $leave_employees = \App\Employee::get()->pluck('employee_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.leaveentitlements.create', compact('leave_types', 'leave_employees', 'statuses'));
    }

    /**
     * Store a newly created Leaveentitlement in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveentitlementsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveentitlementsRequest $request)
    {
        if (! Gate::allows('leaveentitlement_create')) {
            return abort(401);
        }
        $leaveentitlement = Leaveentitlement::create($request->all());



        return redirect()->route('admin.leaveentitlements.index');
    }


    /**
     * Show the form for editing Leaveentitlement.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('leaveentitlement_edit')) {
            return abort(401);
        }
        
        $leave_types = \App\Leaveperiod::get()->pluck('leave_type', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $leave_employees = \App\Employee::get()->pluck('employee_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $leaveentitlement = Leaveentitlement::findOrFail($id);

        return view('admin.leaveentitlements.edit', compact('leaveentitlement', 'leave_types', 'leave_employees', 'statuses'));
    }

    /**
     * Update Leaveentitlement in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveentitlementsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveentitlementsRequest $request, $id)
    {
        if (! Gate::allows('leaveentitlement_edit')) {
            return abort(401);
        }
        $leaveentitlement = Leaveentitlement::findOrFail($id);
        $leaveentitlement->update($request->all());



        return redirect()->route('admin.leaveentitlements.index');
    }


    /**
     * Display Leaveentitlement.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('leaveentitlement_view')) {
            return abort(401);
        }
        $leaveentitlement = Leaveentitlement::findOrFail($id);

        return view('admin.leaveentitlements.show', compact('leaveentitlement'));
    }


    /**
     * Remove Leaveentitlement from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('leaveentitlement_delete')) {
            return abort(401);
        }
        $leaveentitlement = Leaveentitlement::findOrFail($id);
        $leaveentitlement->delete();

        return redirect()->route('admin.leaveentitlements.index');
    }

    /**
     * Delete all selected Leaveentitlement at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('leaveentitlement_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Leaveentitlement::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Leaveentitlement from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('leaveentitlement_delete')) {
            return abort(401);
        }
        $leaveentitlement = Leaveentitlement::onlyTrashed()->findOrFail($id);
        $leaveentitlement->restore();

        return redirect()->route('admin.leaveentitlements.index');
    }

    /**
     * Permanently delete Leaveentitlement from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('leaveentitlement_delete')) {
            return abort(401);
        }
        $leaveentitlement = Leaveentitlement::onlyTrashed()->findOrFail($id);
        $leaveentitlement->forceDelete();

        return redirect()->route('admin.leaveentitlements.index');
    }
}
