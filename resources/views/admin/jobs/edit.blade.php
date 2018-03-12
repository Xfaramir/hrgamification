@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.job.title')</h3>
    
    {!! Form::model($job, ['method' => 'PUT', 'route' => ['admin.jobs.update', $job->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('job_title', trans('quickadmin.job.fields.job-title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('job_title', old('job_title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('job_title'))
                        <p class="help-block">
                            {{ $errors->first('job_title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('job_description', trans('quickadmin.job.fields.job-description').'', ['class' => 'control-label']) !!}
                    {!! Form::text('job_description', old('job_description'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('job_description'))
                        <p class="help-block">
                            {{ $errors->first('job_description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('job_specification', trans('quickadmin.job.fields.job-specification').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('job_specification', old('job_specification')) !!}
                    @if ($job->job_specification)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $job->job_specification) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('job_specification', ['class' => 'form-control']) !!}
                    {!! Form::hidden('job_specification_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('job_specification'))
                        <p class="help-block">
                            {{ $errors->first('job_specification') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('job_note', trans('quickadmin.job.fields.job-note').'', ['class' => 'control-label']) !!}
                    {!! Form::text('job_note', old('job_note'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('job_note'))
                        <p class="help-block">
                            {{ $errors->first('job_note') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

