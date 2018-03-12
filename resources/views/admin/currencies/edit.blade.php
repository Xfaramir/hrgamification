@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.currency.title')</h3>
    
    {!! Form::model($currency, ['method' => 'PUT', 'route' => ['admin.currencies.update', $currency->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('currency', trans('quickadmin.currency.fields.currency').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('currency', old('currency'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('currency'))
                        <p class="help-block">
                            {{ $errors->first('currency') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

