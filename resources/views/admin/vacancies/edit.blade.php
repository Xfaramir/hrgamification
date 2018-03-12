@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacancy.title')</h3>
    
    {!! Form::model($vacancy, ['method' => 'PUT', 'route' => ['admin.vacancies.update', $vacancy->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_title_id', trans('quickadmin.vacancy.fields.vacancy-title').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('vacancy_title_id', $vacancy_titles, old('vacancy_title_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_title_id'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_title_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_name', trans('quickadmin.vacancy.fields.vacancy-name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('vacancy_name', old('vacancy_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_name'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_manager_id', trans('quickadmin.vacancy.fields.vacancy-manager').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('vacancy_manager_id', $vacancy_managers, old('vacancy_manager_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_manager_id'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_manager_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_description', trans('quickadmin.vacancy.fields.vacancy-description').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('vacancy_description', old('vacancy_description'), ['class' => 'form-control editor', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_description'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_date', trans('quickadmin.vacancy.fields.vacancy-date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('vacancy_date', old('vacancy_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_date'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_location_id', trans('quickadmin.vacancy.fields.vacancy-location').'', ['class' => 'control-label']) !!}
                    {!! Form::select('vacancy_location_id', $vacancy_locations, old('vacancy_location_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_location_id'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_location_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacancy_available', trans('quickadmin.vacancy.fields.vacancy-available').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('vacancy_available', old('vacancy_available'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacancy_available'))
                        <p class="help-block">
                            {{ $errors->first('vacancy_available') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop