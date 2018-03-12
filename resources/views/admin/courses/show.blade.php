@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.courses.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.courses.fields.engagement-courses')</th>
                            <td field-key='engagement_courses'>{{ $course->engagement_courses }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.courses.fields.engament-skill')</th>
                            <td field-key='engament_skill'>{{ $course->engament_skill->skill_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.courses.fields.engagement-duration')</th>
                            <td field-key='engagement_duration'>{{ $course->engagement_duration }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.courses.fields.engagement-description')</th>
                            <td field-key='engagement_description'>{!! $course->engagement_description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.courses.fields.engagment-link')</th>
                            <td field-key='engagment_link'>{{ $course->engagment_link }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.courses.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
