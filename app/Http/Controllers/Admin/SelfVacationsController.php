<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class SelfVacationsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('self_vacation_access')) {
            return abort(401);
        }
        return view('admin.self_vacations.index');
    }
}
