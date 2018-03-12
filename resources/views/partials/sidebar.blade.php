@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}
                    </a>
                </div>
            </div>
    @endif

    <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control"
                       placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                            class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/calendar')}}">
                    <i class="fa fa-calendar"></i>
                    <span class="title">
                    Calendar
                  </span>
                </a>
            </li>

            @can('administration_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span class="title">@lang('quickadmin.administration.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-user"></i>
                                    <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('user_action_access')
                            <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.user_actions.index') }}">
                                    <i class="fa fa-th-list"></i>
                                    <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('news_access')
                            <li class="{{ $request->segment(2) == 'news' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.news.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.news.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('employee_access')
                            <li class="{{ $request->segment(2) == 'employees' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.employees.index') }}">
                                    <i class="fa fa-adn"></i>
                                    <span class="title">
                                @lang('quickadmin.employees.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('calendar_access')
                            <li class="{{ $request->segment(2) == 'calendars' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.calendars.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.calendar.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('job_access')
                            <li class="{{ $request->segment(2) == 'jobs' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.jobs.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.job.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('timeshift_access')
                            <li class="{{ $request->segment(2) == 'timeshifts' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.timeshifts.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.timeshift.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('costcenter_access')
                            <li class="{{ $request->segment(2) == 'costcenters' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.costcenters.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.costcenter.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('skill_access')
                            <li class="{{ $request->segment(2) == 'skills' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.skills.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.skills.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('education_access')
                            <li class="{{ $request->segment(2) == 'education' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.education.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.education.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('nationality_access')
                            <li class="{{ $request->segment(2) == 'nationalities' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.nationalities.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.nationalities.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('currency_access')
                            <li class="{{ $request->segment(2) == 'currencies' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.currencies.index') }}">
                                    <i class="fa fa-money"></i>
                                    <span class="title">
                                @lang('quickadmin.currency.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('salary_access')
                            <li class="{{ $request->segment(2) == 'salaries' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.salaries.index') }}">
                                    <i class="fa fa-money"></i>
                                    <span class="title">
                                @lang('quickadmin.salaries.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('status_access')
                            <li class="{{ $request->segment(2) == 'statuses' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.statuses.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.status.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('badge_access')
                            <li class="{{ $request->segment(2) == 'badges' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.badges.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.badges.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('contact_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-phone-square"></i>
                        <span class="title">@lang('quickadmin.contact-management.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('contact_company_access')
                            <li class="{{ $request->segment(2) == 'contact_companies' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.contact_companies.index') }}">
                                    <i class="fa fa-building-o"></i>
                                    <span class="title">
                                @lang('quickadmin.contact-companies.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('contact_access')
                            <li class="{{ $request->segment(2) == 'contacts' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.contacts.index') }}">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="title">
                                @lang('quickadmin.contacts.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('expense_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-money"></i>
                        <span class="title">@lang('quickadmin.expense-management.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('expense_category_access')
                            <li class="{{ $request->segment(2) == 'expense_categories' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.expense_categories.index') }}">
                                    <i class="fa fa-list"></i>
                                    <span class="title">
                                @lang('quickadmin.expense-category.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('income_category_access')
                            <li class="{{ $request->segment(2) == 'income_categories' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.income_categories.index') }}">
                                    <i class="fa fa-list"></i>
                                    <span class="title">
                                @lang('quickadmin.income-category.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('income_access')
                            <li class="{{ $request->segment(2) == 'incomes' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.incomes.index') }}">
                                    <i class="fa fa-arrow-circle-right"></i>
                                    <span class="title">
                                @lang('quickadmin.income.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('expense_access')
                            <li class="{{ $request->segment(2) == 'expenses' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.expenses.index') }}">
                                    <i class="fa fa-arrow-circle-left"></i>
                                    <span class="title">
                                @lang('quickadmin.expense.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('monthly_report_access')
                            <li class="{{ $request->segment(2) == 'monthly_reports' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.monthly_reports.index') }}">
                                    <i class="fa fa-line-chart"></i>
                                    <span class="title">
                                @lang('quickadmin.monthly-report.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('assets_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span class="title">@lang('quickadmin.assets-management.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('asset_access')
                            <li class="{{ $request->segment(2) == 'assets' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.assets.index') }}">
                                    <i class="fa fa-book"></i>
                                    <span class="title">
                                @lang('quickadmin.assets.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('assets_category_access')
                            <li class="{{ $request->segment(2) == 'assets_categories' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.assets_categories.index') }}">
                                    <i class="fa fa-tags"></i>
                                    <span class="title">
                                @lang('quickadmin.assets-categories.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('assets_location_access')
                            <li class="{{ $request->segment(2) == 'assets_locations' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.assets_locations.index') }}">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="title">
                                @lang('quickadmin.assets-locations.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('assets_status_access')
                            <li class="{{ $request->segment(2) == 'assets_statuses' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.assets_statuses.index') }}">
                                    <i class="fa fa-server"></i>
                                    <span class="title">
                                @lang('quickadmin.assets-statuses.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('assets_history_access')
                            <li class="{{ $request->segment(2) == 'assets_histories' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.assets_histories.index') }}">
                                    <i class="fa fa-th-list"></i>
                                    <span class="title">
                                @lang('quickadmin.assets-history.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('entitlement_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-align-justify"></i>
                        <span class="title">@lang('quickadmin.entitlements.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('leaveperiod_access')
                            <li class="{{ $request->segment(2) == 'leaveperiods' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.leaveperiods.index') }}">
                                    <i class="fa fa-ambulance"></i>
                                    <span class="title">
                                @lang('quickadmin.leaveperiod.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('leaveentitlement_access')
                            <li class="{{ $request->segment(2) == 'leaveentitlements' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.leaveentitlements.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.leaveentitlement.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('recruitment_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span class="title">@lang('quickadmin.recruitment.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('vacancy_access')
                            <li class="{{ $request->segment(2) == 'vacancies' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.vacancies.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.vacancy.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('recruitmentoffer_access')
                            <li class="{{ $request->segment(2) == 'recruitmentoffers' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.recruitmentoffers.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.recruitmentoffer.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('candidate_access')
                            <li class="{{ $request->segment(2) == 'candidates' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.candidates.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.candidate.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('discipline_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span class="title">@lang('quickadmin.discipline.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('disciplineaction_access')
                            <li class="{{ $request->segment(2) == 'disciplineactions' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.disciplineactions.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.disciplineactions.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('disciplinarycase_access')
                            <li class="{{ $request->segment(2) == 'disciplinarycases' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.disciplinarycases.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.disciplinarycases.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('selfservice_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span class="title">@lang('quickadmin.selfservice.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('personal_access')
                            <li class="{{ $request->segment(2) == 'personals' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.personals.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.personal.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('selfprofessional_access')
                            <li class="{{ $request->segment(2) == 'selfprofessionals' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.selfprofessionals.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.selfprofessional.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('self_certificate_access')
                            <li class="{{ $request->segment(2) == 'self_certificates' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.self_certificates.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.self-certificate.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('self_vacation_access')
                            <li class="{{ $request->segment(2) == 'self_vacations' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.self_vacations.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.self-vacations.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('selfdocument_access')
                            <li class="{{ $request->segment(2) == 'selfdocuments' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.selfdocuments.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.selfdocuments.title')
                            </span>
                                </a>
                            </li>
                        @endcan

                        @can('selfdocument_access')
                            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                                <a href="{{ route('auth.change_password') }}">
                                    <i class="fa fa-key"></i>
                                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('engagement_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gamepad"></i>
                        <span class="title">@lang('quickadmin.engagement.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('course_access')
                            <li class="{{ $request->segment(2) == 'courses' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.courses.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.courses.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('game_access')
                            <li class="{{ $request->segment(2) == 'games' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.games.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.games.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('award_access')
                            <li class="{{ $request->segment(2) == 'awards' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.awards.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.awards.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('aptitude_access')
                            <li class="{{ $request->segment(2) == 'aptitudes' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.aptitudes.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.aptitude.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('more_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span class="title">@lang('quickadmin.more.title')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('organization_chart_access')
                            <li class="{{ $request->segment(2) == 'organization_charts' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.organization_charts.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.organization-chart.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('noticia_access')
                            <li class="{{ $request->segment(2) == 'noticias' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.noticias.index') }}">
                                    <i class="fa fa-gears"></i>
                                    <span class="title">
                                @lang('quickadmin.noticias.title')
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('stripe_upgrade_access')

                @if(! Auth::user()->premium)
                    <li class="{{ $request->segment(2) == 'stripe_upgrades' ? 'active' : '' }}">
                        <a href="{{ route('admin.stripe_upgrades.index') }}">
                            <i class="fa fa-cc-stripe"></i>
                            <span class="title">@lang('quickadmin.stripe-upgrade.title')</span>
                        </a>
                    </li>
                @endif
            @endcan

            @can('stripe_transaction_access')
                <li class="{{ $request->segment(2) == 'stripe_transactions' ? 'active' : '' }}">
                    <a href="{{ route('admin.stripe_transactions.index') }}">
                        <i class="fa fa-cc-stripe"></i>
                        <span class="title">@lang('quickadmin.stripe-transactions.title')</span>
                    </a>
                </li>
            @endcan

            @can('internal_notification_access')

                @if(! Auth::user()->premium)
                    <li class="{{ $request->segment(2) == 'internal_notifications' ? 'active' : '' }}">
                        <a href="{{ route('admin.internal_notifications.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">@lang('quickadmin.internal-notifications.title')</span>
                        </a>
                    </li>
                @endif
            @endcan


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">Generated Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $request->is('/reports/employees-stats') }}">
                        <a href="{{ url('/admin/reports/employees-stats') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Employees Stats</span>
                        </a>
                    </li>
                    <li class="{{ $request->is('/reports/contact-stats') }}">
                        <a href="{{ url('/admin/reports/contact-stats') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Contact Stats</span>
                        </a>
                    </li>
                    <li class="{{ $request->is('/reports/asset-stats') }}">
                        <a href="{{ url('/admin/reports/asset-stats') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Asset Stats</span>
                        </a>
                    </li>
                    <li class="{{ $request->is('/reports/job-candidates') }}">
                        <a href="{{ url('/admin/reports/job-candidates') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Job Candidates</span>
                        </a>
                    </li>
                </ul>
            </li>


            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight: bold !important;
                }
            </style>


            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
