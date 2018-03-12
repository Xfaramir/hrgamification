<?php

namespace App\Http\Controllers\Admin;

use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCalendarsRequest;
use App\Http\Requests\Admin\UpdateCalendarsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CalendarsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Calendar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('calendar_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Calendar::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('calendar_delete')) {
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
                $gateKey  = 'calendar_';
                $routeKey = 'admin.calendars';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('calendar_event', function ($row) {
                return $row->calendar_event ? $row->calendar_event : '';
            });
            $table->editColumn('calendar_time', function ($row) {
                return $row->calendar_time ? $row->calendar_time : '';
            });
            $table->editColumn('calendar_location', function ($row) {
                return $row->calendar_location ? $row->calendar_location : '';
            });
            $table->editColumn('calendar_description', function ($row) {
                return $row->calendar_description ? $row->calendar_description : '';
            });
            $table->editColumn('calendar_photo', function ($row) {
                $build  = '';
                foreach ($row->getMedia('calendar_photo') as $media) {
                    $build .= '<p class="form-group"><a href="' . $media->getUrl() . '" target="_blank">' . $media->name . '</a></p>';
                }
                
                return $build;
            });

            $table->rawColumns(['actions','calendar_photo']);

            return $table->make(true);
        }

        return view('admin.calendars.index');
    }

    /**
     * Show the form for creating new Calendar.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('calendar_create')) {
            return abort(401);
        }
        return view('admin.calendars.create');
    }

    /**
     * Store a newly created Calendar in storage.
     *
     * @param  \App\Http\Requests\StoreCalendarsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalendarsRequest $request)
    {
        if (! Gate::allows('calendar_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $calendar = Calendar::create($request->all());


        foreach ($request->input('calendar_photo_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $calendar->id;
            $file->save();
        }

        return redirect()->route('admin.calendars.index');
    }


    /**
     * Show the form for editing Calendar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('calendar_edit')) {
            return abort(401);
        }
        $calendar = Calendar::findOrFail($id);

        return view('admin.calendars.edit', compact('calendar'));
    }

    /**
     * Update Calendar in storage.
     *
     * @param  \App\Http\Requests\UpdateCalendarsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalendarsRequest $request, $id)
    {
        if (! Gate::allows('calendar_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $calendar = Calendar::findOrFail($id);
        $calendar->update($request->all());


        $media = [];
        foreach ($request->input('calendar_photo_id', []) as $index => $id) {
            $model          = config('laravel-medialibrary.media_model');
            $file           = $model::find($id);
            $file->model_id = $calendar->id;
            $file->save();
            $media[] = $file->toArray();
        }
        $calendar->updateMedia($media, 'calendar_photo');

        return redirect()->route('admin.calendars.index');
    }


    /**
     * Display Calendar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('calendar_view')) {
            return abort(401);
        }
        $calendar = Calendar::findOrFail($id);

        return view('admin.calendars.show', compact('calendar'));
    }


    /**
     * Remove Calendar from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('calendar_delete')) {
            return abort(401);
        }
        $calendar = Calendar::findOrFail($id);
        $calendar->deletePreservingMedia();

        return redirect()->route('admin.calendars.index');
    }

    /**
     * Delete all selected Calendar at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('calendar_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Calendar::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->deletePreservingMedia();
            }
        }
    }


    /**
     * Restore Calendar from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('calendar_delete')) {
            return abort(401);
        }
        $calendar = Calendar::onlyTrashed()->findOrFail($id);
        $calendar->restore();

        return redirect()->route('admin.calendars.index');
    }

    /**
     * Permanently delete Calendar from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('calendar_delete')) {
            return abort(401);
        }
        $calendar = Calendar::onlyTrashed()->findOrFail($id);
        $calendar->forceDelete();

        return redirect()->route('admin.calendars.index');
    }
}
