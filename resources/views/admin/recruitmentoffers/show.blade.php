@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.recruitmentoffer.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.recruitmentoffer.fields.hiring-offer')</th>
                            <td field-key='hiring_offer'>{{ $recruitmentoffer->hiring_offer->vacancy_name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.recruitmentoffers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
