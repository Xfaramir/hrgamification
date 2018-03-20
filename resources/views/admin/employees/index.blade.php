@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employees.title')</h3>
    @can('employee_create')
    <p>
        <a href="{{ route('admin.employees.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('quickadmin.qa_csvImport')</a>
        @include('csvImport.modal', ['model' => 'Employee'])

    </p>
    @endcan

    @can('employee_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.employees.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.employees.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($employees) > 0 ? 'datatable' : '' }} @can('employee_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('employee_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('employee_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

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
                                    @can('employee_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employees.restore', $employee->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('employee_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employees.perma_del', $employee->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('employee_view')
                                    <a href="{{ route('admin.employees.show',[$employee->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('employee_edit')
                                    <a href="{{ route('admin.employees.edit',[$employee->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('employee_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employees.destroy', $employee->id])) !!}
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
@stop

@section('javascript')
    <script>
        @can('employee_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.employees.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection