<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 

        foreach (\App\Calendar::all() as $calendar) { 
           $crudFieldValue = $calendar->getOriginal('calendar_time'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $calendar->calendar_event; 
           $prefix         = ''; 
           $suffix         = ''; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('admin.calendars.show', $calendar->id)
           ]; 
        } 


       return view('admin.calendar' , compact('events'));
    }

}
