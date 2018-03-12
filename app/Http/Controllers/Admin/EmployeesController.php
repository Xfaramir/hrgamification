<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEmployeesRequest;
use App\Http\Requests\Admin\UpdateEmployeesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EmployeesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('employee_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('employee_delete')) {
                return abort(401);
            }
            $employees = Employee::onlyTrashed()->get();
        } else {
            $employees = Employee::all();
        }

        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating new Employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('employee_create')) {
            return abort(401);
        }
        
        $employee_salaries = \App\Salary::get()->pluck('salary', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_usernames = \App\User::get()->pluck('username', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_timeshifts = \App\Timeshift::get()->pluck('time_shift', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_costcenters = \App\Costcenter::get()->pluck('cost_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_skills = \App\Skill::get()->pluck('skill_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_educations = \App\Education::get()->pluck('education_level', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_nationalities = \App\Nationality::get()->pluck('nationalities', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.employees.create', compact('employee_salaries', 'employee_usernames', 'employee_titles', 'employee_timeshifts', 'employee_costcenters', 'employee_skills', 'employee_educations', 'employee_nationalities'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeesRequest $request)
    {
        if (! Gate::allows('employee_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $employee = Employee::create($request->all());



        return redirect()->route('admin.employees.index');
    }


    /**
     * Show the form for editing Employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('employee_edit')) {
            return abort(401);
        }
        
        $employee_salaries = \App\Salary::get()->pluck('salary', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_usernames = \App\User::get()->pluck('username', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_timeshifts = \App\Timeshift::get()->pluck('time_shift', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_costcenters = \App\Costcenter::get()->pluck('cost_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_skills = \App\Skill::get()->pluck('skill_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_educations = \App\Education::get()->pluck('education_level', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_nationalities = \App\Nationality::get()->pluck('nationalities', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $employee = Employee::findOrFail($id);

        return view('admin.employees.edit', compact('employee', 'employee_salaries', 'employee_usernames', 'employee_titles', 'employee_timeshifts', 'employee_costcenters', 'employee_skills', 'employee_educations', 'employee_nationalities'));
    }

    /**
     * Update Employee in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeesRequest $request, $id)
    {
        if (! Gate::allows('employee_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());



        return redirect()->route('admin.employees.index');
    }


    /**
     * Display Employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('employee_view')) {
            return abort(401);
        }
        
        $employee_salaries = \App\Salary::get()->pluck('salary', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_usernames = \App\User::get()->pluck('username', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_timeshifts = \App\Timeshift::get()->pluck('time_shift', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_costcenters = \App\Costcenter::get()->pluck('cost_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_skills = \App\Skill::get()->pluck('skill_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_educations = \App\Education::get()->pluck('education_level', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_nationalities = \App\Nationality::get()->pluck('nationalities', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$disciplinarycases = \App\Disciplinarycase::where('discipline_employee_id', $id)->get();$leaveentitlements = \App\Leaveentitlement::where('leave_employee_id', $id)->get();$vacancies = \App\Vacancy::where('vacancy_manager_id', $id)->get();$assets = \App\Asset::where('assigned_to_id', $id)->get();

        $employee = Employee::findOrFail($id);

        return view('admin.employees.show', compact('employee', 'disciplinarycases', 'leaveentitlements', 'vacancies', 'assets'));
    }


    /**
     * Remove Employee from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('employee_delete')) {
            return abort(401);
        }
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('admin.employees.index');
    }

    /**
     * Delete all selected Employee at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('employee_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Employee::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Employee from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('employee_delete')) {
            return abort(401);
        }
        $employee = Employee::onlyTrashed()->findOrFail($id);
        $employee->restore();

        return redirect()->route('admin.employees.index');
    }

    /**
     * Permanently delete Employee from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('employee_delete')) {
            return abort(401);
        }
        $employee = Employee::onlyTrashed()->findOrFail($id);
        $employee->forceDelete();

        return redirect()->route('admin.employees.index');
    }
}
