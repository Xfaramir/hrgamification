<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - landingdescription ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Adminlte-laravel - @lang('quickadmin.landingdescription')"/>
    <meta property="og:url" content="http://demo.adminlte.acacha.org/"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png"/>
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png"/>
    <meta property="og:sitename" content="demo.adminlte.acacha.org"/>
    <meta property="og:url" content="http://demo.adminlte.acacha.org"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@acachawiki"/>
    <meta name="twitter:creator" content="@acacha1"/>

    <title>@lang('quickadmin.titlesite')</title>

    <!-- Custom styles for this template -->

    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">
<div id="particles-js"></div>
<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>HRGamification</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home"
                                          class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a>
                    </li>
                    <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a>
                    </li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>HR <b><a href="https://github.com/acacha/adminlte-laravel">Gamification</a></b>
                        </h1>
                        <h3>@lang('quickadmin.landingdescription')</h3>
                    </div>
                    <div class="col-lg-2">
                        <h5>@lang('quickadmin.amazing')</h5>
                        <p>@lang('quickadmin.basedadminlte')</p>
                        <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
                    </div>
                    <div class="col-lg-8">
                        <img class="img-responsive" src="{{ asset('/img/hrgamificationlanding.png') }}" alt="">
                    </div>
                    <div class="col-lg-2">
                        <br>
                        <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                        <h5>@lang('quickadmin.awesomepackaged')</h5>
                        <p>... @lang('quickadmin.readytouse')
                        </p>
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.designed') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/iconsystemadmin.png') }}" alt="">
                        <h3>@lang('quickadmin.qa_systemadministration')</h3>
                        <p><b>@lang('quickadmin.qa_adminsystem')</b>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/iconrecruitment.png') }}" alt="">
                        <h3>@lang('quickadmin.qa_recruitment')</h3>
                        <p><b>@lang('quickadmin.qa_recruitmentmessage')</b></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/icongamification.png') }}" alt="">
                        <h3>@lang('quickadmin.qa_gamification')</h3>
                        <p><b>@lang('quickadmin.qa_gamificationmessage')</b></p>
                    </div>
                </div>
                <br>
                <hr>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

        <!-- FEATURES WRAP -->
        <div id="features">
            <div class="container">
                <div class="row">
                    <h1 class="centered">@lang('quickadmin.qa_whatnew')</h1>
                    <br>
                    <br>
                    <div class="col-lg-6 centered">
                        <img class="centered" src="{{ asset('/img/iconpsicotecnicas.png') }}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <h3>@lang('quickadmin.qa_features')</h3>
                        <br>
                        <!-- ACCORDION -->
                        <div class="accordion ac" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseOne">
                                        @lang('quickadmin.qa_storeinfo')
                                    </a>
                                </div><!-- /accordion-heading -->
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>@lang('quickadmin.qa_storemessage')</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseTwo">
                                        @lang('quickadmin.qa_eventcalendar')
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p> @lang('quickadmin.qa_calendarfeature')</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseThree">
                                        @lang('quickadmin.qa_expenses')
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p> @lang('quickadmin.qa_expensesmessage')</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseFour">
                                        @lang('quickadmin.recruitments')
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p> @lang('quickadmin.recruitmentvacancies')</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>
                        </div><!-- Accordion -->
                    </div>
                </div>
            </div><!--/ .container -->
        </div><!--/ #features -->
    </section>

    <section id="showcase" name="showcase">
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <h1 class="centered">{{ trans('adminlte_lang::message.screenshots') }}</h1>
                    <br>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/site1.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/site2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div>
    </section>

    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                    <p>
                        Bogota,<br/>
                        DC<br/>
                        Colombia
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain">
                        <div class="form-group">
                            <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                            <input type="name" name="Name" class="form-control" id="name1"
                                   placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                        </div>
                        <div class="form-group">
                            <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                            <input type="email" name="Mail" class="form-control" id="email1"
                                   placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit"
                                class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <strong>Copyright &copy; 2018 <a
                                href="http://acacha.org">HRGamification.co</a>.</strong> {{ trans('adminlte_lang::message.createdby') }}
                    <br/>
                    David Barrera Unincca <a
                            href="https://almsaeedstudio.com/">github.com/xfaramir</a>

                    <br/>
                    @lang('quickadmin.dessertation') <br/> <a
                            href="https://github.com/Xfaramir/hrgamification">Based on AcachaLTE</a>
                </p>

            </div>
        </div>
    </footer>


</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset ('/js/app-landing.js')}}"></script>
<script src="{{ asset ('/js/particles.js')}}"></script>
<script src="{{ asset ('/js/particlesconfig.js')}}"></script>

<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
