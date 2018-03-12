@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leaveentitlement.title')</h3>
    @can('leaveentitlement_create')
    <p>
        <a href="{{ route('admin.leaveentitlements.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    @can('leaveentitlement_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.leaveentitlements.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.leaveentitlements.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($leaveentitlements) > 0 ? 'datatable' : '' }} @can('leaveentitlement_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('leaveentitlement_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.leaveentitlement.fields.leave-type')</th>
                        <th>@lang('quickadmin.leaveentitlement.fields.leave-employee')</th>
                        <th>@lang('quickadmin.leaveentitlement.fields.leave-from')</th>
                        <th>@lang('quickadmin.leaveentitlement.fields.leave-until')</th>
                        <th>@lang('quickadmin.leaveentitlement.fields.status')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($leaveentitlements) > 0)
                        @foreach ($leaveentitlements as $leaveentitlement)
                            <tr data-entry-id="{{ $leaveentitlement->id }}">
                                @can('leaveentitlement_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='leave_type'>{{ $leaveentitlement->leave_type->leave_type or '' }}</td>
                                <td field-key='leave_employee'>{{ $leaveentitlement->leave_employee->employee_name or '' }}</td>
                                <td field-key='leave_from'>{{ $leaveentitlement->leave_from }}</td>
                                <td field-key='leave_until'>{{ $leaveentitlement->leave_until }}</td>
                                <td field-key='status'>{{ $leaveentitlement->status->status or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('leaveentitlement_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.leaveentitlements.restore', $leaveentitlement->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('leaveentitlement_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.leaveentitlements.perma_del', $leaveentitlement->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('leaveentitlement_view')
                                    <a href="{{ route('admin.leaveentitlements.show',[$leaveentitlement->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('leaveentitlement_edit')
                                    <a href="{{ route('admin.leaveentitlements.edit',[$leaveentitlement->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('leaveentitlement_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.leaveentitlements.destroy', $leaveentitlement->id])) !!}
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
        @can('leaveentitlement_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.leaveentitlements.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection