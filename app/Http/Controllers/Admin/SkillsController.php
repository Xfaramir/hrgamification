<?php

namespace App\Http\Controllers\Admin;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSkillsRequest;
use App\Http\Requests\Admin\UpdateSkillsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SkillsController extends Controller
{
    /**
     * Display a listing of Skill.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('skill_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Skill::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('skill_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'skills.id',
                'skills.skill_name',
                'skills.skill_description',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'skill_';
                $routeKey = 'admin.skills';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('skill_name', function ($row) {
                return $row->skill_name ? $row->skill_name : '';
            });
            $table->editColumn('skill_description', function ($row) {
                return $row->skill_description ? $row->skill_description : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.skills.index');
    }

    /**
     * Show the form for creating new Skill.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('skill_create')) {
            return abort(401);
        }
        return view('admin.skills.create');
    }

    /**
     * Store a newly created Skill in storage.
     *
     * @param  \App\Http\Requests\StoreSkillsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillsRequest $request)
    {
        if (! Gate::allows('skill_create')) {
            return abort(401);
        }
        $skill = Skill::create($request->all());



        return redirect()->route('admin.skills.index');
    }


    /**
     * Show the form for editing Skill.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('skill_edit')) {
            return abort(401);
        }
        $skill = Skill::findOrFail($id);

        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Update Skill in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillsRequest $request, $id)
    {
        if (! Gate::allows('skill_edit')) {
            return abort(401);
        }
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());



        return redirect()->route('admin.skills.index');
    }


    /**
     * Display Skill.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('skill_view')) {
            return abort(401);
        }
        $courses = \App\Course::where('engament_skill_id', $id)->get();$employees = \App\Employee::where('employee_skills_id', $id)->get();

        $skill = Skill::findOrFail($id);

        return view('admin.skills.show', compact('skill', 'courses', 'employees'));
    }


    /**
     * Remove Skill from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('skill_delete')) {
            return abort(401);
        }
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('admin.skills.index');
    }

    /**
     * Delete all selected Skill at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('skill_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Skill::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Skill from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('skill_delete')) {
            return abort(401);
        }
        $skill = Skill::onlyTrashed()->findOrFail($id);
        $skill->restore();

        return redirect()->route('admin.skills.index');
    }

    /**
     * Permanently delete Skill from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('skill_delete')) {
            return abort(401);
        }
        $skill = Skill::onlyTrashed()->findOrFail($id);
        $skill->forceDelete();

        return redirect()->route('admin.skills.index');
    }
}
