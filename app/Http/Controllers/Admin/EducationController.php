<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEducationRequest;
use App\Http\Requests\Admin\UpdateEducationRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EducationController extends Controller
{
    /**
     * Display a listing of Education.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('education_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Education::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('education_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'education.id',
                'education.education_level',
                'education.education_title',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'education_';
                $routeKey = 'admin.education';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('education_level', function ($row) {
                return $row->education_level ? $row->education_level : '';
            });
            $table->editColumn('education_title', function ($row) {
                return $row->education_title ? $row->education_title : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.education.index');
    }

    /**
     * Show the form for creating new Education.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('education_create')) {
            return abort(401);
        }
        return view('admin.education.create');
    }

    /**
     * Store a newly created Education in storage.
     *
     * @param  \App\Http\Requests\StoreEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEducationRequest $request)
    {
        if (! Gate::allows('education_create')) {
            return abort(401);
        }
        $education = Education::create($request->all());



        return redirect()->route('admin.education.index');
    }


    /**
     * Show the form for editing Education.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('education_edit')) {
            return abort(401);
        }
        $education = Education::findOrFail($id);

        return view('admin.education.edit', compact('education'));
    }

    /**
     * Update Education in storage.
     *
     * @param  \App\Http\Requests\UpdateEducationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationRequest $request, $id)
    {
        if (! Gate::allows('education_edit')) {
            return abort(401);
        }
        $education = Education::findOrFail($id);
        $education->update($request->all());



        return redirect()->route('admin.education.index');
    }


    /**
     * Display Education.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('education_view')) {
            return abort(401);
        }
        $employees = \App\Employee::where('employee_education_id', $id)->get();

        $education = Education::findOrFail($id);

        return view('admin.education.show', compact('education', 'employees'));
    }


    /**
     * Remove Education from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('education_delete')) {
            return abort(401);
        }
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.education.index');
    }

    /**
     * Delete all selected Education at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('education_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Education::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Education from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('education_delete')) {
            return abort(401);
        }
        $education = Education::onlyTrashed()->findOrFail($id);
        $education->restore();

        return redirect()->route('admin.education.index');
    }

    /**
     * Permanently delete Education from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('education_delete')) {
            return abort(401);
        }
        $education = Education::onlyTrashed()->findOrFail($id);
        $education->forceDelete();

        return redirect()->route('admin.education.index');
    }
}
