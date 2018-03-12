@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.job.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.job.fields.job-title')</th>
                            <td field-key='job_title'>{{ $job->job_title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.job.fields.job-description')</th>
                            <td field-key='job_description'>{{ $job->job_description }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.job.fields.job-specification')</th>
                            <td field-key='job_specification'>@if($job->job_specification)<a href="{{ asset(env('UPLOAD_PATH').'/' . $job->job_specification) }}" target="_blank">Download file</a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.job.fields.job-note')</th>
                            <td field-key='job_note'>{{ $job->job_note }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#vacancy" aria-controls="vacancy" role="tab" data-toggle="tab">Vacancy</a></li>
<li role="presentation" class=""><a href="#salaries" aria-controls="salaries" role="tab" data-toggle="tab">Salaries</a></li>
<li role="presentation" class=""><a href="#selfprofessional" aria-controls="selfprofessional" role="tab" data-toggle="tab">Professional Data</a></li>
<li role="presentation" class=""><a href="#employees" aria-controls="employees" role="tab" data-toggle="tab">Employees</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="vacancy">
<table class="table table-bordered table-striped {{ count($vacancies) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.vacancy.fields.vacancy-title')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-name')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-manager')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-description')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-date')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-location')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-available')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($vacancies) > 0)
            @foreach ($vacancies as $vacancy)
                <tr data-entry-id="{{ $vacancy->id }}">
                    <td field-key='vacancy_title'>{{ $vacancy->vacancy_title->job_title or '' }}</td>
                                <td field-key='vacancy_name'>{{ $vacancy->vacancy_name }}</td>
                                <td field-key='vacancy_manager'>{{ $vacancy->vacancy_manager->employee_id or '' }}</td>
                                <td field-key='vacancy_description'>{!! $vacancy->vacancy_description !!}</td>
                                <td field-key='vacancy_date'>{{ $vacancy->vacancy_date }}</td>
                                <td field-key='vacancy_location'>{{ $vacancy->vacancy_location->city or '' }}</td>
                                <td field-key='vacancy_available'>{{ $vacancy->vacancy_available }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['vacancies.restore', $vacancy->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['vacancies.perma_del', $vacancy->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('vacancies.show',[$vacancy->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('vacancies.edit',[$vacancy->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['vacancies.destroy', $vacancy->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="12">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="salaries">
<table class="table table-bordered table-striped {{ count($salaries) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.salaries.fields.salary')</th>
                        <th>@lang('quickadmin.salaries.fields.salary-position')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($salaries) > 0)
            @foreach ($salaries as $salary)
                <tr data-entry-id="{{ $salary->id }}">
                    <td field-key='salary'>{{ $salary->salary }}</td>
                                <td field-key='salary_position'>{{ $salary->salary_position->job_title or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['salaries.restore', $salary->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['salaries.perma_del', $salary->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('salaries.show',[$salary->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('salaries.edit',[$salary->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['salaries.destroy', $salary->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="selfprofessional">
<table class="table table-bordered table-striped {{ count($selfprofessionals) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
                    <td field-key='self_start'>{{ $selfprofessional->self_start }}</td>
                                <td field-key='self_end'>{{ $selfprofessional->self_end }}</td>
                                <td field-key='self_protitle'>{{ $selfprofessional->self_protitle }}</td>
                                <td field-key='self_title'>{{ $selfprofessional->self_title->job_title or '' }}</td>
                                <td field-key='self_comment'>{!! $selfprofessional->self_comment !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['selfprofessionals.restore', $selfprofessional->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['selfprofessionals.perma_del', $selfprofessional->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('selfprofessionals.show',[$selfprofessional->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('selfprofessionals.edit',[$selfprofessional->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['selfprofessionals.destroy', $selfprofessional->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="employees">
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

            <a href="{{ route('admin.jobs.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
