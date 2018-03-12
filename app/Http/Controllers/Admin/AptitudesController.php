<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class AptitudesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('aptitude_access')) {
            return abort(401);
        }
        return view('admin.aptitudes.index');
    }
}
