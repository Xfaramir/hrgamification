<?php

namespace App\Http\Controllers\Admin;

use App\Timeshift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTimeshiftsRequest;
use App\Http\Requests\Admin\UpdateTimeshiftsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TimeshiftsController extends Controller
{
    /**
     * Display a listing of Timeshift.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('timeshift_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('timeshift_delete')) {
                return abort(401);
            }
            $timeshifts = Timeshift::onlyTrashed()->get();
        } else {
            $timeshifts = Timeshift::all();
        }

        return view('admin.timeshifts.index', compact('timeshifts'));
    }

    /**
     * Show the form for creating new Timeshift.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('timeshift_create')) {
            return abort(401);
        }
        return view('admin.timeshifts.create');
    }

    /**
     * Store a newly created Timeshift in storage.
     *
     * @param  \App\Http\Requests\StoreTimeshiftsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimeshiftsRequest $request)
    {
        if (! Gate::allows('timeshift_create')) {
            return abort(401);
        }
        $timeshift = Timeshift::create($request->all());



        return redirect()->route('admin.timeshifts.index');
    }


    /**
     * Show the form for editing Timeshift.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('timeshift_edit')) {
            return abort(401);
        }
        $timeshift = Timeshift::findOrFail($id);

        return view('admin.timeshifts.edit', compact('timeshift'));
    }

    /**
     * Update Timeshift in storage.
     *
     * @param  \App\Http\Requests\UpdateTimeshiftsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimeshiftsRequest $request, $id)
    {
        if (! Gate::allows('timeshift_edit')) {
            return abort(401);
        }
        $timeshift = Timeshift::findOrFail($id);
        $timeshift->update($request->all());



        return redirect()->route('admin.timeshifts.index');
    }


    /**
     * Display Timeshift.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('timeshift_view')) {
            return abort(401);
        }
        $employees = \App\Employee::where('employee_timeshift_id', $id)->get();

        $timeshift = Timeshift::findOrFail($id);

        return view('admin.timeshifts.show', compact('timeshift', 'employees'));
    }


    /**
     * Remove Timeshift from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('timeshift_delete')) {
            return abort(401);
        }
        $timeshift = Timeshift::findOrFail($id);
        $timeshift->delete();

        return redirect()->route('admin.timeshifts.index');
    }

    /**
     * Delete all selected Timeshift at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('timeshift_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Timeshift::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Timeshift from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('timeshift_delete')) {
            return abort(401);
        }
        $timeshift = Timeshift::onlyTrashed()->findOrFail($id);
        $timeshift->restore();

        return redirect()->route('admin.timeshifts.index');
    }

    /**
     * Permanently delete Timeshift from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('timeshift_delete')) {
            return abort(401);
        }
        $timeshift = Timeshift::onlyTrashed()->findOrFail($id);
        $timeshift->forceDelete();

        return redirect()->route('admin.timeshifts.index');
    }
}
