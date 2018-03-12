<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: Administration
        Gate::define('administration_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Courses
        Gate::define('course_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('course_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('course_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('course_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('course_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Organization chart
        Gate::define('organization_chart_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });

        // Auth gates for: Contact companies
        Gate::define('contact_company_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('contact_company_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_company_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_company_view', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('contact_company_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Expense category
        Gate::define('expense_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets
        Gate::define('asset_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('asset_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('asset_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('asset_view', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('asset_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Leaveperiod
        Gate::define('leaveperiod_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('leaveperiod_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('leaveperiod_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('leaveperiod_view', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('leaveperiod_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Vacancy
        Gate::define('vacancy_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('vacancy_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('vacancy_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('vacancy_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('vacancy_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Disciplineactions
        Gate::define('disciplineaction_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('disciplineaction_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('disciplineaction_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('disciplineaction_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('disciplineaction_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Personal
        Gate::define('personal_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Selfprofessional
        Gate::define('selfprofessional_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('selfprofessional_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('selfprofessional_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('selfprofessional_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('selfprofessional_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Recruitmentoffer
        Gate::define('recruitmentoffer_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('recruitmentoffer_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('recruitmentoffer_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('recruitmentoffer_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('recruitmentoffer_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Games
        Gate::define('game_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Leaveentitlement
        Gate::define('leaveentitlement_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('leaveentitlement_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('leaveentitlement_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('leaveentitlement_view', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('leaveentitlement_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Contact management
        Gate::define('contact_management_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Expense management
        Gate::define('expense_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Income category
        Gate::define('income_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets categories
        Gate::define('assets_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Disciplinarycases
        Gate::define('disciplinarycase_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('disciplinarycase_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('disciplinarycase_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('disciplinarycase_view', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('disciplinarycase_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Noticias
        Gate::define('noticia_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Self certificate
        Gate::define('self_certificate_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });

        // Auth gates for: Awards
        Gate::define('award_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Income
        Gate::define('income_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('income_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets management
        Gate::define('assets_management_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Assets locations
        Gate::define('assets_location_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Candidate
        Gate::define('candidate_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('candidate_create', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('candidate_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('candidate_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('candidate_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Self vacations
        Gate::define('self_vacation_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });

        // Auth gates for: Aptitude
        Gate::define('aptitude_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Expense
        Gate::define('expense_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('expense_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets statuses
        Gate::define('assets_status_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Entitlements
        Gate::define('entitlement_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: News
        Gate::define('news_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('news_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('news_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('news_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('news_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Selfdocuments
        Gate::define('selfdocument_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('selfdocument_create', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('selfdocument_edit', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('selfdocument_view', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('selfdocument_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Monthly report
        Gate::define('monthly_report_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets history
        Gate::define('assets_history_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Employees
        Gate::define('employee_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('employee_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('employee_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('employee_view', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('employee_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Recruitment
        Gate::define('recruitment_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Discipline
        Gate::define('discipline_access', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Calendar
        Gate::define('calendar_access', function ($user) {
            return in_array($user->role_id, [1, 4, 6]);
        });
        Gate::define('calendar_create', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('calendar_edit', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });
        Gate::define('calendar_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('calendar_delete', function ($user) {
            return in_array($user->role_id, [1, 4]);
        });

        // Auth gates for: Selfservice
        Gate::define('selfservice_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Job
        Gate::define('job_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('job_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('job_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('job_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('job_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Engagement
        Gate::define('engagement_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Timeshift
        Gate::define('timeshift_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('timeshift_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('timeshift_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('timeshift_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('timeshift_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: More
        Gate::define('more_access', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });

        // Auth gates for: Costcenter
        Gate::define('costcenter_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('costcenter_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('costcenter_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('costcenter_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('costcenter_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Skills
        Gate::define('skill_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('skill_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('skill_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('skill_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('skill_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Education
        Gate::define('education_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('education_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('education_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('education_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('education_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Nationalities
        Gate::define('nationality_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('nationality_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('nationality_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('nationality_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('nationality_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Internal notifications
        Gate::define('internal_notification_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Currency
        Gate::define('currency_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('currency_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('currency_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('currency_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('currency_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Salaries
        Gate::define('salary_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('salary_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('salary_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('salary_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('salary_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Status
        Gate::define('status_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('status_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('status_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('status_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('status_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Badges
        Gate::define('badge_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('badge_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('badge_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('badge_view', function ($user) {
            return in_array($user->role_id, [1, 4, 5, 6]);
        });
        Gate::define('badge_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
