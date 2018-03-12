@extends('layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('content')

    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="{{ route('admin.contacts.index') }}"> <span id="totalcontacts" class="info-box-icon "><i
                                    class="fa fa-address-book-o" aria-hidden="true"></i></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text"> @lang('quickadmin.totalcontacts')</span>
                        <span class="info-box-number">{{$contacts}}
                            <small></small></span>
                    </div>

                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="{{url('admin/calendar')}}"> <span id="currentevents" class="info-box-icon"><i
                                    class="fa fa-calendar"
                                    aria-hidden="true"></i></span>
                    </a>

                    <div class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.currentevents')</span>
                        <span class="info-box-number">{{$calendar}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="{{ route('admin.vacancies.index') }}"> <span id="totalvacancies"
                                                                          class="info-box-icon bg-green"><i
                                    class="fa fa-universal-access "></i></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.vacancies')</span>
                        <span class="info-box-number">{{$vacancy}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span id="totalusers" class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.totalusers')</span>
                        <span class="info-box-number">{{$totalusers}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="box box-success">
                    <div id="totalcontacts" class="box-header with-border">
                        <h3 class="box-title">@lang('quickadmin.emmployeereport')</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 visible-xs-block, hidden-xs">
                                <div id="world-map" style="width: 650px; height: 380px"></div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-4">
                                <div id="totalvacancies" class="pad box-pane-right bg-green" style="min-height: 380px">
                                    <div class="description-block margin-bottom">
                                        <div class="sparkbar pad" data-color="#fff">
                                            <canvas width="34" height="30"
                                                    style="display: inline-block; width: 34px; height: 30px; vertical-align: top;"></canvas>
                                        </div>
                                        <h5 class="description-header">{{$totalemployees}}</h5>
                                        <span class="description-text">@lang('quickadmin.totalemployees')</span>
                                    </div>

                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Orders</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="label label-success">Shipped</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>iPhone 6 Plus</td>
                                    <td><span class="label label-danger">Delivered</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="label label-info">Processing</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>iPhone 6 Plus</td>
                                    <td><span class="label label-danger">Delivered</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="label label-success">Shipped</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            <canvas width="34" height="20"
                                                    style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All
                            Orders</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span id="totalusers" class="info-box-icon"><i class="ion ion-ios-pricetags"></i></span>

                    <div id="totalusers" class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.assetinventory')</span>
                        <span class="info-box-number">{{$asset}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                    @lang('quickadmin.warranty') 2
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div id="totalvacancies" class="info-box">
                    <span id="totalvacancies" class="info-box-icon"><i class="ion ion-ribbon-a"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.badge')</span>
                        <span class="info-box-number">1</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                    out of 10
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div id="currentevents" class="info-box bg-red">
                    <a href="{{ route('admin.news.index') }}"> <span id="currentevents" class="info-box-icon">
                            <i class="ion ion-ios-paper"></i></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.recentnews')</span>


                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div id="totalcontacts" class="info-box">
                    <a href="{{ route('admin.monthly_reports.index') }}"> <span id="totalcontacts" class="info-box-icon"><i
                                    class="ion-ios-pulse-strong"></i></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">@lang('quickadmin.reports')</span>
                        <span class="info-box-number"></span>


                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->


                <!-- /.box -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        </div></section>



@endsection
@section('control-javascript')

    <script>
        $(function () {
            $('#world-map').vectorMap({
                map: 'co_mill',
                markers: [],

                markerStyle: {
                    initial: {
                        fill: '#4DAC26'
                    },
                    selected: {
                        fill: '#CA0020'
                    }
                },

                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#C8EEFF', '#0071A4'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (Employees - ' + gdpData[code] + ')');
                }

            });
        });
    </script>


@endsection