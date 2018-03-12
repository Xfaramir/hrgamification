@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.recruitmentoffer.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.recruitmentoffers.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiring_offer_id', trans('quickadmin.recruitmentoffer.fields.hiring-offer').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('hiring_offer_id', $hiring_offers, old('hiring_offer_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiring_offer_id'))
                        <p class="help-block">
                            {{ $errors->first('hiring_offer_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

