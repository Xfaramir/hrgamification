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
	'qa_forgot_password' => 'Забули пароль?',
	'qa_login' => 'Увійти',
	'qa_change_password' => 'Змінити пароль',
	'qa_print' => 'Друк',
	'qa_copy' => 'Скопіювати',
	'qa_pdf' => 'PDF',
	'qa_email_greet' => 'Вітаємо',
	'qa_email_regards' => 'С повагою',
	'qa_confirm_password' => 'Підтвердіть пароль',
	'qa_please_select' => 'Будь-ласка, веберіть',
	'qa_create' => 'Створити',
	'qa_save' => 'Зберегти',
	'qa_edit' => 'Редагувати',
	'qa_all' => 'Усі',
	'qa_trash' => 'Кошик',
	'qa_view' => 'Перегляд',
	'qa_update' => 'Оновити',
	'qa_list' => 'Список',
	'qa_no_entries_in_table' => 'Немає даних',
	'qa_logout' => 'Вихід',
	'qa_add_new' => 'Додати',
	'qa_are_you_sure' => 'Ви впевнені?',
	'qa_back_to_list' => 'Назад до списку',
	'qa_dashboard' => 'Панель управління',
	'qa_delete' => 'Видалити',
	'qa_delete_selected' => 'Видалити помічені',
	'qa_category' => 'Категорія',
	'qa_categories' => 'Категорії',
	'qa_sample_category' => 'Приклад категорії',
	'qa_questions' => 'Запитання',
	'qa_question' => 'Запитання',
	'qa_answer' => 'Відповідь',
	'qa_sample_question' => 'Приклад запитання',
	'qa_sample_answer' => 'Приклад відповіді',
	'qa_faq_management' => 'Менеджер FAQ',
	'qa_users' => 'Користувачі',
	'qa_user' => 'Користувач',
	'qa_name' => 'Ім\'я',
	'qa_email' => 'Email',
	'qa_password' => 'Пароль',
	'qa_remember_token' => 'Запамятати токен',
	'qa_permissions' => 'Дозволи',
	'qa_action' => 'Дії',
	'qa_time' => 'Час',
	'qa_coupons' => 'Купони',
	'qa_code' => 'Код',
	'qa_client' => 'Клі',
	'qa_start_date' => 'Дата початку',
	'qa_budget' => 'Бюджет',
	'qa_project_status' => 'Статус проекта',
	'qa_project_statuses' => 'Статуси проектів',
	'qa_transactions' => 'Транзакції',
	'qa_transaction_types' => 'Тип транзакцій',
	'qa_transaction_type' => 'Тип транзакції',
	'qa_transaction_date' => 'Дата транзакції',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Діючий пароль',
	'qa_new_password' => 'Новий пароль',
	'qa_password_confirm' => 'Новий пароль підтвердження',
	'qa_dashboard_text' => 'Ви ввійшли в систему!',
	'qa_remember_me' => 'Запам\'ятати мене',
	'qa_csv' => 'CSV',
	'qa_excel' => 'Excel',
	'qa_colvis' => 'Видимість колонок',
	'qa_reset_password' => 'Відновити пароль',
	'qa_if_you_are_having_trouble' => 'Якщо виникли труднощі, натисніть',
	'qa_copy_paste_url_bellow' => 'кнопку, скопіюйте посилання та вставте в адресний рядок браузера',
	'qa_register' => 'Реєстрація',
	'qa_registration' => 'Реєстрація',
	'qa_not_approved_title' => 'Ви не затверджені',
	'qa_not_approved_p' => 'Ваш обліковий запис все ще не схвалений адміністратором. Будь ласка, будьте терплячі та спробуйте зайти пізніше.',
	'qa_restore' => 'Відновити',
	'qa_permadel' => 'Видалити назавжди',
	'qa_administrator_can_create_other_users' => 'Адмін (може створювати користувачів)',
	'qa_simple_user' => 'Користувач',
	'qa_user_management' => 'Менеджер користувачів',
	'qa_projects' => 'Проекти',
	'qa_reports' => 'Звіти',
	'qa_project' => 'Проект',
	'qa_end_time' => 'Час закінчення',
	'qa_amount' => 'Ціна',
	'qa_monthly_report' => 'Місячний звіт',
	'qa_companies' => 'Компанії',
	'qa_company_name' => 'Назва компанії',
	'qa_address' => 'Адреса',
	'qa_website' => 'Веб-сайт',
	'qa_company' => 'Компанія',
	'qa_first_name' => 'Ім\'я',
	'qa_last_name' => 'Прізвище',
	'qa_phone' => 'Телефон',
	'qa_phone1' => 'Телефон 1',
	'qa_phone2' => 'Телефон 2',
	'qa_skype' => 'Скайп',
	'qa_photo' => 'Фото (макс. 8мб)',
	'qa_category_name' => 'Назва категорії',
	'qa_products' => 'Товари',
	'qa_product_name' => 'Назва товару',
	'qa_price' => 'Ціна',
	'qa_tags' => 'Теги',
	'qa_tag' => 'Тег',
	'qa_photo1' => 'Фото 1',
	'qa_photo2' => 'Фото 2',
	'qa_photo3' => 'Фото 3',
	'qa_calendar' => 'Календар',
	'qa_statuses' => 'Стутус',
	'qa_task_management' => 'Менеджер завдань',
	'qa_tasks' => 'Завдання',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Вкладення',
	'qa_text' => 'Текст',
	'qa_pages' => 'Сторінки',
	'qa_create_new_report' => 'Створити новий звіт',
	'qa_created_at' => 'Створено',
	'qa_updated_at' => 'Оновлено',
	'qa_deleted_at' => 'Видалено',
	'qa_upgrade_to_premium' => 'Оновити до Преміум',
	'qa_messages' => 'Повідомлення',
	'qa_you_have_no_messages' => 'У Вас немає повідомлень.',
	'qa_all_messages' => 'Всі повідомлення',
	'qa_new_message' => 'Нове повідомлення',
	'qa_outbox' => 'Відправлені',
	'qa_inbox' => 'Отримані',
	'qa_recipient' => 'Одержувач',
	'qa_subject' => 'Тема',
	'qa_message' => 'Повідомлення',
	'qa_send' => 'Відправити',
	'qa_reply' => 'Відповідь',
	'qa_client_management' => 'Управління клієнтами',
	'qa_client_management_settings' => 'Налаштування клієнта',
	'qa_country' => 'Країна',
	'qa_client_status' => 'Статус клієнта',
	'qa_clients' => 'Клієнти',
	'qa_client_statuses' => 'Статуси клієнтів',
	'qa_currencies' => 'Валюти',
	'qa_main_currency' => 'Основна валюта',
	'qa_documents' => 'Документи',
	'qa_file' => 'Файл',
	'qa_income_source' => 'Джерело доходу',
	'qa_income_sources' => 'Джерела доходів',
	'qa_fee_percent' => 'Комісійні відсотки',
	'qa_note_text' => 'Текст примітки',
	'qa_reset_password_woops' => '<strong>Оце ти видав!</strong> Є проблеми з введенням:',
	'qa_email_line1' => 'Ви отримуєте цей електронний лист, оскільки ми отримали запит на відновлення пароля для вашого облікового запису.',
	'qa_email_line2' => 'Якщо ви не надіслали запит на відновлення пароля, подальші Ваші дії не потрібні.',
	'qa_title' => 'Назва',
	'qa_roles' => 'Ролі',
	'qa_role' => 'Роль',
	'qa_user_actions' => 'Дії користувача',
	'qa_action_model' => 'Модель / Сутність Активності',
	'qa_action_id' => 'ID Активності',
	'qa_campaign' => 'Кампанія',
	'qa_campaigns' => 'Кампанії',
	'qa_description' => 'Опис',
	'qa_valid_from' => 'Діє з',
	'qa_valid_to' => 'Діє до',
	'qa_discount_amount' => 'Сума знижки',
	'qa_discount_percent' => 'Відсоток знижки',
	'qa_coupons_amount' => 'Суми купонів',
	'qa_redeem_time' => 'Час викупу',
	'qa_coupon_management' => 'Управління купонами',
	'qa_time_management' => 'Тайм менеджмент',
	'qa_time_entries' => 'Записи часу',
	'qa_work_type' => 'Тип роботи',
	'qa_work_types' => 'Види робіт',
	'qa_start_time' => 'Час початку',
	'qa_expense_category' => 'Категорія витрат',
	'qa_expense_categories' => 'Категорії витрат',
	'qa_expense_management' => 'Управління витратами',
	'qa_expenses' => 'Витрати',
	'qa_expense' => 'Витрата',
	'qa_entry_date' => 'Дата вводу',
	'qa_income_categories' => 'Категорії доходів',
	'qa_contact_management' => 'Управління контактами',
	'qa_contacts' => 'Контакты',
	'qa_product_management' => 'Управління товарами',
	'qa_due_date' => 'Термін сплати',
	'qa_assigned_to' => 'Присвоєно',
	'qa_assets' => 'Активи',
	'qa_asset' => 'Актив',
	'qa_serial_number' => 'Серійний номер',
	'qa_location' => 'Місцезнаходження',
	'qa_locations' => 'Місцезнаходження',
	'qa_assigned_user' => 'Призначено (користувач)',
	'qa_notes' => 'Примітки',
	'qa_assets_history' => 'Історія активів',
	'qa_assets_management' => 'Управління активами',
	'qa_slug' => 'URL (ЧПУ)',
	'qa_content_management' => 'Управління контентом',
	'qa_excerpt' => 'Експерт',
	'qa_featured_image' => 'Популярні зображення',
	'qa_axis' => 'Вісь',
	'qa_show' => 'Показати',
	'qa_group_by' => 'Групувати за',
	'qa_chart_type' => 'Тип діаграми',
	'qa_no_reports_yet' => 'Поки немає жодного звіту',
	'qa_integer_float_placeholder' => 'Будь ласка виберіть одне з числових полів',
	'qa_change_notifications_field_1_label' => 'Надсилати електронне сповіщення Користувачеві',
	'qa_change_notifications_field_2_label' => 'При вступі на CRUD',
	'qa_select_users_placeholder' => 'Будь ласка, виберіть одного з ваших користувачів',
	'qa_is_created' => 'створено',
	'qa_is_updated' => 'оновлено',
	'qa_is_deleted' => 'видалено',
	'qa_notifications' => 'Сповіщення',
	'qa_notify_user' => 'Сповістити користувача',
	'qa_when_crud' => 'Коли CRUD',
	'qa_create_new_notification' => 'Створити нове сповіщення',
	'qa_stripe_transactions' => 'Stripe Транзакції',
	'qa_calendar_sources' => 'Джерела календаря',
	'qa_new_calendar_source' => 'Створення нового джерела для календаря',
	'qa_crud_title' => 'Назва CRUD',
	'qa_crud_date_field' => 'Поле з типом \"дата\" CRUD',
	'qa_prefix' => 'Префікс',
	'qa_label_field' => 'Мітка поля',
	'qa_suffix' => 'Суфікс',
	'qa_no_calendar_sources' => 'Ще немає інформації для календаря.',
	'qa_crud_event_field' => 'Мітка поля події',
	'qa_create_new_calendar_source' => 'Створити нове джерело календаря',
	'qa_edit_calendar_source' => 'Редагувати джерело календаря',
	'qa_custom_controller_index' => 'Індивідуальний  контролер.',
	'qa_reports_x_axis_field' => 'Ось-Х - будь-ласка виберіть одне з полів дати/часу',
	'qa_reports_y_axis_field' => 'Ось-Y - будь-ласка виберіть одне з полів дати/часу',
	'qa_select_crud_placeholder' => 'Будь-ласка, виберіть один зі своїх CRUD',
	'qa_select_dt_placeholder' => 'Будь-ласка, виберіть одне з полів дати/часу',
	'qa_aggregate_function_use' => 'Яку агрегатну функцію використовувати?',
	'qa_x_axis_group_by' => 'Ось-Х групувати по',
	'qa_x_axis_field' => 'Поле Осі-Х (дата/час)',
	'qa_y_axis_field' => 'Поле осі-Y',
	'quickadmin_title' => 'hrgamification',
];