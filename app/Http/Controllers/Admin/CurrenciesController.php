<?php

namespace App\Http\Controllers\Admin;

use App\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCurrenciesRequest;
use App\Http\Requests\Admin\UpdateCurrenciesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CurrenciesController extends Controller
{
    /**
     * Display a listing of Currency.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('currency_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Currency::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('currency_delete')) {
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
                $gateKey  = 'currency_';
                $routeKey = 'admin.currencies';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('currency', function ($row) {
                return $row->currency ? $row->currency : '';
            });

            $table->rawColumns(['actions']);

            return $table->make(true);
        }

        return view('admin.currencies.index');
    }

    /**
     * Show the form for creating new Currency.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('currency_create')) {
            return abort(401);
        }
        return view('admin.currencies.create');
    }

    /**
     * Store a newly created Currency in storage.
     *
     * @param  \App\Http\Requests\StoreCurrenciesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrenciesRequest $request)
    {
        if (! Gate::allows('currency_create')) {
            return abort(401);
        }
        $currency = Currency::create($request->all());



        return redirect()->route('admin.currencies.index');
    }


    /**
     * Show the form for editing Currency.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('currency_edit')) {
            return abort(401);
        }
        $currency = Currency::findOrFail($id);

        return view('admin.currencies.edit', compact('currency'));
    }

    /**
     * Update Currency in storage.
     *
     * @param  \App\Http\Requests\UpdateCurrenciesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrenciesRequest $request, $id)
    {
        if (! Gate::allows('currency_edit')) {
            return abort(401);
        }
        $currency = Currency::findOrFail($id);
        $currency->update($request->all());



        return redirect()->route('admin.currencies.index');
    }


    /**
     * Display Currency.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('currency_view')) {
            return abort(401);
        }
        $currency = Currency::findOrFail($id);

        return view('admin.currencies.show', compact('currency'));
    }


    /**
     * Remove Currency from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('currency_delete')) {
            return abort(401);
        }
        $currency = Currency::findOrFail($id);
        $currency->delete();

        return redirect()->route('admin.currencies.index');
    }

    /**
     * Delete all selected Currency at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('currency_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Currency::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Currency from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('currency_delete')) {
            return abort(401);
        }
        $currency = Currency::onlyTrashed()->findOrFail($id);
        $currency->restore();

        return redirect()->route('admin.currencies.index');
    }

    /**
     * Permanently delete Currency from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('currency_delete')) {
            return abort(401);
        }
        $currency = Currency::onlyTrashed()->findOrFail($id);
        $currency->forceDelete();

        return redirect()->route('admin.currencies.index');
    }
}
