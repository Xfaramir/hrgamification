@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.badges.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.badges.fields.title')</th>
                            <td field-key='title'>{{ $badge->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.badges.fields.icon')</th>
                            <td field-key='icon'>@if($badge->icon)<a href="{{ asset(env('UPLOAD_PATH').'/' . $badge->icon) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $badge->icon) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.badges.fields.description')</th>
                            <td field-key='description'>{!! $badge->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.badges.fields.status')</th>
                            <td field-key='status'>{{ $badge->status->status or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.badges.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
