@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leaveentitlement.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.leaveentitlement.fields.leave-type')</th>
                            <td field-key='leave_type'>{{ $leaveentitlement->leave_type->leave_type or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.leaveentitlement.fields.leave-employee')</th>
                            <td field-key='leave_employee'>{{ $leaveentitlement->leave_employee->employee_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.leaveentitlement.fields.leave-from')</th>
                            <td field-key='leave_from'>{{ $leaveentitlement->leave_from }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.leaveentitlement.fields.leave-until')</th>
                            <td field-key='leave_until'>{{ $leaveentitlement->leave_until }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.leaveentitlement.fields.status')</th>
                            <td field-key='status'>{{ $leaveentitlement->status->status or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.leaveentitlements.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
