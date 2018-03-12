@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.disciplinarycases.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.discipline-employee')</th>
                            <td field-key='discipline_employee'>{{ $disciplinarycase->discipline_employee->employee_id or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.discipline-case')</th>
                            <td field-key='discipline_case'>{{ $disciplinarycase->discipline_case }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-description')</th>
                            <td field-key='disciplinary_description'>{!! $disciplinarycase->disciplinary_description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-document')</th>
                            <td field-key='disciplinary_document's> @foreach($disciplinarycase->getMedia('disciplinary_document') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-date')</th>
                            <td field-key='disciplinary_date'>{{ $disciplinarycase->disciplinary_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-actions')</th>
                            <td field-key='disciplinary_actions'>{{ $disciplinarycase->disciplinary_actions->disciplineactions or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.disciplinarycases.fields.disciplinary-manager')</th>
                            <td field-key='disciplinary_manager'>{{ $disciplinarycase->disciplinary_manager->username or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.disciplinarycases.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
