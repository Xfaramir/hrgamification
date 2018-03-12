<?php

namespace App\Http\Controllers\Admin;

use App\Nationality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNationalitiesRequest;
use App\Http\Requests\Admin\UpdateNationalitiesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class NationalitiesController extends Controller
{
    /**
     * Display a listing of Nationality.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('nationality_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Nationality::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('nationality_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'nationalities.id',
                'nationalities.nationalities',
                'nationalities.city',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'nationality_';
                $routeKey = 'admin.nationalities';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('nationalities', function ($row) {
                return $row->nationalities ? $row->nationalities : '';
            });
            $table->editColumn('city', function ($row) {
                return $row->city ? $row->city : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.nationalities.index');
    }

    /**
     * Show the form for creating new Nationality.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('nationality_create')) {
            return abort(401);
        }
        return view('admin.nationalities.create');
    }

    /**
     * Store a newly created Nationality in storage.
     *
     * @param  \App\Http\Requests\StoreNationalitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNationalitiesRequest $request)
    {
        if (! Gate::allows('nationality_create')) {
            return abort(401);
        }
        $nationality = Nationality::create($request->all());



        return redirect()->route('admin.nationalities.index');
    }


    /**
     * Show the form for editing Nationality.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('nationality_edit')) {
            return abort(401);
        }
        $nationality = Nationality::findOrFail($id);

        return view('admin.nationalities.edit', compact('nationality'));
    }

    /**
     * Update Nationality in storage.
     *
     * @param  \App\Http\Requests\UpdateNationalitiesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNationalitiesRequest $request, $id)
    {
        if (! Gate::allows('nationality_edit')) {
            return abort(401);
        }
        $nationality = Nationality::findOrFail($id);
        $nationality->update($request->all());



        return redirect()->route('admin.nationalities.index');
    }


    /**
     * Display Nationality.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('nationality_view')) {
            return abort(401);
        }
        $vacancies = \App\Vacancy::where('vacancy_location_id', $id)->get();$employees = \App\Employee::where('employee_nationality_id', $id)->get();

        $nationality = Nationality::findOrFail($id);

        return view('admin.nationalities.show', compact('nationality', 'vacancies', 'employees'));
    }


    /**
     * Remove Nationality from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('nationality_delete')) {
            return abort(401);
        }
        $nationality = Nationality::findOrFail($id);
        $nationality->delete();

        return redirect()->route('admin.nationalities.index');
    }

    /**
     * Delete all selected Nationality at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('nationality_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Nationality::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Nationality from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('nationality_delete')) {
            return abort(401);
        }
        $nationality = Nationality::onlyTrashed()->findOrFail($id);
        $nationality->restore();

        return redirect()->route('admin.nationalities.index');
    }

    /**
     * Permanently delete Nationality from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('nationality_delete')) {
            return abort(401);
        }
        $nationality = Nationality::onlyTrashed()->findOrFail($id);
        $nationality->forceDelete();

        return redirect()->route('admin.nationalities.index');
    }
}
