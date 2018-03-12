@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.skills.title')</h3>
    
    {!! Form::model($skill, ['method' => 'PUT', 'route' => ['admin.skills.update', $skill->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('skill_name', trans('quickadmin.skills.fields.skill-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('skill_name', old('skill_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('skill_name'))
                        <p class="help-block">
                            {{ $errors->first('skill_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('skill_description', trans('quickadmin.skills.fields.skill-description').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('skill_description', old('skill_description'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('skill_description'))
                        <p class="help-block">
                            {{ $errors->first('skill_description') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

