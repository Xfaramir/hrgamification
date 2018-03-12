<?php

return [
		'administration' => [		'title' => 'Administration',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'User Role',			'roletype' => 'Type of Role',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',			'username' => 'Username',			'premium' => 'Premium',		],	],
		'quiz' => [		'title' => 'Quiz',		'fields' => [		],	],
		'topics' => [		'title' => 'Topics',		'fields' => [		],	],
		'questions' => [		'title' => 'Questions',		'fields' => [		],	],
		'contact-management' => [		'title' => 'Contact management',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Companies',		'fields' => [			'name' => 'Company name',			'address' => 'Address',			'website' => 'Website',			'email' => 'Email',		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [			'company' => 'Company',			'first-name' => 'First name',			'last-name' => 'Last name',			'phone1' => 'Phone 1',			'phone2' => 'Phone 2',			'email' => 'Email',			'skype' => 'Skype',			'address' => 'Address',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
		'expense-management' => [		'title' => 'Expense Management',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Categories',		'fields' => [			'name' => 'Name',		],	],
		'income-category' => [		'title' => 'Income categories',		'fields' => [			'name' => 'Name',		],	],
		'income' => [		'title' => 'Income',		'fields' => [			'income-category' => 'Income Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'expense' => [		'title' => 'Expenses',		'fields' => [			'expense-category' => 'Expense Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'monthly-report' => [		'title' => 'Monthly report',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'assets-management' => [		'title' => 'Assets management',		'fields' => [		],	],
		'assets-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Title',		],	],
		'assets-statuses' => [		'title' => 'Statuses',		'fields' => [			'title' => 'Title',		],	],
		'assets-locations' => [		'title' => 'Locations',		'fields' => [			'title' => 'Title',		],	],
		'assets' => [		'title' => 'Assets',		'fields' => [			'category' => 'Category',			'serial-number' => 'Serial number',			'title' => 'Title',			'photo1' => 'Photo1',			'photo2' => 'Photo2',			'photo3' => 'Photo3',			'status' => 'Status',			'location' => 'Location',			'notes' => 'Notes',			'assigned-to' => 'Assigned to',			'warranty' => 'Warranty Expires On',			'depreciacion' => 'Depreciacion',			'barcode' => 'Bar Code',		],	],
		'assets-history' => [		'title' => 'Assets history',		'created_at' => 'Time',		'fields' => [			'asset' => 'Asset',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',		],	],
		'stripe-transactions' => [		'title' => 'Stripe Transactions',		'created_at' => 'Time',		'fields' => [			'transaction-user' => 'Email',			'amount' => 'Amount',		],	],
		'stripe-upgrade' => [		'title' => 'Upgrade to Premium',		'fields' => [		],	],
		'occupations' => [		'title' => 'Professions',		'fields' => [		],	],
		'timeshift' => [		'title' => 'Timeshifts',		'fields' => [		],	],
		'job' => [		'title' => 'Job Titles',		'fields' => [			'job-title' => 'Job Title',			'job-description' => 'Job Description',			'job-specification' => 'Job specification',			'job-note' => 'Notes',		],	],
		'timeshift' => [		'title' => 'Timeshift',		'fields' => [			'time-shift' => 'Time shift',			'time-from' => 'From',			'time-to' => 'To',			'time-hours' => 'Hours Per Day',		],	],
		'positions' => [		'title' => 'Positions',		'fields' => [		],	],
		'costcenter' => [		'title' => 'Cost Center',		'fields' => [			'cost-id' => 'Cost Center ID',			'cost-name' => 'Name',			'cost-description' => 'Cost description',		],	],
		'skills' => [		'title' => 'Skills',		'fields' => [			'skill-name' => 'Skill name',			'skill-description' => 'Skill Description',		],	],
		'education' => [		'title' => 'Education',		'fields' => [			'education-level' => 'Level of Education',			'education-title' => 'Education Title',		],	],
		'nationalities' => [		'title' => 'Nationalities',		'fields' => [			'nationalities' => 'Nationalities',			'city' => 'City',		],	],
		'employees' => [		'title' => 'Employees',		'fields' => [			'employee-name' => 'First Name',			'employee-middlename' => 'Middle Name',			'employee-lastname' => 'Lastname',			'employee-salary' => 'Salary',			'employee-photo' => 'Photo',			'employee-username' => 'Username',			'employee-id' => 'ID',			'employee-title' => 'Position Title',			'employee-timeshift' => 'Timeshift',			'employee-costcenter' => 'Cost Center',			'employee-skills' => 'Employee skills',			'employee-education' => 'Employee education',			'employee-nationality' => 'Nationality',			'employee-phone' => 'Phone',			'employee-address' => 'Address',			'employee-bankaccount' => 'Bank Account',			'employee-email' => 'Email',		],	],
		'entitlements' => [		'title' => 'Entitlements',		'fields' => [		],	],
		'leaveperiod' => [		'title' => 'Leave Period',		'fields' => [			'leave-type' => 'Occasion',			'leave-from' => 'Leave from',			'leave-until' => 'Until',		],	],
		'entitlementsleave' => [		'title' => 'Add Leave Entitlement',		'fields' => [		],	],
		'leaveentitlement' => [		'title' => 'Add Leave Entitlement',		'fields' => [		],	],
		'recruitment' => [		'title' => 'Recruitment',		'fields' => [		],	],
		'vacancyss' => [		'title' => 'Vacancyss',		'fields' => [		],	],
		'vacancy' => [		'title' => 'Vacancy',		'fields' => [		],	],
		'currency' => [		'title' => 'Currency',		'fields' => [			'currency' => 'Currency',		],	],
		'salaries' => [		'title' => 'Salaries',		'fields' => [			'salary' => 'Salary',			'salary-position' => 'Salary for Position',		],	],
		'vacancy' => [		'title' => 'Vacancy',		'fields' => [			'vacancy-title' => 'Vacancy title',			'vacancy-name' => 'Vacancy Name',			'vacancy-manager' => 'Vacancy manager',			'vacancy-description' => 'Vacancy Description',			'vacancy-date' => 'Added On',			'vacancy-location' => 'Location',			'vacancy-available' => 'Number of Positions',		],	],
		'candidate' => [		'title' => 'Candidate',		'fields' => [			'candidate-vacancy' => 'Vacancy',			'candidate-name' => 'Name',			'candidate-firstname' => 'First Lastname',			'candidate-secondname' => 'Second Lasname',			'candidate-email' => 'Email',			'candidate-phone' => 'Phone',			'candidate-facebook' => 'Facebook',			'candidate-linkein' => 'LinkedIn',			'candidate-notes' => 'Notes',			'candidate-date' => 'Date of Application',			'candidate-resume' => 'Resume',			'candidate-photo' => 'Photo',		],	],
		'discipline' => [		'title' => 'Discipline',		'fields' => [		],	],
		'disciplineactions' => [		'title' => 'Discipline Actions',		'fields' => [			'disciplineactions' => 'Discipline Actions ',			'discipline-severity' => 'Severity',			'discipline-description' => 'Discipline description',			'discipline-status' => 'Status',		],	],
		'disciplinarycases' => [		'title' => 'Disciplinary Cases',		'fields' => [			'discipline-employee' => 'Employee',			'discipline-case' => 'Case Name',			'disciplinary-description' => 'Description',			'disciplinary-document' => 'Documents',			'disciplinary-date' => 'Created On',			'disciplinary-actions' => 'Actions to Take',			'disciplinary-manager' => 'Created By',		],	],
		'status' => [		'title' => 'Status',		'fields' => [			'status' => 'Status',		],	],
		'leaveentitlement' => [		'title' => 'Add Leave Entitlement',		'fields' => [		],	],
		'test' => [		'title' => 'Add Leave Entitlement',		'fields' => [		],	],
		'selfservice' => [		'title' => 'Self Service',		'fields' => [		],	],
		'selfpersonal' => [		'title' => 'Personal Data',		'fields' => [		],	],
		'selfprofessional' => [		'title' => 'Professional Data',		'fields' => [			'self-start' => 'Start Date',			'self-end' => 'End Date',			'self-protitle' => 'Professional Title',			'self-title' => 'Job Title',			'self-comment' => 'Comments',		],	],
		'self-certificate' => [		'title' => ' Work Certificate',		'fields' => [		],	],
		'self-vacations' => [		'title' => 'Vacations',		'fields' => [		],	],
		'selfdocuments' => [		'title' => 'Employment Documents',		'fields' => [			'self-resume' => 'Resume',			'self-offerletter' => 'Offer Letter',			'self-joinletter' => 'Join Letter',			'self-contract' => 'Contract And Agreement',			'self-id' => 'National ID',			'self-photo' => 'Photo',		],	],
		'recruitmentoffer' => [		'title' => 'Review/Sent Offer',		'fields' => [			'hiring-offer' => 'Vacancy',		],	],
		'paystubs' => [		'title' => 'Pay Stubs',		'fields' => [		],	],
		'engament' => [		'title' => 'Engament',		'fields' => [		],	],
		'engagement' => [		'title' => 'Engagement',		'fields' => [		],	],
		'courses' => [		'title' => 'Courses',		'fields' => [			'engagement-courses' => 'Course Title',			'engament-skill' => 'Skill',			'engagement-duration' => 'Duration',			'engagement-description' => 'Description',			'engagment-link' => 'Link',		],	],
		'games' => [		'title' => 'Games',		'fields' => [		],	],
		'awards' => [		'title' => 'Awards',		'fields' => [		],	],
		'aptitude' => [		'title' => 'Aptitude',		'fields' => [		],	],
		'organization-chart' => [		'title' => 'Organization Chart',		'fields' => [		],	],
		'more' => [		'title' => 'More',		'fields' => [		],	],
		'news' => [		'title' => 'News',		'fields' => [		],	],
		'leaveentitlement' => [		'title' => 'Add Leave Entitlement',		'fields' => [			'leave-type' => 'Leave type',			'leave-employee' => 'Employee OFF',			'leave-from' => 'From',			'leave-until' => 'Until',			'status' => 'Status',		],	],
		'calendar' => [		'title' => 'Calendar',		'fields' => [			'calendar-event' => 'Event Title',			'calendar-time' => 'Date of Event',			'calendar-location' => 'Location',			'calendar-description' => 'Event Description',			'calendar-photo' => 'Photo',		],	],
		'personal' => [		'title' => 'Personal Data',		'fields' => [		],	],
		'badges' => [		'title' => 'Badges',		'fields' => [			'title' => 'Title',			'icon' => 'Icon',			'description' => 'Description',			'status' => 'Status',		],	],
		'news' => [		'title' => 'News',		'fields' => [			'subject' => 'Subject',			'published-date' => 'Published Date',			'description' => 'Description',		],	],
		'noticias' => [		'title' => 'News',		'fields' => [		],	],
	'qa_create' => 'Стварыць',
	'qa_save' => 'Захаваць',
	'qa_edit' => 'Рэдагаваць',
	'qa_restore' => 'Аднавіць',
	'qa_permadel' => 'Выдаліць назаўсёды',
	'qa_all' => 'Усё',
	'qa_trash' => 'Смецце',
	'qa_list' => 'Спіс',
	'qa_logout' => 'Выйсці',
	'qa_add_new' => 'Дадаць новы',
	'qa_are_you_sure' => 'Вы ўпэўнены?',
	'qa_back_to_list' => 'Назад да спісу',
	'qa_delete' => 'Выдаліць',
	'qa_category' => 'Катэгорыя',
	'qa_categories' => 'Катэгорыі',
	'qa_sample_category' => 'Прыклад катэгорыі',
	'qa_questions' => 'Пытанні',
	'qa_question' => 'Пытанне',
	'qa_answer' => 'Адказ',
	'qa_sample_question' => 'Прыклад пытання',
	'qa_sample_answer' => 'Прыклад адказу',
	'qa_title' => 'Загаловак',
	'qa_roles' => 'Ролі',
	'qa_role' => 'Роля',
	'qa_users' => 'Карыстальнікі',
	'qa_user' => 'Карыстальнік',
	'qa_name' => 'Імя',
	'qa_email' => 'Імэйл',
	'qa_password' => 'Пароль',
	'qa_price' => 'Кошт',
	'qa_email_greet' => 'Вітаем',
	'qa_register' => 'Рэгістраваць',
	'qa_registration' => 'Рэгістрацыя',
	'qa_view' => 'Прагляд',
	'qa_update' => 'Абнавіць',
	'qa_no_entries_in_table' => 'Няма запісаў у табліцы',
	'qa_dashboard' => 'Панель',
	'qa_delete_selected' => 'Выдаліць абранае',
	'qa_user_management' => 'Кіраванне карыстальнікамі',
	'qa_address' => 'Адрэса',
	'qa_first_name' => 'Імя',
	'qa_last_name' => 'Прозвішча',
	'qa_phone' => 'Тэлефон',
	'qa_created_at' => 'Створана',
	'qa_updated_at' => 'Абноўлена',
	'qa_deleted_at' => 'Выдалена',
	'qa_please_select' => 'Калі ласка, абярыце',
	'qa_category_name' => 'Назва катэгорыі',
	'qa_product_management' => 'Кіраванне таварамі',
	'qa_products' => 'Тавары',
	'qa_product_name' => 'Назва тавара',
	'qa_content_management' => 'Кіраванне старонкамі',
	'qa_text' => 'Тэкст',
	'qa_dashboard_text' => 'Вы ўвайшлі ў сістэму!',
	'qa_forgot_password' => 'Забылі пароль?',
	'qa_remember_me' => 'Памятаць мяне',
	'qa_login' => 'Увайсці',
	'qa_change_password' => 'Змяніць пароль',
	'qa_print' => 'Раздрукаваць',
	'qa_description' => 'Апісаннне',
	'qa_phone1' => 'Тэлефон 1',
	'qa_phone2' => 'Тэлефон 2',
	'qa_photo1' => 'Фота1',
	'qa_photo2' => 'Фота2',
	'qa_photo3' => 'Фота3',
	'qa_calendar' => 'Каляндар',
	'qa_notes' => 'Зацемки',
	'qa_pages' => 'Старонки',
	'qa_show' => 'Паказаць',
	'qa_group_by' => 'Групаваць па',
	'qa_faq_management' => 'Кіраванне FAQ',
	'qa_administrator_can_create_other_users' => 'Адміністратар (можа ствараць карыстальнікаў)',
	'qa_simple_user' => 'Звычайны карыстальнік',
	'qa_remember_token' => 'Запомніць',
	'qa_permissions' => 'Дазволы',
	'qa_user_actions' => 'Дзеянні карыстальніка',
	'qa_action' => 'Дзеянне',
	'qa_time' => 'Час',
	'qa_campaign' => 'Кампанія',
	'qa_campaigns' => 'Кампаніі',
	'qa_valid_from' => 'Дата пачатку',
	'qa_valid_to' => 'Дата заканчэння',
	'qa_discount_amount' => 'Сума зніжкі',
	'qa_discount_percent' => 'Працэнт зніжкі',
	'qa_redeem_time' => 'Час выкупу',
	'qa_website' => 'Сайт',
	'qa_contact_management' => 'Кіраванне кантактамі',
	'qa_contacts' => 'Кантакты',
	'qa_company' => 'Кампанія',
	'qa_tags' => 'Цэтлікі',
	'qa_tag' => 'Цэтлік',
	'qa_statuses' => 'Статусы',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Далучанае',
	'qa_assigned_to' => 'Прызначана',
	'qa_axis' => 'Вось',
	'qa_is_created' => 'створана',
	'qa_is_updated' => 'абноўлена',
	'qa_is_deleted' => 'выдалена',
	'qa_notifications' => 'Авесткі',
	'qa_notify_user' => 'Абвясціць карыстальніка',
	'qa_create_new_notification' => 'Стварыць абвестку',
	'qa_messages' => 'Паведамленні',
	'qa_you_have_no_messages' => 'Вы не маеце паведамленняў',
	'qa_all_messages' => 'Усе паведамленні',
	'qa_new_message' => 'Новае паведамленне',
	'qa_outbox' => 'Зыходныя',
	'qa_inbox' => 'Уваходныя',
	'qa_recipient' => 'Атрымальнік',
	'qa_subject' => 'Тэма',
	'qa_message' => 'Паведамленне',
	'qa_send' => 'Даслаць',
	'qa_reply' => 'Адказаць',
	'qa_calendar_sources' => 'Крыніцы каляндара',
	'qa_country' => 'Краіна',
	'qa_client_status' => 'Статус кліента',
	'qa_clients' => 'Кліенты',
	'qa_currencies' => 'Валюты',
	'qa_main_currency' => 'Галоўная валюта',
	'qa_documents' => 'Дакументы',
	'qa_file' => 'Файл',
	'qa_client' => 'Кліент',
	'qa_start_date' => 'Дата пачатку',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Бягучы пароль',
	'qa_new_password' => 'Новы пароль',
	'qa_password_confirm' => 'Падцверджанне пароля',
	'qa_copy' => 'Капіяваць',
	'qa_colvis' => 'Бачнасць калонак',
	'qa_reset_password' => 'Скінуць пароль',
	'qa_email_regards' => 'З павагаю',
	'qa_confirm_password' => 'Падцвердзіце пароль',
	'quickadmin_title' => 'hrgamification',
];