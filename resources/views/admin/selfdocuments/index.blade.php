@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.selfdocuments.title')</h3>
    @can('selfdocument_create')
    <p>
        <a href="{{ route('admin.selfdocuments.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    @can('selfdocument_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.selfdocuments.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.selfdocuments.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($selfdocuments) > 0 ? 'datatable' : '' }} @can('selfdocument_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('selfdocument_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.selfdocuments.fields.self-resume')</th>
                        <th>@lang('quickadmin.selfdocuments.fields.self-offerletter')</th>
                        <th>@lang('quickadmin.selfdocuments.fields.self-joinletter')</th>
                        <th>@lang('quickadmin.selfdocuments.fields.self-contract')</th>
                        <th>@lang('quickadmin.selfdocuments.fields.self-id')</th>
                        <th>@lang('quickadmin.selfdocuments.fields.self-photo')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($selfdocuments) > 0)
                        @foreach ($selfdocuments as $selfdocument)
                            <tr data-entry-id="{{ $selfdocument->id }}">
                                @can('selfdocument_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='self_resume'> @foreach($selfdocument->getMedia('self_resume') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                                <td field-key='self_offerletter'>@if($selfdocument->self_offerletter)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_offerletter) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='self_joinletter'>@if($selfdocument->self_joinletter)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_joinletter) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='self_contract'>@if($selfdocument->self_contract)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_contract) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='self_id'>@if($selfdocument->self_id)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_id) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $selfdocument->self_id) }}"/></a>@endif</td>
                                <td field-key='self_photo'>@if($selfdocument->self_photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $selfdocument->self_photo) }}"/></a>@endif</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('selfdocument_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.selfdocuments.restore', $selfdocument->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('selfdocument_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.selfdocuments.perma_del', $selfdocument->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('selfdocument_view')
                                    <a href="{{ route('admin.selfdocuments.show',[$selfdocument->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('selfdocument_edit')
                                    <a href="{{ route('admin.selfdocuments.edit',[$selfdocument->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('selfdocument_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.selfdocuments.destroy', $selfdocument->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('selfdocument_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.selfdocuments.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection