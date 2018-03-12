@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.news.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.news.fields.subject')</th>
                            <td field-key='subject'>{{ $news->subject }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.news.fields.published-date')</th>
                            <td field-key='published_date'>{{ $news->published_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.news.fields.description')</th>
                            <td field-key='description'>{!! $news->description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.news.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
