<?php

namespace App\Http\Controllers\Admin;

use App\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSalariesRequest;
use App\Http\Requests\Admin\UpdateSalariesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SalariesController extends Controller
{
    /**
     * Display a listing of Salary.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('salary_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Salary::query();
            $query->with("salary_position");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('salary_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'salaries.id',
                'salaries.salary',
                'salaries.salary_position_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'salary_';
                $routeKey = 'admin.salaries';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('salary', function ($row) {
                return $row->salary ? $row->salary : '';
            });
            $table->editColumn('salary_position.job_title', function ($row) {
                return $row->salary_position ? $row->salary_position->job_title : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.salaries.index');
    }

    /**
     * Show the form for creating new Salary.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('salary_create')) {
            return abort(401);
        }
        
        $salary_positions = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.salaries.create', compact('salary_positions'));
    }

    /**
     * Store a newly created Salary in storage.
     *
     * @param  \App\Http\Requests\StoreSalariesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalariesRequest $request)
    {
        if (! Gate::allows('salary_create')) {
            return abort(401);
        }
        $salary = Salary::create($request->all());



        return redirect()->route('admin.salaries.index');
    }


    /**
     * Show the form for editing Salary.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('salary_edit')) {
            return abort(401);
        }
        
        $salary_positions = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $salary = Salary::findOrFail($id);

        return view('admin.salaries.edit', compact('salary', 'salary_positions'));
    }

    /**
     * Update Salary in storage.
     *
     * @param  \App\Http\Requests\UpdateSalariesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalariesRequest $request, $id)
    {
        if (! Gate::allows('salary_edit')) {
            return abort(401);
        }
        $salary = Salary::findOrFail($id);
        $salary->update($request->all());



        return redirect()->route('admin.salaries.index');
    }


    /**
     * Display Salary.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('salary_view')) {
            return abort(401);
        }
        
        $salary_positions = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$employees = \App\Employee::where('employee_salary_id', $id)->get();

        $salary = Salary::findOrFail($id);

        return view('admin.salaries.show', compact('salary', 'employees'));
    }


    /**
     * Remove Salary from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('salary_delete')) {
            return abort(401);
        }
        $salary = Salary::findOrFail($id);
        $salary->delete();

        return redirect()->route('admin.salaries.index');
    }

    /**
     * Delete all selected Salary at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('salary_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Salary::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Salary from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('salary_delete')) {
            return abort(401);
        }
        $salary = Salary::onlyTrashed()->findOrFail($id);
        $salary->restore();

        return redirect()->route('admin.salaries.index');
    }

    /**
     * Permanently delete Salary from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('salary_delete')) {
            return abort(401);
        }
        $salary = Salary::onlyTrashed()->findOrFail($id);
        $salary->forceDelete();

        return redirect()->route('admin.salaries.index');
    }
}
