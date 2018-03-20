<?phpreturn [    'administration' => [        'title' => 'Administration',        'fields' => [        ],    ],    'roles' => [        'title' => 'Roles',        'fields' => [            'title' => 'User Role',            'roletype' => 'Type of Role',        ],    ],    'users' => [        'title' => 'Users',        'fields' => [            'name' => 'Name',            'email' => 'Email',            'password' => 'Password',            'role' => 'Role',            'remember-token' => 'Remember token',            'username' => 'Username',        ],    ],    'quiz' => [        'title' => 'Quiz',        'fields' => [        ],    ],    'topics' => [        'title' => 'Topics',        'fields' => [        ],    ],    'questions' => [        'title' => 'Questions',        'fields' => [        ],    ],    'contact-management' => [        'title' => 'Contact management',        'fields' => [        ],    ],    'contact-companies' => [        'title' => 'Companies',        'fields' => [            'name' => 'Company name',            'address' => 'Address',            'website' => 'Website',            'email' => 'Email',        ],    ],    'contacts' => [        'title' => 'Contacts',        'fields' => [            'company' => 'Company',            'first-name' => 'First name',            'last-name' => 'Last name',            'phone1' => 'Phone 1',            'phone2' => 'Phone 2',            'email' => 'Email',            'skype' => 'Skype',            'address' => 'Address',        ],    ],    'user-actions' => [        'title' => 'User actions',        'created_at' => 'Time',        'fields' => [            'user' => 'User',            'action' => 'Action',            'action-model' => 'Action model',            'action-id' => 'Action id',        ],    ],    'expense-management' => [        'title' => 'Expense Management',        'fields' => [        ],    ],    'expense-category' => [        'title' => 'Expense Categories',        'fields' => [            'name' => 'Name',        ],    ],    'income-category' => [        'title' => 'Income categories',        'fields' => [            'name' => 'Name',        ],    ],    'income' => [        'title' => 'Income',        'fields' => [            'income-category' => 'Income Category',            'entry-date' => 'Entry date',            'amount' => 'Amount',        ],    ],    'expense' => [        'title' => 'Expenses',        'fields' => [            'expense-category' => 'Expense Category',            'entry-date' => 'Entry date',            'amount' => 'Amount',        ],    ],    'monthly-report' => [        'title' => 'Monthly report',        'fields' => [        ],    ],    'internal-notifications' => [        'title' => 'Notifications',        'fields' => [            'text' => 'Text',            'link' => 'Link',            'users' => 'Users',        ],    ],    'assets-management' => [        'title' => 'Assets management',        'fields' => [        ],    ],    'assets-categories' => [        'title' => 'Categories',        'fields' => [            'title' => 'Title',        ],    ],    'assets-statuses' => [        'title' => 'Statuses',        'fields' => [            'title' => 'Title',        ],    ],    'assets-locations' => [        'title' => 'Locations',        'fields' => [            'title' => 'Title',        ],    ],    'assets' => [        'title' => 'Assets',        'fields' => [            'category' => 'Category',            'serial-number' => 'Serial number',            'title' => 'Title',            'photo1' => 'Photo1',            'photo2' => 'Photo2',            'photo3' => 'Photo3',            'status' => 'Status',            'location' => 'Location',            'notes' => 'Notes',            'assigned-to' => 'Assigned to',            'warranty' => 'Warranty Expires On',            'depreciacion' => 'Depreciacion',            'barcode' => 'Bar Code',        ],    ],    'assets-history' => [        'title' => 'Assets history',        'created_at' => 'Time',        'fields' => [            'asset' => 'Asset',            'status' => 'Status',            'location' => 'Location',            'assigned-user' => 'Assigned (user)',        ],    ],    'stripe-transactions' => [        'title' => 'Stripe Transactions',        'created_at' => 'Time',        'fields' => [        ],    ],    'stripe-upgrade' => [        'title' => 'Upgrade to Premium',        'fields' => [        ],    ],    'occupations' => [        'title' => 'Professions',        'fields' => [        ],    ],    'timeshift' => [        'title' => 'Timeshifts',        'fields' => [        ],    ],    'job' => [        'title' => 'Job Titles',        'fields' => [            'job-title' => 'Job Title',            'job-description' => 'Job Description',            'job-specification' => 'Job specification',            'job-note' => 'Notes',        ],    ],    'timeshift' => [        'title' => 'Timeshift',        'fields' => [            'time-shift' => 'Time shift',            'time-from' => 'From',            'time-to' => 'To',            'time-hours' => 'Hours Per Day',        ],    ],    'positions' => [        'title' => 'Positions',        'fields' => [        ],    ],    'costcenter' => [        'title' => 'Cost Center',        'fields' => [            'cost-id' => 'Cost Center ID',            'cost-name' => 'Name',            'cost-description' => 'Cost description',        ],    ],    'skills' => [        'title' => 'Skills',        'fields' => [            'skill-name' => 'Skill name',            'skill-description' => 'Skill Description',        ],    ],    'education' => [        'title' => 'Education',        'fields' => [            'education-level' => 'Level of Education',            'education-title' => 'Education Title',        ],    ],    'nationalities' => [        'title' => 'Nationalities',        'fields' => [            'nationalities' => 'Nationalities',            'city' => 'City',        ],    ],    'employees' => [        'title' => 'Employees',        'fields' => [            'employee-name' => 'First Name',            'employee-middlename' => 'Middle Name',            'employee-lastname' => 'Lastname',            'employee-salary' => 'Salary',            'employee-photo' => 'Photo',            'employee-username' => 'Username',            'employee-id' => 'ID',            'employee-title' => 'Position Title',            'employee-timeshift' => 'Timeshift',            'employee-costcenter' => 'Cost Center',            'employee-skills' => 'Employee skills',            'employee-education' => 'Employee education',            'employee-nationality' => 'Nationality',            'employee-phone' => 'Phone',            'employee-address' => 'Address',            'employee-bankaccount' => 'Bank Account',            'employee-email' => 'Email',        ],    ],    'entitlements' => [        'title' => 'Entitlements',        'fields' => [        ],    ],    'leaveperiod' => [        'title' => 'Leave Period',        'fields' => [            'leave-type' => 'Occasion',            'leave-from' => 'Leave from',            'leave-until' => 'Until',        ],    ],    'entitlementsleave' => [        'title' => 'Add Leave Entitlement',        'fields' => [        ],    ],    'leaveentitlement' => [        'title' => 'Add Leave Entitlement',        'fields' => [        ],    ],    'recruitment' => [        'title' => 'Recruitment',        'fields' => [        ],    ],    'vacancyss' => [        'title' => 'Vacancyss',        'fields' => [        ],    ],    'vacancy' => [        'title' => 'Vacancy',        'fields' => [        ],    ],    'currency' => [        'title' => 'Currency',        'fields' => [            'currency' => 'Currency',        ],    ],    'salaries' => [        'title' => 'Salaries',        'fields' => [            'salary' => 'Salary',            'salary-position' => 'Salary for Position',        ],    ],    'vacancy' => [        'title' => 'Vacancy',        'fields' => [            'vacancy-title' => 'Vacancy title',            'vacancy-name' => 'Vacancy Name',            'vacancy-manager' => 'Vacancy manager',            'vacancy-description' => 'Vacancy Description',            'vacancy-date' => 'Added On',            'vacancy-location' => 'Location',            'vacancy-available' => 'Number of Positions',        ],    ],    'candidate' => [        'title' => 'Candidate',        'fields' => [            'candidate-vacancy' => 'Vacancy',            'candidate-name' => 'Name',            'candidate-firstname' => 'First Lastname',            'candidate-secondname' => 'Second Lasname',            'candidate-email' => 'Email',            'candidate-phone' => 'Phone',            'candidate-facebook' => 'Facebook',            'candidate-linkein' => 'LinkedIn',            'candidate-notes' => 'Notes',            'candidate-date' => 'Date of Application',            'candidate-resume' => 'Resume',            'candidate-photo' => 'Photo',        ],    ],    'discipline' => [        'title' => 'Discipline',        'fields' => [        ],    ],    'disciplineactions' => [        'title' => 'Discipline Actions',        'fields' => [            'disciplineactions' => 'Discipline Actions ',            'discipline-severity' => 'Severity',            'discipline-description' => 'Discipline description',            'discipline-status' => 'Status',        ],    ],    'disciplinarycases' => [        'title' => 'Disciplinary Cases',        'fields' => [            'discipline-employee' => 'Employee',            'discipline-case' => 'Case Name',            'disciplinary-description' => 'Description',            'disciplinary-document' => 'Documents',            'disciplinary-date' => 'Created On',            'disciplinary-actions' => 'Actions to Take',            'disciplinary-manager' => 'Created By',        ],    ],    'status' => [        'title' => 'Status',        'fields' => [            'status' => 'Status',        ],    ],    'leaveentitlement' => [        'title' => 'Add Leave Entitlement',        'fields' => [        ],    ],    'test' => [        'title' => 'Add Leave Entitlement',        'fields' => [        ],    ],    'selfservice' => [        'title' => 'Self Service',        'fields' => [        ],    ],    'selfpersonal' => [        'title' => 'Personal Data',        'fields' => [        ],    ],    'selfprofessional' => [        'title' => 'Professional Data',        'fields' => [            'self-start' => 'Start Date',            'self-end' => 'End Date',            'self-protitle' => 'Professional Title',            'self-title' => 'Job Title',            'self-comment' => 'Comments',        ],    ],    'self-certificate' => [        'title' => ' Work Certificate',        'fields' => [        ],    ],    'self-vacations' => [        'title' => 'Vacations',        'fields' => [        ],    ],    'selfdocuments' => [        'title' => 'Employment Documents',        'fields' => [            'self-resume' => 'Resume',            'self-offerletter' => 'Offer Letter',            'self-joinletter' => 'Join Letter',            'self-contract' => 'Contract And Agreement',            'self-id' => 'National ID',            'self-photo' => 'Photo',        ],    ],    'recruitmentoffer' => [        'title' => 'Review/Sent Offer',        'fields' => [            'hiring-offer' => 'Vacancy',        ],    ],    'paystubs' => [        'title' => 'Pay Stubs',        'fields' => [        ],    ],    'engament' => [        'title' => 'Engament',        'fields' => [        ],    ],    'engagement' => [        'title' => 'Engagement',        'fields' => [        ],    ],    'courses' => [        'title' => 'Courses',        'fields' => [            'engagement-courses' => 'Course Title',            'engament-skill' => 'Skill',            'engagement-duration' => 'Duration',            'engagement-description' => 'Description',            'engagment-link' => 'Link',        ],    ],    'games' => [        'title' => 'Games',        'fields' => [        ],    ],    'awards' => [        'title' => 'Awards',        'fields' => [        ],    ],    'aptitude' => [        'title' => 'Aptitude',        'fields' => [        ],    ],    'organization-chart' => [        'title' => 'Organization Chart',        'fields' => [        ],    ],    'more' => [        'title' => 'More',        'fields' => [        ],    ],    'news' => [        'title' => 'News',        'fields' => [        ],    ],    'leaveentitlement' => [        'title' => 'Add Leave Entitlement',        'fields' => [            'leave-type' => 'Leave type',            'leave-employee' => 'Employee OFF',            'leave-from' => 'From',            'leave-until' => 'Until',            'status' => 'Status',        ],    ],    'calendar' => [        'title' => 'Calendar',        'fields' => [            'calendar-event' => 'Event Title',            'calendar-time' => 'Date of Event',            'calendar-location' => 'Location',            'calendar-description' => 'Event Description',            'calendar-photo' => 'Photo',        ],    ],    'personal' => [        'title' => 'Personal Data',        'fields' => [        ],    ],    'badges' => [        'title' => 'Badges',        'fields' => [            'title' => 'Title',            'icon' => 'Icon',            'description' => 'Description',            'status' => 'Status',        ],    ],    'news' => [        'title' => 'News',        'fields' => [            'subject' => 'Subject',            'published-date' => 'Published Date',            'description' => 'Description',        ],    ],    'noticias' => [        'title' => 'News',        'fields' => [        ],    ],    'qa_create' => 'Create',    'qa_save' => 'Save',    'qa_edit' => 'Edit',    'qa_restore' => 'Restore',    'qa_permadel' => 'Delete Permanently',    'qa_all' => 'All',    'qa_trash' => 'Trash',    'qa_view' => 'View',    'qa_update' => 'Update',    'qa_list' => 'List',    'qa_no_entries_in_table' => 'No entries in table',    'qa_custom_controller_index' => 'Custom controller index.',    'qa_logout' => 'Logout',    'qa_add_new' => 'Add new',    'qa_are_you_sure' => 'Are you sure?',    'qa_back_to_list' => 'Back to list',    'qa_dashboard' => 'Dashboard',    'qa_delete' => 'Delete',    'qa_delete_selected' => 'Delete selected',    'qa_category' => 'Category',    'qa_categories' => 'Categories',    'qa_sample_category' => 'Sample category',    'qa_questions' => 'Questions',    'qa_question' => 'Question',    'qa_answer' => 'Answer',    'qa_sample_question' => 'Sample question',    'qa_sample_answer' => 'Sample answer',    'qa_faq_management' => 'FAQ Management',    'qa_administrator_can_create_other_users' => 'Administrator (can create other users)',    'qa_simple_user' => 'Simple user',    'qa_title' => 'Title',    'qa_roles' => 'Roles',    'qa_role' => 'Role',    'qa_user_management' => 'User management',    'qa_users' => 'Users',    'qa_user' => 'User',    'qa_name' => 'Name',    'qa_email' => 'Email',    'qa_password' => 'Password',    'qa_remember_token' => 'Remember token',    'qa_permissions' => 'Permissions',    'qa_user_actions' => 'User actions',    'qa_action' => 'Action',    'qa_action_model' => 'Action model',    'qa_action_id' => 'Action id',    'qa_time' => 'Time',    'qa_campaign' => 'Campaign',    'qa_campaigns' => 'Campaigns',    'qa_description' => 'Description',    'qa_valid_from' => 'Valid from',    'qa_valid_to' => 'Valid to',    'qa_discount_amount' => 'Discount amount',    'qa_discount_percent' => 'Discount percent',    'qa_coupons_amount' => 'Coupons amount',    'qa_coupons' => 'Coupons',    'qa_code' => 'Code',    'qa_redeem_time' => 'Redeem time',    'qa_coupon_management' => 'Coupon Management',    'qa_time_management' => 'Time management',    'qa_projects' => 'Projects',    'qa_reports' => 'Reports',    'qa_time_entries' => 'Time entries',    'qa_work_type' => 'Work type',    'qa_work_types' => 'Work types',    'qa_project' => 'Project',    'qa_start_time' => 'Start time',    'qa_end_time' => 'End time',    'qa_expense_category' => 'Expense Category',    'qa_expense_categories' => 'Expense Categories',    'qa_expense_management' => 'Expense Management',    'qa_expenses' => 'Expenses',    'qa_expense' => 'Expense',    'qa_entry_date' => 'Entry date',    'qa_amount' => 'Amount',    'qa_income_categories' => 'Income categories',    'qa_monthly_report' => 'Monthly report',    'qa_companies' => 'Companies',    'qa_company_name' => 'Company name',    'qa_address' => 'Address',    'qa_website' => 'Website',    'qa_contact_management' => 'Contact management',    'qa_contacts' => 'Contacts',    'qa_company' => 'Company',    'qa_first_name' => 'First name',    'qa_last_name' => 'Last name',    'qa_phone' => 'Phone',    'qa_phone1' => 'Phone 1',    'qa_phone2' => 'Phone 2',    'qa_skype' => 'Skype',    'qa_photo' => 'Photo (max 8mb)',    'qa_category_name' => 'Category name',    'qa_product_management' => 'Product management',    'qa_products' => 'Products',    'qa_product_name' => 'Product name',    'qa_price' => 'Price',    'qa_tags' => 'Tags',    'qa_tag' => 'Tag',    'qa_photo1' => 'Photo1',    'qa_photo2' => 'Photo2',    'qa_photo3' => 'Photo3',    'qa_calendar' => 'Calendar',    'qa_statuses' => 'Statuses',    'qa_task_management' => 'Task management',    'qa_tasks' => 'Tasks',    'qa_status' => 'Status',    'qa_attachment' => 'Attachment',    'qa_due_date' => 'Due date',    'qa_assigned_to' => 'Assigned to',    'qa_assets' => 'Assets',    'qa_asset' => 'Asset',    'qa_serial_number' => 'Serial number',    'qa_location' => 'Location',    'qa_locations' => 'Locations',    'qa_assigned_user' => 'Assigned (user)',    'qa_notes' => 'Notes',    'qa_assets_history' => 'Assets history',    'qa_assets_management' => 'Assets management',    'qa_slug' => 'Slug',    'qa_content_management' => 'Content management',    'qa_text' => 'Text',    'qa_excerpt' => 'Excerpt',    'qa_featured_image' => 'Featured image',    'qa_pages' => 'Pages',    'qa_axis' => 'Axis',    'qa_show' => 'Show',    'qa_group_by' => 'Group by',    'qa_chart_type' => 'Chart type',    'qa_create_new_report' => 'Create new report',    'qa_no_reports_yet' => 'No reports yet.',    'qa_created_at' => 'Created at',    'qa_updated_at' => 'Updated at',    'qa_deleted_at' => 'Deleted at',    'qa_reports_x_axis_field' => 'X-axis - please choose one of date/time fields',    'qa_reports_y_axis_field' => 'Y-axis - please choose one of number fields',    'qa_select_crud_placeholder' => 'Please select one of your CRUDs',    'qa_select_dt_placeholder' => 'Please select one of date/time fields',    'qa_aggregate_function_use' => 'Aggregate function to use',    'qa_x_axis_group_by' => 'X-axis group by',    'qa_x_axis_field' => 'X-axis field (date/time)',    'qa_y_axis_field' => 'Y-axis field',    'qa_integer_float_placeholder' => 'Please select one of integer/float fields',    'qa_change_notifications_field_1_label' => 'Send email notification to User',    'qa_change_notifications_field_2_label' => 'When Entry on CRUD',    'qa_select_users_placeholder' => 'Please select one of your Users',    'qa_is_created' => 'is created',    'qa_is_updated' => 'is updated',    'qa_is_deleted' => 'is deleted',    'qa_notifications' => 'Notifications',    'qa_notify_user' => 'Notify User',    'qa_when_crud' => 'When CRUD',    'qa_create_new_notification' => 'Create new Notification',    'qa_stripe_transactions' => 'Stripe Transactions',    'qa_upgrade_to_premium' => 'Upgrade to Premium',    'qa_messages' => 'Messages',    'qa_you_have_no_messages' => 'You have no messages.',    'qa_all_messages' => 'All Messages',    'qa_new_message' => 'New message',    'qa_outbox' => 'Outbox',    'qa_inbox' => 'Inbox',    'qa_recipient' => 'Recipient',    'qa_subject' => 'Subject',    'qa_message' => 'Message',    'qa_send' => 'Send',    'qa_reply' => 'Reply',    'qa_calendar_sources' => 'Calendar sources',    'qa_new_calendar_source' => 'Create new calendar source',    'qa_crud_title' => 'Crud title',    'qa_crud_date_field' => 'Crud date field',    'qa_prefix' => 'Prefix',    'qa_label_field' => 'Label field',    'qa_suffix' => 'Sufix',    'qa_no_calendar_sources' => 'No calendar sources yet.',    'qa_crud_event_field' => 'Event label field',    'qa_create_new_calendar_source' => 'Create new Calendar Source',    'qa_edit_calendar_source' => 'Edit Calendar Source',    'qa_client_management' => 'Client management',    'qa_client_management_settings' => 'Client management settings',    'qa_country' => 'Country',    'qa_client_status' => 'Client status',    'qa_clients' => 'Clients',    'qa_client_statuses' => 'Client statuses',    'qa_currencies' => 'Currencies',    'qa_main_currency' => 'Main currency',    'qa_documents' => 'Documents',    'qa_file' => 'File',    'qa_income_source' => 'Income source',    'qa_income_sources' => 'Income sources',    'qa_fee_percent' => 'Fee percent',    'qa_note_text' => 'Note text',    'qa_client' => 'Client',    'qa_start_date' => 'Start date',    'qa_budget' => 'Budget',    'qa_project_status' => 'Project status',    'qa_project_statuses' => 'Project statuses',    'qa_transactions' => 'Transactions',    'qa_transaction_types' => 'Transaction types',    'qa_transaction_type' => 'Transaction type',    'qa_transaction_date' => 'Transaction date',    'qa_currency' => 'Currency',    'qa_current_password' => 'Current password',    'qa_new_password' => 'New password',    'qa_password_confirm' => 'New password confirmation',    'qa_dashboard_text' => 'You are logged in!',    'qa_forgot_password' => 'Forgot your password?',    'qa_remember_me' => 'Remember me',    'qa_login' => 'Login',    'qa_change_password' => 'Change password',    'qa_csv' => 'CSV',    'qa_print' => 'Print',    'qa_excel' => 'Excel',    'qa_copy' => 'Copy',    'qa_colvis' => 'Column visibility',    'qa_pdf' => 'PDF',    'qa_reset_password' => 'Reset password',    'qa_reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',    'qa_email_line1' => 'You are receiving this email because we received a password reset request for your account.',    'qa_email_line2' => 'If you did not request a password reset, no further action is required.',    'qa_email_greet' => 'Hello',    'qa_email_regards' => 'Regards',    'qa_confirm_password' => 'Confirm password',    'qa_if_you_are_having_trouble' => 'If you’re having trouble clicking the',    'qa_copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',    'qa_please_select' => 'Please select',    'qa_register' => 'Register',    'qa_registration' => 'Registration',    'qa_not_approved_title' => 'You are not approved',    'qa_not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',    'qa_there_were_problems_with_input' => 'There were problems with input',    'qa_whoops' => 'Whoops!',    'qa_file_contains_header_row' => 'File contains header row?',    'qa_csvImport' => 'CSV Import',    'qa_csv_file_to_import' => 'CSV file to import',    'qa_parse_csv' => 'Parse CSV',    'qa_import_data' => 'Import data',    'qa_imported_rows_to_table' => 'Imported :rows rows to :table table',    'qa_subscription-billing' => 'Subscriptions',    'qa_subscription-payments' => 'Payments',    'qa_basic_crm' => 'Basic CRM',    'qa_customers' => 'Customers',    'qa_customer' => 'Customer',    'quickadmin_title' => 'hrgamification',    'qa_systemadministration' => 'System Administration!',    'qa_adminsystem' => 'The System Administration module offers centralized control to your HR Manager or other personnel to carry out basic HR functions. Define your organizational structure or your pay scale with this module. Work in a secure environment to manage core information and business projects or address security issues such as user rights and permissions.Learn More',    'eventcalendar' => 'Calendar Of Events',    'calendarfeature' => 'Register new events for your employees in the calendar ',    'qa_recruitment' => 'Recruitment and Applicant Tracking',    'qa_recruitmentmessage' => 'HrGamification Recruitment Module can help you to find the ideal candidate for your job It not only provides an internal job portal for the company, but also it let you manage your interview process smoothly.',    'qa_gamification' => 'Gamification!',    'qa_gamificationmessage' => 'The admin is able to increase engagement of the employee by defining and setting up conditions, achievements and games rules by connecting them together to create a rich user experience. This innovative gamification tool offers a variety of fully customizable plugins to engage and reward users, especially by utilizing virtual elements: badges, challenges, leaderboards and storytelling!',    'qa_whatnew' => 'What\'s New?',    'qa_features' => 'Some Features',    'qa_storeinfo' => 'Store Employee Information Securely',    'qa_storemessage' => 'HrGamification CMS allows companies to centralize confidential employee information and define access permissions to authorized personnel to ensure that employee information is both secure and accessible.',    'qa_eventcalendar' => 'Calendar Of Events',    'qa_calendarfeature' => 'Register new events for your employees in the calendar ',    'qa_expensesmessage' => 'Keep Track of your expenses and generate reports',    'recruitments' => 'Recruitment and Selection!',    'recruitmentvacancies' => 'Post new vacancies and handle the applicants applications',    'landingdescription' => 'Content Management System ERP for Human Resources Administration/Control.',    'titlesite' => 'CMS Human Resources UNINCCA Dessertation project ',    'landingdescriptions' => 'Content Management System ERP for Human Resources Administration/Control.',    'amazing' => 'User/Employee Administration',    'basedadminlte' => 'Inventory Management',    'awesomepackaged' => 'Reclutamiento',    'readytouse' => 'Event Calendar!',    'dessertation' => 'Dessertation Project!',    'generatedreports' => 'Generated Reports!',    'employeestats' => 'Employees Stats',    'contactstats' => 'Contact Stats',    'assetstats' => 'Asset Stats',    'jobcandidate' => 'Job Candidates',    'messages' => 'Messages',    'totalcontacts' => 'Total Contacts',    'currentevents' => 'Current Events',    'vacancies' => 'Open Vacancies',    'totalusers' => 'Total Users',    'emmployeereport' => 'Employee Report',    'totalemployees' => 'Total Employees',    'assetinventory' => 'Assets / Inventory',    'warranty' => 'Warranty to expire',    'badge' => 'Badges',    'recentnews' => 'Recent News',    'reports' => 'Reports',    'latestvacancies' => 'Latest Vacancies',    'vacantid' => 'Vacancy ID',    'vacanttitle' => 'Title',    'vacantpublished' => 'Published On',    'changelanguage' => 'Change Language',];