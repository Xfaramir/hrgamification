<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class OrganizationChartsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('organization_chart_access')) {
            return abort(401);
        }
        return view('admin.organization_charts.index');
    }
}
