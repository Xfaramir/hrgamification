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
	'qa_create' => 'Создать',
	'qa_save' => 'Сохранить',
	'qa_edit' => 'Редактировать',
	'qa_restore' => 'Восстановить',
	'qa_permadel' => 'Удалить безвозвратно',
	'qa_all' => 'Все',
	'qa_trash' => 'Удаленные',
	'qa_view' => 'Просмотр',
	'qa_update' => 'Обновить',
	'qa_list' => 'Список',
	'qa_no_entries_in_table' => 'Нет данных в таблице',
	'qa_logout' => 'Выйти',
	'qa_add_new' => 'Добавить новый',
	'qa_are_you_sure' => 'Вы уверенны?',
	'qa_back_to_list' => 'Вернутся к списку',
	'qa_dashboard' => 'Панель управления',
	'qa_delete' => 'Удалить',
	'qa_delete_selected' => 'Удалить выбранные',
	'qa_category' => 'Категория',
	'qa_categories' => 'Категории',
	'qa_sample_category' => 'Пример категории',
	'qa_questions' => 'Вопросы',
	'qa_question' => 'Вопрос',
	'qa_answer' => 'Ответ',
	'qa_sample_question' => 'Пример вопроса',
	'qa_sample_answer' => 'Пример ответа',
	'qa_faq_management' => 'Управление ЧАВО',
	'qa_administrator_can_create_other_users' => 'Администратор (может создавать других пользователей)',
	'qa_simple_user' => 'Обычный пользователь',
	'qa_title' => 'Заголовок',
	'qa_roles' => 'Роли',
	'qa_role' => 'Роль',
	'qa_user_management' => 'Управление пользователями',
	'qa_users' => 'Пользователи',
	'qa_user' => 'Пользователь',
	'qa_name' => 'Имя',
	'qa_email' => 'Электронная почта',
	'qa_password' => 'Пароль',
	'qa_remember_token' => 'Remember token',
	'qa_permissions' => 'Доступы',
	'qa_user_actions' => 'Активности пользователя',
	'qa_action' => 'Активности',
	'qa_action_model' => 'Модель/Сущность Активности',
	'qa_action_id' => 'ID Активности',
	'qa_time' => 'Время',
	'qa_campaign' => 'Кампания',
	'qa_campaigns' => 'Кампании',
	'qa_description' => 'Описание',
	'qa_valid_from' => 'Valid from',
	'qa_valid_to' => 'Valid to',
	'qa_discount_amount' => 'Сумма скидки',
	'qa_discount_percent' => 'Процент скидки',
	'qa_coupons_amount' => 'Сумма купонов',
	'qa_coupons' => 'Купоны',
	'qa_code' => 'Код',
	'qa_redeem_time' => 'Время выкупа',
	'qa_coupon_management' => 'Управление купонами',
	'qa_time_management' => 'Тайм менеджмент',
	'qa_projects' => 'Проекты',
	'qa_reports' => 'Отчеты',
	'qa_time_entries' => 'Записи времени',
	'qa_work_type' => 'Тип работы',
	'qa_work_types' => 'Тип работ',
	'qa_project' => 'Проект',
	'qa_start_time' => 'Время начала',
	'qa_end_time' => 'Время окончания',
	'qa_expense_category' => 'Категория расходов',
	'qa_expense_categories' => 'Категории расходов',
	'qa_expense_management' => 'Управление расходами',
	'qa_expenses' => 'Расходы',
	'qa_expense' => 'Расход',
	'qa_entry_date' => 'Дата ввода',
	'qa_amount' => 'Количество',
	'qa_income_categories' => 'Категории доходов',
	'qa_monthly_report' => 'Месячный отчет',
	'qa_companies' => 'Компании',
	'qa_company_name' => 'Имя компании',
	'qa_address' => 'Адресс',
	'qa_website' => 'Веб сайт',
	'qa_contact_management' => 'Управление контактами',
	'qa_contacts' => 'Контакты',
	'qa_company' => 'Компания',
	'qa_first_name' => 'Имя',
	'qa_last_name' => 'Фамилия',
	'qa_phone' => 'Телефон',
	'qa_phone1' => 'Телефон 1',
	'qa_phone2' => 'Телефон 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Фото (макс. 8 Мб)',
	'qa_category_name' => 'Имя категории',
	'qa_product_management' => 'Управление продуктами',
	'qa_products' => 'Продукты',
	'qa_product_name' => 'Имя продукта',
	'qa_price' => 'Цена',
	'qa_tags' => 'Тэги',
	'qa_tag' => 'Тэг',
	'qa_photo1' => 'Фото1',
	'qa_photo2' => 'Фото2',
	'qa_photo3' => 'Фото3',
	'qa_calendar' => 'Календарь',
	'qa_statuses' => 'Статусы',
	'qa_task_management' => 'Управление задачами',
	'qa_tasks' => 'Задачи',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Вложение',
	'qa_due_date' => 'Срок',
	'qa_assigned_to' => 'Принадлежит к',
	'qa_assets' => 'Активы',
	'qa_asset' => 'Актив',
	'qa_serial_number' => 'Серийный номер',
	'qa_location' => 'Местонахождение',
	'qa_locations' => 'Местонахождения',
	'qa_assigned_user' => 'Принадлежность пользователю',
	'qa_notes' => 'Записки',
	'qa_assets_history' => 'История активов',
	'qa_assets_management' => 'Управление активами',
	'qa_slug' => 'Slug (ЧПУ)',
	'qa_content_management' => 'Управление контентом',
	'qa_text' => 'Текст',
	'qa_excerpt' => 'Эксперт',
	'qa_featured_image' => 'Популярные изображения',
	'qa_pages' => 'Страницы',
	'qa_axis' => 'Оси',
	'qa_show' => 'Показать',
	'qa_group_by' => 'Сортировать по',
	'qa_chart_type' => 'Тип диаграммы',
	'qa_create_new_report' => 'Создать новый отчет',
	'qa_no_reports_yet' => 'Пока нет ни одного отчета',
	'qa_created_at' => 'Время создания',
	'qa_updated_at' => 'Время последнего обновления',
	'qa_deleted_at' => 'Время удаления',
	'qa_reports_x_axis_field' => 'Ось-Х - пожалуйста выберете одно из полей даты/времени',
	'qa_reports_y_axis_field' => 'Ось-У - пожалуйста выберете одно из полей даты/времени',
	'qa_select_crud_placeholder' => 'Пожалуйста, выберете один из своих CRUD',
	'qa_select_dt_placeholder' => 'Пожалуйста, выберете одно из полей даты/времени',
	'qa_aggregate_function_use' => 'Какую агрегатную функцию использовать?',
	'qa_x_axis_group_by' => 'Ось-Х группировать по',
	'qa_x_axis_field' => 'Поле Оси Х (дата/время)',
	'qa_y_axis_field' => 'Поле оси У',
	'qa_integer_float_placeholder' => 'Пожалуйста выберете одно из числовых полей',
	'qa_change_notifications_field_1_label' => 'Отправить уведомление пользователю по электронной почте',
	'qa_select_users_placeholder' => 'Пожалуйста выберете одного из своих пользователей',
	'qa_is_created' => 'создано',
	'qa_is_updated' => 'обновлено',
	'qa_is_deleted' => 'удалено',
	'qa_notifications' => 'Уведомления',
	'qa_notify_user' => 'Уведомить Пользователя',
	'qa_create_new_notification' => 'Создать новое уведомление',
	'qa_stripe_transactions' => 'Stripe Транзакции',
	'qa_upgrade_to_premium' => 'Обновить пакет услуг до Премиум',
	'qa_messages' => 'Сообщения',
	'qa_you_have_no_messages' => 'У вас нет сообщений',
	'qa_all_messages' => 'Все сообщения',
	'qa_new_message' => 'Новое сообщение',
	'qa_outbox' => 'Отправленные',
	'qa_inbox' => 'Входящие',
	'qa_recipient' => 'Получатель',
	'qa_subject' => 'Тема сообщения',
	'qa_message' => 'Сообщение',
	'qa_send' => 'Отправить',
	'qa_reply' => 'Ответить',
	'qa_crud_title' => 'Заголовок CRUD',
	'qa_crud_date_field' => 'Поле с типом \"дата\" выбранного CRUD',
	'qa_prefix' => 'Префикс',
	'qa_suffix' => 'Суффикс',
	'qa_client_management' => 'Управление клиентами',
	'qa_client_management_settings' => 'Управление клиентами,  настройки',
	'qa_country' => 'Страна',
	'qa_client_status' => 'Статус клиента',
	'qa_clients' => 'Клиенты',
	'qa_client_statuses' => 'Клиентские статусы',
	'qa_currencies' => 'Валюты',
	'qa_main_currency' => 'Основная валюта',
	'qa_documents' => 'Документы',
	'qa_file' => 'Файл',
	'qa_income_source' => 'Источник дохода',
	'qa_income_sources' => 'Источники дохода',
	'qa_fee_percent' => 'Коэффициент вознаграждения',
	'qa_note_text' => 'Текст примечания',
	'qa_client' => 'Клиент',
	'qa_start_date' => 'Дата начала',
	'qa_budget' => 'Бюджет',
	'qa_project_status' => 'Статус проекта',
	'qa_project_statuses' => 'Статусы проекта',
	'qa_transactions' => 'Транзакции',
	'qa_transaction_types' => 'Типа транзакций',
	'qa_transaction_type' => 'Тип транзакции',
	'qa_transaction_date' => 'Дата транзакции',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Текущий пароль',
	'qa_new_password' => 'Новый пароль',
	'qa_password_confirm' => 'Новый пароль еще раз',
	'qa_dashboard_text' => 'Вы вошли в систему !',
	'qa_forgot_password' => 'Забыли пароль?',
	'qa_remember_me' => 'Напомнить',
	'qa_login' => 'Войти',
	'qa_change_password' => 'Сменить пароль',
	'qa_csv' => 'CSV',
	'qa_print' => 'Печать',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Скопировать',
	'qa_colvis' => 'Видимость колонок',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Сброс пароля',
	'qa_reset_password_woops' => '<strong>Ой!</strong> Возникли проблемы со следующими подробностями:',
	'qa_email_line1' => 'Вы получили это письмо так как поступила заявка на смену пароля для вашего аккаунта',
	'qa_email_line2' => 'Если вы не запрашивали смену пароля, просто проигнорируйте это письмо. Ничего делать не нужно.',
	'qa_email_greet' => 'Здравствуйте!',
	'qa_email_regards' => 'С уважением',
	'qa_confirm_password' => 'Подтвердите пароль',
	'qa_if_you_are_having_trouble' => 'Если вы испытываете трудности, нажмите',
	'qa_copy_paste_url_bellow' => 'кнопку, скопируйте ссылку и вставьте а адресную строку браузера',
	'qa_please_select' => 'Пожалуйста, сделайте выбор',
	'qa_when_crud' => 'Когда CRUD',
	'qa_calendar_sources' => 'Источники календаря',
	'qa_new_calendar_source' => 'Создать новый источник календаря',
	'qa_label_field' => 'Поле для заголовка',
	'qa_no_calendar_sources' => 'Еще нет источников календаря',
	'qa_crud_event_field' => 'Поле заголовка мероприятия',
	'qa_create_new_calendar_source' => 'Создать новый источник календаря',
	'qa_edit_calendar_source' => 'Редактировать источник календаря',
	'qa_custom_controller_index' => 'Индивидуальный контроллер',
	'qa_registration' => 'Регистрация',
	'qa_not_approved_title' => 'Вы не подтвержены',
	'qa_not_approved_p' => 'Ваш аккаунт не подтвержден администратором. Пожалуйста, попробуйте войти позже.',
	'qa_whoops' => 'Упс!',
	'quickadmin_title' => 'hrgamification',
];