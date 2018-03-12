<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Contact;
use App\Asset;
use App\Candidate;

class ReportsController extends Controller
{
    public function employeesStats()
    {
        $reportTitle = 'Employees Stats';
        $reportLabel = 'COUNT';
        $chartType   = 'bar';

        $results = Employee::get()->sortBy('created_at')->groupBy(function ($entry) {
            if ($entry->created_at instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->created_at)->format('Y-m');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->created_at)->format('Y-m');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    public function contactStats()
    {
        $reportTitle = 'Contact Stats';
        $reportLabel = 'COUNT';
        $chartType   = 'bar';

        $results = Contact::get()->sortBy('created_at')->groupBy(function ($entry) {
            if ($entry->created_at instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->created_at)->format('Y-m');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->created_at)->format('Y-m');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    public function assetStats()
    {
        $reportTitle = 'Asset Stats';
        $reportLabel = 'COUNT';
        $chartType   = 'bar';

        $results = Asset::get()->sortBy('created_at')->groupBy(function ($entry) {
            if ($entry->created_at instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->created_at)->format('Y/W');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->created_at)->format('Y/W');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    public function jobCandidates()
    {
        $reportTitle = 'Job Candidates';
        $reportLabel = 'COUNT';
        $chartType   = 'bar';

        $results = Candidate::get()->sortBy('candidate_date')->groupBy(function ($entry) {
            if ($entry->candidate_date instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->candidate_date)->format('Y-m');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->candidate_date)->format('Y-m');
        })->map(function ($entries, $group) {
            return $entries->count('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

}
