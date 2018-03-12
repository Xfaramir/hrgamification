<?php

namespace App\Http\Controllers\Admin;

use App\Disciplineaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDisciplineactionsRequest;
use App\Http\Requests\Admin\UpdateDisciplineactionsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class DisciplineactionsController extends Controller
{
    /**
     * Display a listing of Disciplineaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('disciplineaction_access')) {
            return abort(401);
        }



        if (request()->ajax()) {
            $query = Disciplineaction::query();
            $query->with("discipline_status");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {

        if (! Gate::allows('disciplineaction_delete')) {
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
                $gateKey  = 'disciplineaction_';
                $routeKey = 'admin.disciplineactions';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('disciplineactions', function ($row) {
                return $row->disciplineactions ? $row->disciplineactions : '';
            });
            $table->editColumn('discipline_severity', function ($row) {
                return $row->discipline_severity ? $row->discipline_severity : '';
            });

            $table->rawColumns(['actions']);

            return $table->make(true);
        }

        return view('admin.disciplineactions.index');
    }

    /**
     * Show the form for creating new Disciplineaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('disciplineaction_create')) {
            return abort(401);
        }

        $discipline_statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.disciplineactions.create', compact('discipline_statuses'));
    }

    /**
     * Store a newly created Disciplineaction in storage.
     *
     * @param  \App\Http\Requests\StoreDisciplineactionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisciplineactionsRequest $request)
    {
        if (! Gate::allows('disciplineaction_create')) {
            return abort(401);
        }
        $disciplineaction = Disciplineaction::create($request->all());



        return redirect()->route('admin.disciplineactions.index');
    }


    /**
     * Show the form for editing Disciplineaction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('disciplineaction_edit')) {
            return abort(401);
        }

        $discipline_statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $disciplineaction = Disciplineaction::findOrFail($id);

        return view('admin.disciplineactions.edit', compact('disciplineaction', 'discipline_statuses'));
    }

    /**
     * Update Disciplineaction in storage.
     *
     * @param  \App\Http\Requests\UpdateDisciplineactionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisciplineactionsRequest $request, $id)
    {
        if (! Gate::allows('disciplineaction_edit')) {
            return abort(401);
        }
        $disciplineaction = Disciplineaction::findOrFail($id);
        $disciplineaction->update($request->all());



        return redirect()->route('admin.disciplineactions.index');
    }


    /**
     * Display Disciplineaction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('disciplineaction_view')) {
            return abort(401);
        }

        $discipline_statuses = \App\Status::get()->pluck('status', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$disciplinarycases = \App\Disciplinarycase::where('disciplinary_actions_id', $id)->get();

        $disciplineaction = Disciplineaction::findOrFail($id);

        return view('admin.disciplineactions.show', compact('disciplineaction', 'disciplinarycases'));
    }


    /**
     * Remove Disciplineaction from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('disciplineaction_delete')) {
            return abort(401);
        }
        $disciplineaction = Disciplineaction::findOrFail($id);
        $disciplineaction->delete();

        return redirect()->route('admin.disciplineactions.index');
    }

    /**
     * Delete all selected Disciplineaction at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('disciplineaction_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Disciplineaction::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Disciplineaction from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('disciplineaction_delete')) {
            return abort(401);
        }
        $disciplineaction = Disciplineaction::onlyTrashed()->findOrFail($id);
        $disciplineaction->restore();

        return redirect()->route('admin.disciplineactions.index');
    }

    /**
     * Permanently delete Disciplineaction from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('disciplineaction_delete')) {
            return abort(401);
        }
        $disciplineaction = Disciplineaction::onlyTrashed()->findOrFail($id);
        $disciplineaction->forceDelete();

        return redirect()->route('admin.disciplineactions.index');
    }
}
