<?php

namespace App\Http\Controllers\Admin;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCandidatesRequest;
use App\Http\Requests\Admin\UpdateCandidatesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CandidatesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Candidate.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('candidate_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('candidate_delete')) {
                return abort(401);
            }
            $candidates = Candidate::onlyTrashed()->get();
        } else {
            $candidates = Candidate::all();
        }

        return view('admin.candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating new Candidate.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('candidate_create')) {
            return abort(401);
        }
        
        $candidate_vacancies = \App\Vacancy::get()->pluck('vacancy_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.candidates.create', compact('candidate_vacancies'));
    }

    /**
     * Store a newly created Candidate in storage.
     *
     * @param  \App\Http\Requests\StoreCandidatesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCandidatesRequest $request)
    {
        if (! Gate::allows('candidate_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $candidate = Candidate::create($request->all());


        foreach ($request->input('candidate_resume_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $candidate->id;
            $file->save();
        }

        return redirect()->route('admin.candidates.index');
    }


    /**
     * Show the form for editing Candidate.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('candidate_edit')) {
            return abort(401);
        }
        
        $candidate_vacancies = \App\Vacancy::get()->pluck('vacancy_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $candidate = Candidate::findOrFail($id);

        return view('admin.candidates.edit', compact('candidate', 'candidate_vacancies'));
    }

    /**
     * Update Candidate in storage.
     *
     * @param  \App\Http\Requests\UpdateCandidatesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidatesRequest $request, $id)
    {
        if (! Gate::allows('candidate_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $candidate = Candidate::findOrFail($id);
        $candidate->update($request->all());


        $media = [];
        foreach ($request->input('candidate_resume_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $candidate->id;
            $file->save();
            $media[] = $file;
        }
        $candidate->updateMedia($media, 'candidate_resume');

        return redirect()->route('admin.candidates.index');
    }


    /**
     * Display Candidate.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('candidate_view')) {
            return abort(401);
        }
        $candidate = Candidate::findOrFail($id);

        return view('admin.candidates.show', compact('candidate'));
    }


    /**
     * Remove Candidate from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('candidate_delete')) {
            return abort(401);
        }
        $candidate = Candidate::findOrFail($id);
        $candidate->deletePreservingMedia();

        return redirect()->route('admin.candidates.index');
    }

    /**
     * Delete all selected Candidate at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('candidate_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Candidate::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->deletePreservingMedia();
            }
        }
    }


    /**
     * Restore Candidate from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('candidate_delete')) {
            return abort(401);
        }
        $candidate = Candidate::onlyTrashed()->findOrFail($id);
        $candidate->restore();

        return redirect()->route('admin.candidates.index');
    }

    /**
     * Permanently delete Candidate from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('candidate_delete')) {
            return abort(401);
        }
        $candidate = Candidate::onlyTrashed()->findOrFail($id);
        $candidate->forceDelete();

        return redirect()->route('admin.candidates.index');
    }
}
