<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Employee;
use App\Contact;
use App\Calendar;
use App\Vacancy;
use App\User;
use App\Asset;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $employee = Employee::all()->count();
        $contacts = Contact::all()->count();
        $calendar = Calendar::all()->count();
        $vacancy = Vacancy::all()->count();
        $totalusers = User::all()->count();
        $totalemployees = Employee::all()->count();
        $asset = Asset::all()->count();
        $vacancies = Vacancy::All();

        return view('home', compact('employee', 'contacts', 'calendar', 'vacancy', 'totalusers', 'totalemployees','asset','vacancies'));
    }
}