@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employees.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-name')</th>
                            <td field-key='employee_name'>{{ $employee->employee_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-middlename')</th>
                            <td field-key='employee_middlename'>{{ $employee->employee_middlename }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-lastname')</th>
                            <td field-key='employee_lastname'>{{ $employee->employee_lastname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-salary')</th>
                            <td field-key='employee_salary'>{{ $employee->employee_salary->salary or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-photo')</th>
                            <td field-key='employee_photo'>@if($employee->employee_photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $employee->employee_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $employee->employee_photo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-username')</th>
                            <td field-key='employee_username'>{{ $employee->employee_username->username or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-id')</th>
                            <td field-key='employee_id'>{{ $employee->employee_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-title')</th>
                            <td field-key='employee_title'>{{ $employee->employee_title->job_title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-timeshift')</th>
                            <td field-key='employee_timeshift'>{{ $employee->employee_timeshift->time_shift or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-costcenter')</th>
                            <td field-key='employee_costcenter'>{{ $employee->employee_costcenter->cost_id or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-skills')</th>
                            <td field-key='employee_skills'>{{ $employee->employee_skills->skill_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-education')</th>
                            <td field-key='employee_education'>{{ $employee->employee_education->education_level or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-nationality')</th>
                            <td field-key='employee_nationality'>{{ $employee->employee_nationality->nationalities or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-phone')</th>
                            <td field-key='employee_phone'>{{ $employee->employee_phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-address')</th>
                            <td field-key='employee_address'>{{ $employee->employee_address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-bankaccount')</th>
                            <td field-key='employee_bankaccount'>{{ $employee->employee_bankaccount }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.employee-email')</th>
                            <td field-key='employee_email'>{{ $employee->employee_email }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#disciplinarycases" aria-controls="disciplinarycases" role="tab" data-toggle="tab">Disciplinary Cases</a></li>
<li role="presentation" class=""><a href="#leaveentitlement" aria-controls="leaveentitlement" role="tab" data-toggle="tab">Add Leave Entitlement</a></li>
<li role="presentation" class=""><a href="#vacancy" aria-controls="vacancy" role="tab" data-toggle="tab">Vacancy</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Assets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="disciplinarycases">
<table class="table table-bordered table-striped {{ count($disciplinarycases) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.disciplinarycases.fields.discipline-employee')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.discipline-case')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-description')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-date')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-actions')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-manager')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($disciplinarycases) > 0)
            @foreach ($disciplinarycases as $disciplinarycase)
                <tr data-entry-id="{{ $disciplinarycase->id }}">
                    <td field-key='discipline_employee'>{{ $disciplinarycase->discipline_employee->employee_id or '' }}</td>
                                <td field-key='discipline_case'>{{ $disciplinarycase->discipline_case }}</td>
                                <td field-key='disciplinary_description'>{!! $disciplinarycase->disciplinary_description !!}</td>
                                <td field-key='disciplinary_document'>@if($disciplinarycase->disciplinary_document)<a href="{{ asset(env('UPLOAD_PATH').'/' . $disciplinarycase->disciplinary_document) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='disciplinary_date'>{{ $disciplinarycase->disciplinary_date }}</td>
                                <td field-key='disciplinary_actions'>{{ $disciplinarycase->disciplinary_actions->disciplineactions or '' }}</td>
                                <td field-key='disciplinary_manager'>{{ $disciplinarycase->disciplinary_manager->username or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['disciplinarycases.restore', $disciplinarycase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['disciplinarycases.perma_del', $disciplinarycase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('disciplinarycases.show',[$disciplinarycase->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('disciplinarycases.edit',[$disciplinarycase->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['disciplinarycases.destroy', $disciplinarycase->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="leaveentitlement">
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
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['leaveentitlements.restore', $leaveentitlement->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['leaveentitlements.perma_del', $leaveentitlement->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('leaveentitlements.show',[$leaveentitlement->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('leaveentitlements.edit',[$leaveentitlement->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['leaveentitlements.destroy', $leaveentitlement->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="vacancy">
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
<div role="tabpanel" class="tab-pane " id="assets">
<table class="table table-bordered table-striped {{ count($assets) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.assets.fields.category')</th>
                        <th>@lang('quickadmin.assets.fields.serial-number')</th>
                        <th>@lang('quickadmin.assets.fields.title')</th>
                        <th>@lang('quickadmin.assets.fields.photo1')</th>
                        <th>@lang('quickadmin.assets.fields.photo2')</th>
                        <th>@lang('quickadmin.assets.fields.photo3')</th>
                        <th>@lang('quickadmin.assets.fields.status')</th>
                        <th>@lang('quickadmin.assets.fields.location')</th>
                        <th>@lang('quickadmin.assets.fields.notes')</th>
                        <th>@lang('quickadmin.assets.fields.assigned-to')</th>
                        <th>@lang('quickadmin.assets.fields.warranty')</th>
                        <th>@lang('quickadmin.assets.fields.depreciacion')</th>
                        <th>@lang('quickadmin.assets.fields.barcode')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($assets) > 0)
            @foreach ($assets as $asset)
                <tr data-entry-id="{{ $asset->id }}">
                    <td field-key='category'>{{ $asset->category->title or '' }}</td>
                                <td field-key='serial_number'>{{ $asset->serial_number }}</td>
                                <td field-key='title'>{{ $asset->title }}</td>
                                <td field-key='photo1'>@if($asset->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1) }}"/></a>@endif</td>
                                <td field-key='photo2'>@if($asset->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2) }}"/></a>@endif</td>
                                <td field-key='photo3'>@if($asset->photo3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3) }}"/></a>@endif</td>
                                <td field-key='status'>{{ $asset->status->title or '' }}</td>
                                <td field-key='location'>{{ $asset->location->title or '' }}</td>
                                <td field-key='notes'>{!! $asset->notes !!}</td>
                                <td field-key='assigned_to'>{{ $asset->assigned_to->employee_id or '' }}</td>
                                <td field-key='warranty'>{{ $asset->warranty }}</td>
                                <td field-key='depreciacion'>{{ $asset->depreciacion }}</td>
                                <td field-key='barcode'>{{ $asset->barcode }}</td>
                                                                <td>
                                    @can('view')
                                    <a href="{{ route('assets.show',[$asset->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('assets.edit',[$asset->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['assets.destroy', $asset->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="18">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.employees.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
