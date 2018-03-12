@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leaveentitlement.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.leaveentitlements.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_type_id', trans('quickadmin.leaveentitlement.fields.leave-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('leave_type_id', $leave_types, old('leave_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_type_id'))
                        <p class="help-block">
                            {{ $errors->first('leave_type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_employee_id', trans('quickadmin.leaveentitlement.fields.leave-employee').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('leave_employee_id', $leave_employees, old('leave_employee_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_employee_id'))
                        <p class="help-block">
                            {{ $errors->first('leave_employee_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_from', trans('quickadmin.leaveentitlement.fields.leave-from').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('leave_from', old('leave_from'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_from'))
                        <p class="help-block">
                            {{ $errors->first('leave_from') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_until', trans('quickadmin.leaveentitlement.fields.leave-until').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('leave_until', old('leave_until'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_until'))
                        <p class="help-block">
                            {{ $errors->first('leave_until') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status_id', trans('quickadmin.leaveentitlement.fields.status').'', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop