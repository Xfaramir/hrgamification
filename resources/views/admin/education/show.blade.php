@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.education.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.education.fields.education-level')</th>
                            <td field-key='education_level'>{{ $education->education_level }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.education.fields.education-title')</th>
                            <td field-key='education_title'>{{ $education->education_title }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#employees" aria-controls="employees" role="tab" data-toggle="tab">Employees</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="employees">
<table class="table table-bordered table-striped {{ count($employees) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.employees.fields.employee-name')</th>
                        <th>@lang('quickadmin.employees.fields.employee-middlename')</th>
                        <th>@lang('quickadmin.employees.fields.employee-lastname')</th>
                        <th>@lang('quickadmin.employees.fields.employee-salary')</th>
                        <th>@lang('quickadmin.employees.fields.employee-photo')</th>
                        <th>@lang('quickadmin.employees.fields.employee-username')</th>
                        <th>@lang('quickadmin.employees.fields.employee-id')</th>
                        <th>@lang('quickadmin.employees.fields.employee-title')</th>
                        <th>@lang('quickadmin.employees.fields.employee-timeshift')</th>
                        <th>@lang('quickadmin.employees.fields.employee-costcenter')</th>
                        <th>@lang('quickadmin.employees.fields.employee-skills')</th>
                        <th>@lang('quickadmin.employees.fields.employee-education')</th>
                        <th>@lang('quickadmin.employees.fields.employee-nationality')</th>
                        <th>@lang('quickadmin.employees.fields.employee-phone')</th>
                        <th>@lang('quickadmin.employees.fields.employee-address')</th>
                        <th>@lang('quickadmin.employees.fields.employee-bankaccount')</th>
                        <th>@lang('quickadmin.employees.fields.employee-email')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($employees) > 0)
            @foreach ($employees as $employee)
                <tr data-entry-id="{{ $employee->id }}">
                    <td field-key='employee_name'>{{ $employee->employee_name }}</td>
                                <td field-key='employee_middlename'>{{ $employee->employee_middlename }}</td>
                                <td field-key='employee_lastname'>{{ $employee->employee_lastname }}</td>
                                <td field-key='employee_salary'>{{ $employee->employee_salary->salary or '' }}</td>
                                <td field-key='employee_photo'>@if($employee->employee_photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $employee->employee_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $employee->employee_photo) }}"/></a>@endif</td>
                                <td field-key='employee_username'>{{ $employee->employee_username->username or '' }}</td>
                                <td field-key='employee_id'>{{ $employee->employee_id }}</td>
                                <td field-key='employee_title'>{{ $employee->employee_title->job_title or '' }}</td>
                                <td field-key='employee_timeshift'>{{ $employee->employee_timeshift->time_shift or '' }}</td>
                                <td field-key='employee_costcenter'>{{ $employee->employee_costcenter->cost_id or '' }}</td>
                                <td field-key='employee_skills'>{{ $employee->employee_skills->skill_name or '' }}</td>
                                <td field-key='employee_education'>{{ $employee->employee_education->education_level or '' }}</td>
                                <td field-key='employee_nationality'>{{ $employee->employee_nationality->nationalities or '' }}</td>
                                <td field-key='employee_phone'>{{ $employee->employee_phone }}</td>
                                <td field-key='employee_address'>{{ $employee->employee_address }}</td>
                                <td field-key='employee_bankaccount'>{{ $employee->employee_bankaccount }}</td>
                                <td field-key='employee_email'>{{ $employee->employee_email }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['employees.restore', $employee->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['employees.perma_del', $employee->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('employees.show',[$employee->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('employees.edit',[$employee->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['employees.destroy', $employee->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="22">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.education.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
