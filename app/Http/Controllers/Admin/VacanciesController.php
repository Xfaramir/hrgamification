<?php

namespace App\Http\Controllers\Admin;

use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVacanciesRequest;
use App\Http\Requests\Admin\UpdateVacanciesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class VacanciesController extends Controller
{
    /**
     * Display a listing of Vacancy.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('vacancy_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Vacancy::query();
            $query->with("vacancy_title");
            $query->with("vacancy_manager");
            $query->with("vacancy_location");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('vacancy_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'vacancy_';
                $routeKey = 'admin.vacancies';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('vacancy_title.job_title', function ($row) {
                return $row->vacancy_title ? $row->vacancy_title->job_title : '';
            });
            $table->editColumn('vacancy_name', function ($row) {
                return $row->vacancy_name ? $row->vacancy_name : '';
            });
            $table->editColumn('vacancy_manager.employee_id', function ($row) {
                return $row->vacancy_manager ? $row->vacancy_manager->employee_id : '';
            });
            $table->editColumn('vacancy_description', function ($row) {
                return $row->vacancy_description ? $row->vacancy_description : '';
            });
            $table->editColumn('vacancy_date', function ($row) {
                return $row->vacancy_date ? $row->vacancy_date : '';
            });
            $table->editColumn('vacancy_location.city', function ($row) {
                return $row->vacancy_location ? $row->vacancy_location->city : '';
            });
            $table->editColumn('vacancy_available', function ($row) {
                return $row->vacancy_available ? $row->vacancy_available : '';
            });

            $table->rawColumns(['actions']);

            return $table->make(true);
        }

        return view('admin.vacancies.index');
    }

    /**
     * Show the form for creating new Vacancy.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('vacancy_create')) {
            return abort(401);
        }
        
        $vacancy_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $vacancy_managers = \App\Employee::get()->pluck('employee_email', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $vacancy_locations = \App\Nationality::get()->pluck('city', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.vacancies.create', compact('vacancy_titles', 'vacancy_managers', 'vacancy_locations'));
    }

    /**
     * Store a newly created Vacancy in storage.
     *
     * @param  \App\Http\Requests\StoreVacanciesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVacanciesRequest $request)
    {
        if (! Gate::allows('vacancy_create')) {
            return abort(401);
        }
        $vacancy = Vacancy::create($request->all());



        return redirect()->route('admin.vacancies.index');
    }


    /**
     * Show the form for editing Vacancy.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('vacancy_edit')) {
            return abort(401);
        }
        
        $vacancy_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $vacancy_managers = \App\Employee::get()->pluck('employee_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $vacancy_locations = \App\Nationality::get()->pluck('city', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $vacancy = Vacancy::findOrFail($id);

        return view('admin.vacancies.edit', compact('vacancy', 'vacancy_titles', 'vacancy_managers', 'vacancy_locations'));
    }

    /**
     * Update Vacancy in storage.
     *
     * @param  \App\Http\Requests\UpdateVacanciesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVacanciesRequest $request, $id)
    {
        if (! Gate::allows('vacancy_edit')) {
            return abort(401);
        }
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->update($request->all());



        return redirect()->route('admin.vacancies.index');
    }


    /**
     * Display Vacancy.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('vacancy_view')) {
            return abort(401);
        }
        
        $vacancy_titles = \App\Job::get()->pluck('job_title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $vacancy_managers = \App\Employee::get()->pluck('employee_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $vacancy_locations = \App\Nationality::get()->pluck('city', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$candidates = \App\Candidate::where('candidate_vacancy_id', $id)->get();$recruitmentoffers = \App\Recruitmentoffer::where('hiring_offer_id', $id)->get();

        $vacancy = Vacancy::findOrFail($id);

        return view('admin.vacancies.show', compact('vacancy', 'candidates', 'recruitmentoffers'));
    }


    /**
     * Remove Vacancy from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('vacancy_delete')) {
            return abort(401);
        }
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('admin.vacancies.index');
    }

    /**
     * Delete all selected Vacancy at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('vacancy_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Vacancy::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Vacancy from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('vacancy_delete')) {
            return abort(401);
        }
        $vacancy = Vacancy::onlyTrashed()->findOrFail($id);
        $vacancy->restore();

        return redirect()->route('admin.vacancies.index');
    }

    /**
     * Permanently delete Vacancy from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('vacancy_delete')) {
            return abort(401);
        }
        $vacancy = Vacancy::onlyTrashed()->findOrFail($id);
        $vacancy->forceDelete();

        return redirect()->route('admin.vacancies.index');
    }
}
