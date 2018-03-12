@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employees.title')</h3>
    
    {!! Form::model($employee, ['method' => 'PUT', 'route' => ['admin.employees.update', $employee->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_name', trans('quickadmin.employees.fields.employee-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_name', old('employee_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_name'))
                        <p class="help-block">
                            {{ $errors->first('employee_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_middlename', trans('quickadmin.employees.fields.employee-middlename').'', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_middlename', old('employee_middlename'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_middlename'))
                        <p class="help-block">
                            {{ $errors->first('employee_middlename') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_lastname', trans('quickadmin.employees.fields.employee-lastname').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_lastname', old('employee_lastname'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_lastname'))
                        <p class="help-block">
                            {{ $errors->first('employee_lastname') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_salary_id', trans('quickadmin.employees.fields.employee-salary').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_salary_id', $employee_salaries, old('employee_salary_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_salary_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_salary_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($employee->employee_photo)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$employee->employee_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$employee->employee_photo) }}"></a>
                    @endif
                    {!! Form::label('employee_photo', trans('quickadmin.employees.fields.employee-photo').'', ['class' => 'control-label']) !!}
                    {!! Form::file('employee_photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('employee_photo_max_size', 10) !!}
                    {!! Form::hidden('employee_photo_max_width', 4096) !!}
                    {!! Form::hidden('employee_photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_photo'))
                        <p class="help-block">
                            {{ $errors->first('employee_photo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_username_id', trans('quickadmin.employees.fields.employee-username').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_username_id', $employee_usernames, old('employee_username_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_username_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_username_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_id', trans('quickadmin.employees.fields.employee-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_id', old('employee_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_title_id', trans('quickadmin.employees.fields.employee-title').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_title_id', $employee_titles, old('employee_title_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_title_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_title_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_timeshift_id', trans('quickadmin.employees.fields.employee-timeshift').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_timeshift_id', $employee_timeshifts, old('employee_timeshift_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_timeshift_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_timeshift_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_costcenter_id', trans('quickadmin.employees.fields.employee-costcenter').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_costcenter_id', $employee_costcenters, old('employee_costcenter_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_costcenter_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_costcenter_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_skills_id', trans('quickadmin.employees.fields.employee-skills').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_skills_id', $employee_skills, old('employee_skills_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_skills_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_skills_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_education_id', trans('quickadmin.employees.fields.employee-education').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_education_id', $employee_educations, old('employee_education_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_education_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_education_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_nationality_id', trans('quickadmin.employees.fields.employee-nationality').'', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_nationality_id', $employee_nationalities, old('employee_nationality_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_nationality_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_nationality_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_phone', trans('quickadmin.employees.fields.employee-phone').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_phone', old('employee_phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_phone'))
                        <p class="help-block">
                            {{ $errors->first('employee_phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_address', trans('quickadmin.employees.fields.employee-address').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_address', old('employee_address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_address'))
                        <p class="help-block">
                            {{ $errors->first('employee_address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_bankaccount', trans('quickadmin.employees.fields.employee-bankaccount').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('employee_bankaccount', old('employee_bankaccount'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_bankaccount'))
                        <p class="help-block">
                            {{ $errors->first('employee_bankaccount') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_email', trans('quickadmin.employees.fields.employee-email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('employee_email', old('employee_email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_email'))
                        <p class="help-block">
                            {{ $errors->first('employee_email') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

