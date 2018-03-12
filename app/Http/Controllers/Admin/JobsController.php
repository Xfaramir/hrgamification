<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreJobsRequest;
use App\Http\Requests\Admin\UpdateJobsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class JobsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Job.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('job_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('job_delete')) {
                return abort(401);
            }
            $jobs = Job::onlyTrashed()->get();
        } else {
            $jobs = Job::all();
        }

        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating new Job.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('job_create')) {
            return abort(401);
        }
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created Job in storage.
     *
     * @param  \App\Http\Requests\StoreJobsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsRequest $request)
    {
        if (! Gate::allows('job_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $job = Job::create($request->all());



        return redirect()->route('admin.jobs.index');
    }


    /**
     * Show the form for editing Job.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('job_edit')) {
            return abort(401);
        }
        $job = Job::findOrFail($id);

        return view('admin.jobs.edit', compact('job'));
    }

    /**
     * Update Job in storage.
     *
     * @param  \App\Http\Requests\UpdateJobsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobsRequest $request, $id)
    {
        if (! Gate::allows('job_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $job = Job::findOrFail($id);
        $job->update($request->all());



        return redirect()->route('admin.jobs.index');
    }


    /**
     * Display Job.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('job_view')) {
            return abort(401);
        }
        $vacancies = \App\Vacancy::where('vacancy_title_id', $id)->get();$salaries = \App\Salary::where('salary_position_id', $id)->get();$selfprofessionals = \App\Selfprofessional::where('self_title_id', $id)->get();$employees = \App\Employee::where('employee_title_id', $id)->get();

        $job = Job::findOrFail($id);

        return view('admin.jobs.show', compact('job', 'vacancies', 'salaries', 'selfprofessionals', 'employees'));
    }


    /**
     * Remove Job from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('job_delete')) {
            return abort(401);
        }
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Delete all selected Job at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('job_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Job::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Job from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('job_delete')) {
            return abort(401);
        }
        $job = Job::onlyTrashed()->findOrFail($id);
        $job->restore();

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Permanently delete Job from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('job_delete')) {
            return abort(401);
        }
        $job = Job::onlyTrashed()->findOrFail($id);
        $job->forceDelete();

        return redirect()->route('admin.jobs.index');
    }
}
