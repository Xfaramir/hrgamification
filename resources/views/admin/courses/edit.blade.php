@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.courses.title')</h3>
    
    {!! Form::model($course, ['method' => 'PUT', 'route' => ['admin.courses.update', $course->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('engagement_courses', trans('quickadmin.courses.fields.engagement-courses').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('engagement_courses', old('engagement_courses'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('engagement_courses'))
                        <p class="help-block">
                            {{ $errors->first('engagement_courses') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('engament_skill_id', trans('quickadmin.courses.fields.engament-skill').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('engament_skill_id', $engament_skills, old('engament_skill_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('engament_skill_id'))
                        <p class="help-block">
                            {{ $errors->first('engament_skill_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('engagement_duration', trans('quickadmin.courses.fields.engagement-duration').'', ['class' => 'control-label']) !!}
                    {!! Form::text('engagement_duration', old('engagement_duration'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('engagement_duration'))
                        <p class="help-block">
                            {{ $errors->first('engagement_duration') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('engagement_description', trans('quickadmin.courses.fields.engagement-description').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('engagement_description', old('engagement_description'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('engagement_description'))
                        <p class="help-block">
                            {{ $errors->first('engagement_description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('engagment_link', trans('quickadmin.courses.fields.engagment-link').'', ['class' => 'control-label']) !!}
                    {!! Form::text('engagment_link', old('engagment_link'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('engagment_link'))
                        <p class="help-block">
                            {{ $errors->first('engagment_link') }}
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