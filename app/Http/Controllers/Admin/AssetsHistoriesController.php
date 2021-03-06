<?php

namespace App\Http\Controllers\Admin;

use App\AssetsHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssetsHistoriesRequest;
use App\Http\Requests\Admin\UpdateAssetsHistoriesRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AssetsHistoriesController extends Controller
{
    /**
     * Display a listing of AssetsHistory.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('assets_history_access')) {
            return abort(401);
        }


                $assets_histories = AssetsHistory::all();

        return view('admin.assets_histories.index', compact('assets_histories'));
    }
}
