@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.disciplineactions.title')</h3>
    
    {!! Form::model($disciplineaction, ['method' => 'PUT', 'route' => ['admin.disciplineactions.update', $disciplineaction->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disciplineactions', trans('quickadmin.disciplineactions.fields.disciplineactions').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('disciplineactions', old('disciplineactions'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('disciplineactions'))
                        <p class="help-block">
                            {{ $errors->first('disciplineactions') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('discipline_severity', trans('quickadmin.disciplineactions.fields.discipline-severity').'', ['class' => 'control-label']) !!}
                    {!! Form::text('discipline_severity', old('discipline_severity'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('discipline_severity'))
                        <p class="help-block">
                            {{ $errors->first('discipline_severity') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('discipline_description', trans('quickadmin.disciplineactions.fields.discipline-description').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('discipline_description', old('discipline_description'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('discipline_description'))
                        <p class="help-block">
                            {{ $errors->first('discipline_description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('discipline_status_id', trans('quickadmin.disciplineactions.fields.discipline-status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('discipline_status_id', $discipline_statuses, old('discipline_status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('discipline_status_id'))
                        <p class="help-block">
                            {{ $errors->first('discipline_status_id') }}
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

@stop