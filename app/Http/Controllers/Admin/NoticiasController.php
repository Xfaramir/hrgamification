<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class NoticiasController extends Controller
{
    public function index()
    {
        if (! Gate::allows('noticia_access')) {
            return abort(401);
        }
        return view('admin.noticias.index');
    }
}
