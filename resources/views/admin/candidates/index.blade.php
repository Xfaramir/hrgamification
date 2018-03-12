@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.candidate.title')</h3>
    @can('candidate_create')
    <p>
        <a href="{{ route('admin.candidates.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    @can('candidate_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.candidates.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.candidates.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($candidates) > 0 ? 'datatable' : '' }} @can('candidate_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('candidate_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('candidate_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

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
                                <td field-key='candidate_resume'> @foreach($candidate->getMedia('candidate_resume') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
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
    </div>
@stop

@section('javascript') 
    <script>
        @can('candidate_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.candidates.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection