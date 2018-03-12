@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.selfdocuments.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.selfdocuments.fields.self-resume')</th>
                            <td field-key='self_resume's> @foreach($selfdocument->getMedia('self_resume') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfdocuments.fields.self-offerletter')</th>
                            <td field-key='self_offerletter'>@if($selfdocument->self_offerletter)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_offerletter) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfdocuments.fields.self-joinletter')</th>
                            <td field-key='self_joinletter'>@if($selfdocument->self_joinletter)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_joinletter) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfdocuments.fields.self-contract')</th>
                            <td field-key='self_contract'>@if($selfdocument->self_contract)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_contract) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfdocuments.fields.self-id')</th>
                            <td field-key='self_id'>@if($selfdocument->self_id)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_id) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $selfdocument->self_id) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.selfdocuments.fields.self-photo')</th>
                            <td field-key='self_photo'>@if($selfdocument->self_photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $selfdocument->self_photo) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.selfdocuments.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
