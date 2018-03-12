@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.salaries.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.salaries.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('salary', trans('quickadmin.salaries.fields.salary').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('salary', old('salary'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('salary'))
                        <p class="help-block">
                            {{ $errors->first('salary') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('salary_position_id', trans('quickadmin.salaries.fields.salary-position').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('salary_position_id', $salary_positions, old('salary_position_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('salary_position_id'))
                        <p class="help-block">
                            {{ $errors->first('salary_position_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

