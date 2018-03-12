@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.candidate.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-vacancy')</th>
                            <td field-key='candidate_vacancy'>{{ $candidate->candidate_vacancy->vacancy_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-name')</th>
                            <td field-key='candidate_name'>{{ $candidate->candidate_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-firstname')</th>
                            <td field-key='candidate_firstname'>{{ $candidate->candidate_firstname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-secondname')</th>
                            <td field-key='candidate_secondname'>{{ $candidate->candidate_secondname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-email')</th>
                            <td field-key='candidate_email'>{{ $candidate->candidate_email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-phone')</th>
                            <td field-key='candidate_phone'>{{ $candidate->candidate_phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-facebook')</th>
                            <td field-key='candidate_facebook'>{{ $candidate->candidate_facebook }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-linkein')</th>
                            <td field-key='candidate_linkein'>{{ $candidate->candidate_linkein }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-notes')</th>
                            <td field-key='candidate_notes'>{{ $candidate->candidate_notes }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-date')</th>
                            <td field-key='candidate_date'>{{ $candidate->candidate_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-resume')</th>
                            <td field-key='candidate_resume's> @foreach($candidate->getMedia('candidate_resume') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.candidate.fields.candidate-photo')</th>
                            <td field-key='candidate_photo'>@if($candidate->candidate_photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $candidate->candidate_photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $candidate->candidate_photo) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.candidates.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
