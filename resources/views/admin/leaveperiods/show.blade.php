@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leaveperiod.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.leaveperiod.fields.leave-type')</th>
                            <td field-key='leave_type'>{{ $leaveperiod->leave_type }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.leaveperiod.fields.leave-from')</th>
                            <td field-key='leave_from'>{{ $leaveperiod->leave_from }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.leaveperiod.fields.leave-until')</th>
                            <td field-key='leave_until'>{{ $leaveperiod->leave_until }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#leaveentitlement" aria-controls="leaveentitlement" role="tab" data-toggle="tab">Add Leave Entitlement</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="leaveentitlement">
<table class="table table-bordered table-striped {{ count($leaveentitlements) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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

            <p>&nbsp;</p>

            <a href="{{ route('admin.leaveperiods.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
