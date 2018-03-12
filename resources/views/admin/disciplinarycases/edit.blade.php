@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.disciplinarycases.title')</h3>
    
    {!! Form::model($disciplinarycase, ['method' => 'PUT', 'route' => ['admin.disciplinarycases.update', $disciplinarycase->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('discipline_employee_id', trans('quickadmin.disciplinarycases.fields.discipline-employee').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('discipline_employee_id', $discipline_employees, old('discipline_employee_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('discipline_employee_id'))
                        <p class="help-block">
                            {{ $errors->first('discipline_employee_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('discipline_case', trans('quickadmin.disciplinarycases.fields.discipline-case').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('discipline_case', old('discipline_case'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('discipline_case'))
                        <p class="help-block">
                            {{ $errors->first('discipline_case') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disciplinary_description', trans('quickadmin.disciplinarycases.fields.disciplinary-description').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('disciplinary_description', old('disciplinary_description'), ['class' => 'form-control editor', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('disciplinary_description'))
                        <p class="help-block">
                            {{ $errors->first('disciplinary_description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disciplinary_document', trans('quickadmin.disciplinarycases.fields.disciplinary-document').'', ['class' => 'control-label']) !!}
                    {!! Form::file('disciplinary_document[]', [
                        'multiple',
                        'class' => 'form-control file-upload',
                        'data-url' => route('admin.media.upload'),
                        'data-bucket' => 'disciplinary_document',
                        'data-filekey' => 'disciplinary_document',
                        ]) !!}
                    <p class="help-block"></p>
                    <div class="photo-block">
                        <div class="progress-bar form-group">&nbsp;</div>
                        <div class="files-list">
                            @foreach($disciplinarycase->getMedia('disciplinary_document') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                    <a href="#" class="btn btn-xs btn-danger remove-file">Remove</a>
                                    <input type="hidden" name="disciplinary_document_id[]" value="{{ $media->id }}">
                                </p>
                            @endforeach
                        </div>
                    </div>
                    @if($errors->has('disciplinary_document'))
                        <p class="help-block">
                            {{ $errors->first('disciplinary_document') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disciplinary_date', trans('quickadmin.disciplinarycases.fields.disciplinary-date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('disciplinary_date', old('disciplinary_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('disciplinary_date'))
                        <p class="help-block">
                            {{ $errors->first('disciplinary_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disciplinary_actions_id', trans('quickadmin.disciplinarycases.fields.disciplinary-actions').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('disciplinary_actions_id', $disciplinary_actions, old('disciplinary_actions_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('disciplinary_actions_id'))
                        <p class="help-block">
                            {{ $errors->first('disciplinary_actions_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disciplinary_manager_id', trans('quickadmin.disciplinarycases.fields.disciplinary-manager').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('disciplinary_manager_id', $disciplinary_managers, old('disciplinary_manager_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('disciplinary_manager_id'))
                        <p class="help-block">
                            {{ $errors->first('disciplinary_manager_id') }}
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

    <script src="{{ asset('quickadmin/plugins/fileUpload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('quickadmin/plugins/fileUpload/js/jquery.fileupload.js') }}"></script>
    <script>
        $(function () {
            $('.file-upload').each(function () {
                var $this = $(this);
                var $parent = $(this).parent();

                $(this).fileupload({
                    dataType: 'json',
                    formData: {
                        model_name: 'Disciplinarycase',
                        bucket: $this.data('bucket'),
                        file_key: $this.data('filekey'),
                        _token: '{{ csrf_token() }}'
                    },
                    add: function (e, data) {
                        data.submit();
                    },
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            var $line = $($('<p/>', {class: "form-group"}).html(file.name + ' (' + file.size + ' KB)').appendTo($parent.find('.files-list')));
                            $line.append('<a href="#" class="btn btn-xs btn-danger remove-file">Remove</a>');
                            $line.append('<input type="hidden" name="' + $this.data('bucket') + '_id[]" value="' + file.id + '"/>');
                            if ($parent.find('.' + $this.data('bucket') + '-ids').val() != '') {
                                $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + ',');
                            }
                            $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + file.id);
                        });
                        $parent.find('.progress-bar').hide().css(
                            'width',
                            '0%'
                        );
                    }
                }).on('fileuploadprogressall', function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $parent.find('.progress-bar').show().css(
                        'width',
                        progress + '%'
                    );
                });
            });
            $(document).on('click', '.remove-file', function () {
                var $parent = $(this).parent();
                $parent.remove();
                return false;
            });
        });
    </script>
@stop