@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.education.title')</h3>
    
    {!! Form::model($education, ['method' => 'PUT', 'route' => ['admin.education.update', $education->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('education_level', trans('quickadmin.education.fields.education-level').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('education_level', old('education_level'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('education_level'))
                        <p class="help-block">
                            {{ $errors->first('education_level') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('education_title', trans('quickadmin.education.fields.education-title').'', ['class' => 'control-label']) !!}
                    {!! Form::text('education_title', old('education_title'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('education_title'))
                        <p class="help-block">
                            {{ $errors->first('education_title') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

