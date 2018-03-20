<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i></i></a></li>

    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href='javascript::;'>
                            <i class="menu-icon fa fa-language bg-blue"></i>
                            <div class="menu-info">
                                <h3 class="control-sidebar-subheading">@lang('quickadmin.changelanguage')</h3>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->


            </div><!-- /.tab-pane -->

            <ul class='control-sidebar-menu'>

                @foreach(config('app.languages') as $short => $title)
                    <li class="language-link">
                        <a href="{{ route('admin.language', $short) }}">
                            {{ $title }} ({{ strtoupper($short) }})
                        </a>
                    </li>
                @endforeach

            </ul><!-- /.control-sidebar-menu -->
        </div><!-- /.tab-pane -->

    </div>
</aside><!-- /.control-sidebar

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>