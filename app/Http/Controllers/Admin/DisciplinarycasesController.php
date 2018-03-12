<?php

namespace App\Http\Controllers\Admin;

use App\Disciplinarycase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDisciplinarycasesRequest;
use App\Http\Requests\Admin\UpdateDisciplinarycasesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class DisciplinarycasesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Disciplinarycase.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('disciplinarycase_access')) {
            return abort(401);
        }



        if (request()->ajax()) {
            $query = Disciplinarycase::query();
            $query->with("discipline_employee");
            $query->with("disciplinary_actions");
            $query->with("disciplinary_manager");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {

        if (! Gate::allows('disciplinarycase_delete')) {
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
                $gateKey  = 'disciplinarycase_';
                $routeKey = 'admin.disciplinarycases';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('discipline_employee.employee_id', function ($row) {
                return $row->discipline_employee ? $row->discipline_employee->employee_id : '';
            });
            $table->editColumn('discipline_case', function ($row) {
                return $row->discipline_case ? $row->discipline_case : '';
            });
            $table->editColumn('disciplinary_description', function ($row) {
                return $row->disciplinary_description ? $row->disciplinary_description : '';
            });
            $table->editColumn('disciplinary_document', function ($row) {
                $build  = '';
                foreach ($row->getMedia('disciplinary_document') as $media) {
                    $build .= '<p class="form-group"><a href="' . $media->getUrl() . '" target="_blank">' . $media->name . '</a></p>';
                }

                return $build;
            });
            $table->editColumn('disciplinary_date', function ($row) {
                return $row->disciplinary_date ? $row->disciplinary_date : '';
            });
            $table->editColumn('disciplinary_actions.disciplineactions', function ($row) {
                return $row->disciplinary_actions ? $row->disciplinary_actions->disciplineactions : '';
            });
            $table->editColumn('disciplinary_manager.username', function ($row) {
                return $row->disciplinary_manager ? $row->disciplinary_manager->username : '';
            });

            $table->rawColumns(['actions','disciplinary_document']);

            return $table->make(true);
        }

        return view('admin.disciplinarycases.index');
    }

    /**
     * Show the form for creating new Disciplinarycase.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('disciplinarycase_create')) {
            return abort(401);
        }
        
        $discipline_employees = \App\Employee::get()->pluck('employee_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $disciplinary_actions = \App\Disciplineaction::get()->pluck('disciplineactions', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $disciplinary_managers = \App\User::get()->pluck('username', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.disciplinarycases.create', compact('discipline_employees', 'disciplinary_actions', 'disciplinary_managers'));
    }

    /**
     * Store a newly created Disciplinarycase in storage.
     *
     * @param  \App\Http\Requests\StoreDisciplinarycasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisciplinarycasesRequest $request)
    {
        if (! Gate::allows('disciplinarycase_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $disciplinarycase = Disciplinarycase::create($request->all());


        foreach ($request->input('disciplinary_document_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $disciplinarycase->id;
            $file->save();
        }

        return redirect()->route('admin.disciplinarycases.index');
    }


    /**
     * Show the form for editing Disciplinarycase.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('disciplinarycase_edit')) {
            return abort(401);
        }
        
        $discipline_employees = \App\Employee::get()->pluck('employee_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $disciplinary_actions = \App\Disciplineaction::get()->pluck('disciplineactions', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $disciplinary_managers = \App\User::get()->pluck('username', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $disciplinarycase = Disciplinarycase::findOrFail($id);

        return view('admin.disciplinarycases.edit', compact('disciplinarycase', 'discipline_employees', 'disciplinary_actions', 'disciplinary_managers'));
    }

    /**
     * Update Disciplinarycase in storage.
     *
     * @param  \App\Http\Requests\UpdateDisciplinarycasesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisciplinarycasesRequest $request, $id)
    {
        if (! Gate::allows('disciplinarycase_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $disciplinarycase = Disciplinarycase::findOrFail($id);
        $disciplinarycase->update($request->all());


        $media = [];
        foreach ($request->input('disciplinary_document_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $disciplinarycase->id;
            $file->save();
            $media[] = $file;
        }
        $disciplinarycase->updateMedia($media, 'disciplinary_document');

        return redirect()->route('admin.disciplinarycases.index');
    }


    /**
     * Display Disciplinarycase.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('disciplinarycase_view')) {
            return abort(401);
        }
        $disciplinarycase = Disciplinarycase::findOrFail($id);

        return view('admin.disciplinarycases.show', compact('disciplinarycase'));
    }


    /**
     * Remove Disciplinarycase from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('disciplinarycase_delete')) {
            return abort(401);
        }
        $disciplinarycase = Disciplinarycase::findOrFail($id);
        $disciplinarycase->deletePreservingMedia();

        return redirect()->route('admin.disciplinarycases.index');
    }

    /**
     * Delete all selected Disciplinarycase at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('disciplinarycase_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Disciplinarycase::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->deletePreservingMedia();
            }
        }
    }


    /**
     * Restore Disciplinarycase from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('disciplinarycase_delete')) {
            return abort(401);
        }
        $disciplinarycase = Disciplinarycase::onlyTrashed()->findOrFail($id);
        $disciplinarycase->restore();

        return redirect()->route('admin.disciplinarycases.index');
    }

    /**
     * Permanently delete Disciplinarycase from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('disciplinarycase_delete')) {
            return abort(401);
        }
        $disciplinarycase = Disciplinarycase::onlyTrashed()->findOrFail($id);
        $disciplinarycase->forceDelete();

        return redirect()->route('admin.disciplinarycases.index');
    }
}
