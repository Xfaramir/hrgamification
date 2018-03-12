@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.disciplinarycases.title')</h3>
    @can('disciplinarycase_create')
    <p>
        <a href="{{ route('admin.disciplinarycases.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan

    @can('disciplinarycase_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.disciplinarycases.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.disciplinarycases.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('disciplinarycase_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('disciplinarycase_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('disciplinarycase_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.disciplinarycases.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.disciplinarycases.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [
                @can('disciplinarycase_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan
                {data: 'discipline_employee.employee_id', name: 'discipline_employee.employee_id'},
                {data: 'discipline_case', name: 'discipline_case'},
                {data: 'disciplinary_description', name: 'disciplinary_description'},
                {data: 'disciplinary_document', name: 'disciplinary_document'},
                {data: 'disciplinary_date', name: 'disciplinary_date'},
                {data: 'disciplinary_actions.disciplineactions', name: 'disciplinary_actions.disciplineactions'},
                {data: 'disciplinary_manager.username', name: 'disciplinary_manager.username'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection