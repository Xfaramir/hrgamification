@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.selfdocuments.title')</h3>
    
    {!! Form::model($selfdocument, ['method' => 'PUT', 'route' => ['admin.selfdocuments.update', $selfdocument->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_resume', trans('quickadmin.selfdocuments.fields.self-resume').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('self_resume[]', [
                        'multiple',
                        'class' => 'form-control file-upload',
                        'data-url' => route('admin.media.upload'),
                        'data-bucket' => 'self_resume',
                        'data-filekey' => 'self_resume',
                        ]) !!}
                    <p class="help-block"></p>
                    <div class="photo-block">
                        <div class="progress-bar form-group">&nbsp;</div>
                        <div class="files-list">
                            @foreach($selfdocument->getMedia('self_resume') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                    <a href="#" class="btn btn-xs btn-danger remove-file">Remove</a>
                                    <input type="hidden" name="self_resume_id[]" value="{{ $media->id }}">
                                </p>
                            @endforeach
                        </div>
                    </div>
                    @if($errors->has('self_resume'))
                        <p class="help-block">
                            {{ $errors->first('self_resume') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_offerletter', trans('quickadmin.selfdocuments.fields.self-offerletter').'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('self_offerletter', old('self_offerletter')) !!}
                    @if ($selfdocument->self_offerletter)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_offerletter) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('self_offerletter', ['class' => 'form-control']) !!}
                    {!! Form::hidden('self_offerletter_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_offerletter'))
                        <p class="help-block">
                            {{ $errors->first('self_offerletter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_joinletter', trans('quickadmin.selfdocuments.fields.self-joinletter').'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('self_joinletter', old('self_joinletter')) !!}
                    @if ($selfdocument->self_joinletter)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_joinletter) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('self_joinletter', ['class' => 'form-control']) !!}
                    {!! Form::hidden('self_joinletter_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_joinletter'))
                        <p class="help-block">
                            {{ $errors->first('self_joinletter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('self_contract', trans('quickadmin.selfdocuments.fields.self-contract').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('self_contract', old('self_contract')) !!}
                    @if ($selfdocument->self_contract)
                        <a href="{{ asset(env('UPLOAD_PATH').'/' . $selfdocument->self_contract) }}" target="_blank">Download file</a>
                    @endif
                    {!! Form::file('self_contract', ['class' => 'form-control']) !!}
                    {!! Form::hidden('self_contract_max_size', 10) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_contract'))
                        <p class="help-block">
                            {{ $errors->first('self_contract') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($selfdocument->self_id)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$selfdocument->self_id) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$selfdocument->self_id) }}"></a>
                    @endif
                    {!! Form::label('self_id', trans('quickadmin.selfdocuments.fields.self-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('self_id', old('self_id')) !!}
                    {!! Form::file('self_id', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('self_id_max_size', 10) !!}
                    {!! Form::hidden('self_id_max_width', 4096) !!}
                    {!! Form::hidden('self_id_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_id'))
                        <p class="help-block">
                            {{ $errors->first('self_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($selfdocument->self_photo)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$selfdocument->self_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$selfdocument->self_photo) }}"></a>
                    @endif
                    {!! Form::label('self_photo', trans('quickadmin.selfdocuments.fields.self-photo').'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('self_photo', old('self_photo')) !!}
                    {!! Form::file('self_photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('self_photo_max_size', 10) !!}
                    {!! Form::hidden('self_photo_max_width', 4096) !!}
                    {!! Form::hidden('self_photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('self_photo'))
                        <p class="help-block">
                            {{ $errors->first('self_photo') }}
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
                        model_name: 'Selfdocument',
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