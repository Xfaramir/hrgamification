@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.selfprofessional.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.selfprofessional.fields.self-start')</th>
                            <td field-key='self_start'>{{ $selfprofessional->self_start }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfprofessional.fields.self-end')</th>
                            <td field-key='self_end'>{{ $selfprofessional->self_end }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfprofessional.fields.self-protitle')</th>
                            <td field-key='self_protitle'>{{ $selfprofessional->self_protitle }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfprofessional.fields.self-title')</th>
                            <td field-key='self_title'>{{ $selfprofessional->self_title->job_title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfprofessional.fields.self-comment')</th>
                            <td field-key='self_comment'>{!! $selfprofessional->self_comment !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.selfprofessionals.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
