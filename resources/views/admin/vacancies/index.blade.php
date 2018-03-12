@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacancy.title')</h3>
    @can('vacancy_create')
    <p>
        <a href="{{ route('admin.vacancies.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    @can('vacancy_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.vacancies.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.vacancies.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('vacancy_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('vacancy_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.vacancy.fields.vacancy-title')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-name')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-manager')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-description')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-date')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-location')</th>
                        <th>@lang('quickadmin.vacancy.fields.vacancy-available')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('vacancy_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.vacancies.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.vacancies.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [
                @can('vacancy_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan
                {data: 'vacancy_title.job_title', name: 'vacancy_title.job_title'},
                {data: 'vacancy_name', name: 'vacancy_name'},
                {data: 'vacancy_manager.employee_id', name: 'vacancy_manager.employee_id'},
                {data: 'vacancy_description', name: 'vacancy_description'},
                {data: 'vacancy_date', name: 'vacancy_date'},
                {data: 'vacancy_location.city', name: 'vacancy_location.city'},
                {data: 'vacancy_available', name: 'vacancy_available'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection