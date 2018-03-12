<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class NewsController extends Controller
{
    /**
     * Display a listing of News.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('news_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('news_delete')) {
                return abort(401);
            }
            $news = News::onlyTrashed()->get();
        } else {
            $news = News::all();
        }

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating new News.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('news_create')) {
            return abort(401);
        }
        return view('admin.news.create');
    }

    /**
     * Store a newly created News in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        if (! Gate::allows('news_create')) {
            return abort(401);
        }
        $news = News::create($request->all());



        return redirect()->route('admin.news.index');
    }


    /**
     * Show the form for editing News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('news_edit')) {
            return abort(401);
        }
        $news = News::findOrFail($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update News in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        if (! Gate::allows('news_edit')) {
            return abort(401);
        }
        $news = News::findOrFail($id);
        $news->update($request->all());



        return redirect()->route('admin.news.index');
    }


    /**
     * Display News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('news_view')) {
            return abort(401);
        }
        $news = News::findOrFail($id);

        return view('admin.news.show', compact('news'));
    }


    /**
     * Remove News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('news_delete')) {
            return abort(401);
        }
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.news.index');
    }

    /**
     * Delete all selected News at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('news_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = News::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('news_delete')) {
            return abort(401);
        }
        $news = News::onlyTrashed()->findOrFail($id);
        $news->restore();

        return redirect()->route('admin.news.index');
    }

    /**
     * Permanently delete News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('news_delete')) {
            return abort(401);
        }
        $news = News::onlyTrashed()->findOrFail($id);
        $news->forceDelete();

        return redirect()->route('admin.news.index');
    }
}
