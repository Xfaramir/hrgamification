@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.calendar.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.calendar.fields.calendar-event')</th>
                            <td field-key='calendar_event'>{{ $calendar->calendar_event }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.calendar.fields.calendar-time')</th>
                            <td field-key='calendar_time'>{{ $calendar->calendar_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.calendar.fields.calendar-location')</th>
                            <td field-key='calendar_location'>{{ $calendar->calendar_location }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.calendar.fields.calendar-description')</th>
                            <td field-key='calendar_description'>{!! $calendar->calendar_description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.calendar.fields.calendar-photo')</th>
                            <td field-key='calendar_photo'> @foreach($calendar->getMedia('calendar_photo') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                        </tr>
                    </table>
                </div>
        </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.calendars.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
