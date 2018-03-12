@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.candidate.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.candidates.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_vacancy_id', trans('quickadmin.candidate.fields.candidate-vacancy').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('candidate_vacancy_id', $candidate_vacancies, old('candidate_vacancy_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_vacancy_id'))
                        <p class="help-block">
                            {{ $errors->first('candidate_vacancy_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_name', trans('quickadmin.candidate.fields.candidate-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_name', old('candidate_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_name'))
                        <p class="help-block">
                            {{ $errors->first('candidate_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_firstname', trans('quickadmin.candidate.fields.candidate-firstname').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_firstname', old('candidate_firstname'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_firstname'))
                        <p class="help-block">
                            {{ $errors->first('candidate_firstname') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_secondname', trans('quickadmin.candidate.fields.candidate-secondname').'', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_secondname', old('candidate_secondname'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_secondname'))
                        <p class="help-block">
                            {{ $errors->first('candidate_secondname') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_email', trans('quickadmin.candidate.fields.candidate-email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('candidate_email', old('candidate_email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_email'))
                        <p class="help-block">
                            {{ $errors->first('candidate_email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_phone', trans('quickadmin.candidate.fields.candidate-phone').'', ['class' => 'control-label']) !!}
                    {!! Form::number('candidate_phone', old('candidate_phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_phone'))
                        <p class="help-block">
                            {{ $errors->first('candidate_phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_facebook', trans('quickadmin.candidate.fields.candidate-facebook').'', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_facebook', old('candidate_facebook'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_facebook'))
                        <p class="help-block">
                            {{ $errors->first('candidate_facebook') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_linkein', trans('quickadmin.candidate.fields.candidate-linkein').'', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_linkein', old('candidate_linkein'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_linkein'))
                        <p class="help-block">
                            {{ $errors->first('candidate_linkein') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_notes', trans('quickadmin.candidate.fields.candidate-notes').'', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_notes', old('candidate_notes'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_notes'))
                        <p class="help-block">
                            {{ $errors->first('candidate_notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_date', trans('quickadmin.candidate.fields.candidate-date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('candidate_date', old('candidate_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_date'))
                        <p class="help-block">
                            {{ $errors->first('candidate_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_resume', trans('quickadmin.candidate.fields.candidate-resume').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('candidate_resume[]', [
                        'multiple',
                        'class' => 'form-control file-upload',
                        'data-url' => route('admin.media.upload'),
                        'data-bucket' => 'candidate_resume',
                        'data-filekey' => 'candidate_resume',
                        ]) !!}
                    <p class="help-block"></p>
                    <div class="photo-block">
                        <div class="progress-bar form-group">&nbsp;</div>
                        <div class="files-list"></div>
                    </div>
                    @if($errors->has('candidate_resume'))
                        <p class="help-block">
                            {{ $errors->first('candidate_resume') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('candidate_photo', trans('quickadmin.candidate.fields.candidate-photo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('candidate_photo', old('candidate_photo')) !!}
                    {!! Form::file('candidate_photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('candidate_photo_max_size', 20) !!}
                    {!! Form::hidden('candidate_photo_max_width', 4096) !!}
                    {!! Form::hidden('candidate_photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('candidate_photo'))
                        <p class="help-block">
                            {{ $errors->first('candidate_photo') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
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
                        model_name: 'Candidate',
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