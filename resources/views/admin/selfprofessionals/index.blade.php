@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.selfprofessional.title')</h3>
    @can('selfprofessional_create')
    <p>
        <a href="{{ route('admin.selfprofessionals.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
    </p>
    @endcan

    @can('selfprofessional_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.selfprofessionals.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.selfprofessionals.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($selfprofessionals) > 0 ? 'datatable' : '' }} @can('selfprofessional_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('selfprofessional_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.selfprofessional.fields.self-start')</th>
                        <th>@lang('quickadmin.selfprofessional.fields.self-end')</th>
                        <th>@lang('quickadmin.selfprofessional.fields.self-protitle')</th>
                        <th>@lang('quickadmin.selfprofessional.fields.self-title')</th>
                        <th>@lang('quickadmin.selfprofessional.fields.self-comment')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($selfprofessionals) > 0)
                        @foreach ($selfprofessionals as $selfprofessional)
                            <tr data-entry-id="{{ $selfprofessional->id }}">
                                @can('selfprofessional_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='self_start'>{{ $selfprofessional->self_start }}</td>
                                <td field-key='self_end'>{{ $selfprofessional->self_end }}</td>
                                <td field-key='self_protitle'>{{ $selfprofessional->self_protitle }}</td>
                                <td field-key='self_title'>{{ $selfprofessional->self_title->job_title or '' }}</td>
                                <td field-key='self_comment'>{!! $selfprofessional->self_comment !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('selfprofessional_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.selfprofessionals.restore', $selfprofessional->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('selfprofessional_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.selfprofessionals.perma_del', $selfprofessional->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('selfprofessional_view')
                                    <a href="{{ route('admin.selfprofessionals.show',[$selfprofessional->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('selfprofessional_edit')
                                    <a href="{{ route('admin.selfprofessionals.edit',[$selfprofessional->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('selfprofessional_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.selfprofessionals.destroy', $selfprofessional->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('selfprofessional_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.selfprofessionals.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection