@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.selfprofessional.title')</h3>
    
    {!! Form::model($selfprofessional, ['method' => 'PUT', 'route' => ['admin.selfprofessionals.update', $selfprofessional->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_start', trans('quickadmin.selfprofessional.fields.self-start').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('self_start', old('self_start'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_start'))
                        <p class="help-block">
                            {{ $errors->first('self_start') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_end', trans('quickadmin.selfprofessional.fields.self-end').'', ['class' => 'control-label']) !!}
                    {!! Form::text('self_end', old('self_end'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_end'))
                        <p class="help-block">
                            {{ $errors->first('self_end') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_protitle', trans('quickadmin.selfprofessional.fields.self-protitle').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('self_protitle', old('self_protitle'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_protitle'))
                        <p class="help-block">
                            {{ $errors->first('self_protitle') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_title_id', trans('quickadmin.selfprofessional.fields.self-title').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('self_title_id', $self_titles, old('self_title_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_title_id'))
                        <p class="help-block">
                            {{ $errors->first('self_title_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_comment', trans('quickadmin.selfprofessional.fields.self-comment').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('self_comment', old('self_comment'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_comment'))
                        <p class="help-block">
                            {{ $errors->first('self_comment') }}
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