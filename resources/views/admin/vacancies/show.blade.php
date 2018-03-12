@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacancy.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-title')</th>
                            <td field-key='vacancy_title'>{{ $vacancy->vacancy_title->job_title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-name')</th>
                            <td field-key='vacancy_name'>{{ $vacancy->vacancy_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-manager')</th>
                            <td field-key='vacancy_manager'>{{ $vacancy->vacancy_manager->employee_id or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-description')</th>
                            <td field-key='vacancy_description'>{!! $vacancy->vacancy_description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-date')</th>
                            <td field-key='vacancy_date'>{{ $vacancy->vacancy_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-location')</th>
                            <td field-key='vacancy_location'>{{ $vacancy->vacancy_location->city or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacancy.fields.vacancy-available')</th>
                            <td field-key='vacancy_available'>{{ $vacancy->vacancy_available }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#candidate" aria-controls="candidate" role="tab" data-toggle="tab">Candidate</a></li>
<li role="presentation" class=""><a href="#recruitmentoffer" aria-controls="recruitmentoffer" role="tab" data-toggle="tab">Review/Sent Offer</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="candidate">
<table class="table table-bordered table-striped {{ count($candidates) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.candidate.fields.candidate-vacancy')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-name')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-firstname')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-secondname')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-email')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-phone')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-facebook')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-linkein')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-notes')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-date')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-resume')</th>
                        <th>@lang('quickadmin.candidate.fields.candidate-photo')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($candidates) > 0)
            @foreach ($candidates as $candidate)
                <tr data-entry-id="{{ $candidate->id }}">
                    <td field-key='candidate_vacancy'>{{ $candidate->candidate_vacancy->vacancy_name or '' }}</td>
                                <td field-key='candidate_name'>{{ $candidate->candidate_name }}</td>
                                <td field-key='candidate_firstname'>{{ $candidate->candidate_firstname }}</td>
                                <td field-key='candidate_secondname'>{{ $candidate->candidate_secondname }}</td>
                                <td field-key='candidate_email'>{{ $candidate->candidate_email }}</td>
                                <td field-key='candidate_phone'>{{ $candidate->candidate_phone }}</td>
                                <td field-key='candidate_facebook'>{{ $candidate->candidate_facebook }}</td>
                                <td field-key='candidate_linkein'>{{ $candidate->candidate_linkein }}</td>
                                <td field-key='candidate_notes'>{{ $candidate->candidate_notes }}</td>
                                <td field-key='candidate_date'>{{ $candidate->candidate_date }}</td>
                                <td field-key='candidate_resume'>@if($candidate->candidate_resume)<a href="{{ asset(env('UPLOAD_PATH').'/' . $candidate->candidate_resume) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='candidate_photo'>@if($candidate->candidate_photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $candidate->candidate_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $candidate->candidate_photo) }}"/></a>@endif</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('candidate_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.candidates.restore', $candidate->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('candidate_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.candidates.perma_del', $candidate->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('candidate_view')
                                    <a href="{{ route('admin.candidates.show',[$candidate->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('candidate_edit')
                                    <a href="{{ route('admin.candidates.edit',[$candidate->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('candidate_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.candidates.destroy', $candidate->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="17">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="recruitmentoffer">
<table class="table table-bordered table-striped {{ count($recruitmentoffers) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.recruitmentoffer.fields.hiring-offer')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($recruitmentoffers) > 0)
            @foreach ($recruitmentoffers as $recruitmentoffer)
                <tr data-entry-id="{{ $recruitmentoffer->id }}">
                    <td field-key='hiring_offer'>{{ $recruitmentoffer->hiring_offer->vacancy_name or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('recruitmentoffer_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.recruitmentoffers.restore', $recruitmentoffer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('recruitmentoffer_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.recruitmentoffers.perma_del', $recruitmentoffer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('recruitmentoffer_view')
                                    <a href="{{ route('admin.recruitmentoffers.show',[$recruitmentoffer->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('recruitmentoffer_edit')
                                    <a href="{{ route('admin.recruitmentoffers.edit',[$recruitmentoffer->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('recruitmentoffer_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.recruitmentoffers.destroy', $recruitmentoffer->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.vacancies.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
