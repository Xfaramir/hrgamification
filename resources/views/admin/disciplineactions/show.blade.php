@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.disciplineactions.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.disciplineactions.fields.disciplineactions')</th>
                            <td field-key='disciplineactions'>{{ $disciplineaction->disciplineactions }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplineactions.fields.discipline-severity')</th>
                            <td field-key='discipline_severity'>{{ $disciplineaction->discipline_severity }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplineactions.fields.discipline-description')</th>
                            <td field-key='discipline_description'>{!! $disciplineaction->discipline_description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplineactions.fields.discipline-status')</th>
                            <td field-key='discipline_status'>{{ $disciplineaction->discipline_status->status or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#disciplinarycases" aria-controls="disciplinarycases" role="tab" data-toggle="tab">Disciplinary Cases</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="disciplinarycases">
<table class="table table-bordered table-striped {{ count($disciplinarycases) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.disciplinarycases.fields.discipline-employee')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.discipline-case')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-description')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-document')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-date')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-actions')</th>
                        <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-manager')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($disciplinarycases) > 0)
            @foreach ($disciplinarycases as $disciplinarycase)
                <tr data-entry-id="{{ $disciplinarycase->id }}">
                    <td field-key='discipline_employee'>{{ $disciplinarycase->discipline_employee->employee_id or '' }}</td>
                                <td field-key='discipline_case'>{{ $disciplinarycase->discipline_case }}</td>
                                <td field-key='disciplinary_description'>{!! $disciplinarycase->disciplinary_description !!}</td>
                                <td field-key='disciplinary_document'>@if($disciplinarycase->disciplinary_document)<a href="{{ asset(env('UPLOAD_PATH').'/' . $disciplinarycase->disciplinary_document) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='disciplinary_date'>{{ $disciplinarycase->disciplinary_date }}</td>
                                <td field-key='disciplinary_actions'>{{ $disciplinarycase->disciplinary_actions->disciplineactions or '' }}</td>
                                <td field-key='disciplinary_manager'>{{ $disciplinarycase->disciplinary_manager->username or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('disciplinarycase_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.disciplinarycases.restore', $disciplinarycase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('disciplinarycase_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.disciplinarycases.perma_del', $disciplinarycase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('disciplinarycase_view')
                                    <a href="{{ route('admin.disciplinarycases.show',[$disciplinarycase->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('disciplinarycase_edit')
                                    <a href="{{ route('admin.disciplinarycases.edit',[$disciplinarycase->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('disciplinarycase_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.disciplinarycases.destroy', $disciplinarycase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="12">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.disciplineactions.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
