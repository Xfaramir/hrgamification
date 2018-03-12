<?php

namespace App\Http\Controllers\Admin;

use App\Costcenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCostcentersRequest;
use App\Http\Requests\Admin\UpdateCostcentersRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CostcentersController extends Controller
{
    /**
     * Display a listing of Costcenter.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('costcenter_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('costcenter_delete')) {
                return abort(401);
            }
            $costcenters = Costcenter::onlyTrashed()->get();
        } else {
            $costcenters = Costcenter::all();
        }

        return view('admin.costcenters.index', compact('costcenters'));
    }

    /**
     * Show the form for creating new Costcenter.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('costcenter_create')) {
            return abort(401);
        }
        return view('admin.costcenters.create');
    }

    /**
     * Store a newly created Costcenter in storage.
     *
     * @param  \App\Http\Requests\StoreCostcentersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCostcentersRequest $request)
    {
        if (! Gate::allows('costcenter_create')) {
            return abort(401);
        }
        $costcenter = Costcenter::create($request->all());



        return redirect()->route('admin.costcenters.index');
    }


    /**
     * Show the form for editing Costcenter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('costcenter_edit')) {
            return abort(401);
        }
        $costcenter = Costcenter::findOrFail($id);

        return view('admin.costcenters.edit', compact('costcenter'));
    }

    /**
     * Update Costcenter in storage.
     *
     * @param  \App\Http\Requests\UpdateCostcentersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCostcentersRequest $request, $id)
    {
        if (! Gate::allows('costcenter_edit')) {
            return abort(401);
        }
        $costcenter = Costcenter::findOrFail($id);
        $costcenter->update($request->all());



        return redirect()->route('admin.costcenters.index');
    }


    /**
     * Display Costcenter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('costcenter_view')) {
            return abort(401);
        }
        $employees = \App\Employee::where('employee_costcenter_id', $id)->get();

        $costcenter = Costcenter::findOrFail($id);

        return view('admin.costcenters.show', compact('costcenter', 'employees'));
    }


    /**
     * Remove Costcenter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('costcenter_delete')) {
            return abort(401);
        }
        $costcenter = Costcenter::findOrFail($id);
        $costcenter->delete();

        return redirect()->route('admin.costcenters.index');
    }

    /**
     * Delete all selected Costcenter at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('costcenter_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Costcenter::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Costcenter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('costcenter_delete')) {
            return abort(401);
        }
        $costcenter = Costcenter::onlyTrashed()->findOrFail($id);
        $costcenter->restore();

        return redirect()->route('admin.costcenters.index');
    }

    /**
     * Permanently delete Costcenter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('costcenter_delete')) {
            return abort(401);
        }
        $costcenter = Costcenter::onlyTrashed()->findOrFail($id);
        $costcenter->forceDelete();

        return redirect()->route('admin.costcenters.index');
    }
}
