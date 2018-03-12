@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.leaveperiod.title')</h3>
    
    {!! Form::model($leaveperiod, ['method' => 'PUT', 'route' => ['admin.leaveperiods.update', $leaveperiod->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_type', trans('quickadmin.leaveperiod.fields.leave-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('leave_type', old('leave_type'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_type'))
                        <p class="help-block">
                            {{ $errors->first('leave_type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_from', trans('quickadmin.leaveperiod.fields.leave-from').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('leave_from', old('leave_from'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_from'))
                        <p class="help-block">
                            {{ $errors->first('leave_from') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('leave_until', trans('quickadmin.leaveperiod.fields.leave-until').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('leave_until', old('leave_until'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('leave_until'))
                        <p class="help-block">
                            {{ $errors->first('leave_until') }}
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
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop