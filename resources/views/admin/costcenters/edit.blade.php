@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.costcenter.title')</h3>
    
    {!! Form::model($costcenter, ['method' => 'PUT', 'route' => ['admin.costcenters.update', $costcenter->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cost_id', trans('quickadmin.costcenter.fields.cost-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('cost_id', old('cost_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cost_id'))
                        <p class="help-block">
                            {{ $errors->first('cost_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cost_name', trans('quickadmin.costcenter.fields.cost-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('cost_name', old('cost_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cost_name'))
                        <p class="help-block">
                            {{ $errors->first('cost_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cost_description', trans('quickadmin.costcenter.fields.cost-description').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cost_description', old('cost_description'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cost_description'))
                        <p class="help-block">
                            {{ $errors->first('cost_description') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

