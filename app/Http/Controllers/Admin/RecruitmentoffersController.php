<?php

namespace App\Http\Controllers\Admin;

use App\Recruitmentoffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRecruitmentoffersRequest;
use App\Http\Requests\Admin\UpdateRecruitmentoffersRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class RecruitmentoffersController extends Controller
{
    /**
     * Display a listing of Recruitmentoffer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('recruitmentoffer_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Recruitmentoffer::query();
            $query->with("hiring_offer");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('recruitmentoffer_delete')) {
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
                $gateKey  = 'recruitmentoffer_';
                $routeKey = 'admin.recruitmentoffers';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('hiring_offer.vacancy_name', function ($row) {
                return $row->hiring_offer ? $row->hiring_offer->vacancy_name : '';
            });

            $table->rawColumns(['actions']);

            return $table->make(true);
        }

        return view('admin.recruitmentoffers.index');
    }

    /**
     * Show the form for creating new Recruitmentoffer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('recruitmentoffer_create')) {
            return abort(401);
        }
        
        $hiring_offers = \App\Vacancy::get()->pluck('vacancy_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.recruitmentoffers.create', compact('hiring_offers'));
    }

    /**
     * Store a newly created Recruitmentoffer in storage.
     *
     * @param  \App\Http\Requests\StoreRecruitmentoffersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecruitmentoffersRequest $request)
    {
        if (! Gate::allows('recruitmentoffer_create')) {
            return abort(401);
        }
        $recruitmentoffer = Recruitmentoffer::create($request->all());



        return redirect()->route('admin.recruitmentoffers.index');
    }


    /**
     * Show the form for editing Recruitmentoffer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('recruitmentoffer_edit')) {
            return abort(401);
        }
        
        $hiring_offers = \App\Vacancy::get()->pluck('vacancy_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $recruitmentoffer = Recruitmentoffer::findOrFail($id);

        return view('admin.recruitmentoffers.edit', compact('recruitmentoffer', 'hiring_offers'));
    }

    /**
     * Update Recruitmentoffer in storage.
     *
     * @param  \App\Http\Requests\UpdateRecruitmentoffersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecruitmentoffersRequest $request, $id)
    {
        if (! Gate::allows('recruitmentoffer_edit')) {
            return abort(401);
        }
        $recruitmentoffer = Recruitmentoffer::findOrFail($id);
        $recruitmentoffer->update($request->all());



        return redirect()->route('admin.recruitmentoffers.index');
    }


    /**
     * Display Recruitmentoffer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('recruitmentoffer_view')) {
            return abort(401);
        }
        $recruitmentoffer = Recruitmentoffer::findOrFail($id);

        return view('admin.recruitmentoffers.show', compact('recruitmentoffer'));
    }


    /**
     * Remove Recruitmentoffer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('recruitmentoffer_delete')) {
            return abort(401);
        }
        $recruitmentoffer = Recruitmentoffer::findOrFail($id);
        $recruitmentoffer->delete();

        return redirect()->route('admin.recruitmentoffers.index');
    }

    /**
     * Delete all selected Recruitmentoffer at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('recruitmentoffer_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Recruitmentoffer::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Recruitmentoffer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('recruitmentoffer_delete')) {
            return abort(401);
        }
        $recruitmentoffer = Recruitmentoffer::onlyTrashed()->findOrFail($id);
        $recruitmentoffer->restore();

        return redirect()->route('admin.recruitmentoffers.index');
    }

    /**
     * Permanently delete Recruitmentoffer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('recruitmentoffer_delete')) {
            return abort(401);
        }
        $recruitmentoffer = Recruitmentoffer::onlyTrashed()->findOrFail($id);
        $recruitmentoffer->forceDelete();

        return redirect()->route('admin.recruitmentoffers.index');
    }
}
