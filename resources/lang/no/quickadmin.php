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
	'qa_file_contains_header_row' => 'Inneholder fila overskrift rad?',
	'qa_csvImport' => 'CSV import',
	'qa_csv_file_to_import' => 'CSV fil til importering',
	'qa_parse_csv' => 'Analyser CSV',
	'qa_import_data' => 'Importer data',
	'qa_imported_rows_to_table' => 'Importerte :rows reader til :table tabellen',
	'qa_create' => 'Ny',
	'qa_save' => 'Lagre',
	'qa_edit' => 'Rediger',
	'qa_restore' => 'Hent tilbake',
	'qa_permadel' => 'Slett permanent',
	'qa_all' => 'Alle',
	'qa_trash' => 'Søppel',
	'qa_view' => 'Vis',
	'qa_update' => 'Oppdater',
	'qa_list' => 'Liste',
	'qa_no_entries_in_table' => 'Ingen elemeter i listen.',
	'qa_custom_controller_index' => 'Egendefinert kontroller index.',
	'qa_logout' => 'Logg ut',
	'qa_add_new' => 'Legg til ny',
	'qa_are_you_sure' => 'Er du sikker?',
	'qa_back_to_list' => 'Tilbake til listen',
	'qa_dashboard' => 'Dashbord',
	'qa_delete' => 'Slett',
	'qa_delete_selected' => 'Slett valgte',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategorier',
	'qa_sample_category' => 'Eksempel kategori',
	'qa_questions' => 'Spørsmål',
	'qa_question' => 'Spørsmål',
	'qa_answer' => 'Svar',
	'qa_sample_question' => 'Eksempel spørsmål',
	'qa_sample_answer' => 'Eksempel svar',
	'qa_faq_management' => 'FAQ håndtering',
	'qa_administrator_can_create_other_users' => 'Administrator (kan opprette andre brukere)',
	'qa_simple_user' => 'Enkel bruker',
	'qa_title' => 'Tittel',
	'qa_roles' => 'Roller',
	'qa_role' => 'Rolle',
	'qa_user_management' => 'Bruker håndtering',
	'qa_users' => 'Brukere',
	'qa_user' => 'Bruker',
	'qa_name' => 'Navn',
	'qa_email' => 'Epost',
	'qa_password' => 'Passord',
	'qa_remember_token' => 'Husk-meg',
	'qa_permissions' => 'Rettigheter',
	'qa_user_actions' => 'Bruker aksjoner',
	'qa_action' => 'Aksjon',
	'qa_action_model' => 'Aksjons modell',
	'qa_action_id' => 'Aksjon id',
	'qa_time' => 'Tid',
	'qa_campaign' => 'Kampanje',
	'qa_campaigns' => 'Kampanjer',
	'qa_description' => 'Beskrivelse',
	'qa_valid_from' => 'Gyldig fra',
	'qa_valid_to' => 'Gyldig til',
	'qa_discount_amount' => 'Avslagsbeløp',
	'qa_discount_percent' => 'Avslag i prosent',
	'qa_coupons_amount' => 'Kupong beløp',
	'qa_coupons' => 'Kuponger',
	'qa_code' => 'Kode',
	'qa_redeem_time' => 'Innløsningstid',
	'qa_coupon_management' => 'Kuponghåndtering',
	'qa_time_management' => 'Tidshåndtering',
	'qa_projects' => 'Prosjekter',
	'qa_reports' => 'Rapporter',
	'qa_time_entries' => 'Tidsoppføringer',
	'qa_work_type' => 'Arbeidstype',
	'qa_work_types' => 'Arbeidstyper',
	'qa_project' => 'Prosjekt',
	'qa_start_time' => 'Start tid',
	'qa_end_time' => 'Slutt tid',
	'qa_expense_category' => 'Utgiftskategori',
	'qa_expense_categories' => 'Utgiftskategorier',
	'qa_expense_management' => 'Utgiftshåndtering',
	'qa_expenses' => 'Utgifter',
	'qa_expense' => 'Utgift',
	'qa_entry_date' => 'Loggføringsdato',
	'qa_amount' => 'Beløp',
	'qa_income_categories' => 'Inntektskategorier',
	'qa_monthly_report' => 'Månedsrapport',
	'qa_companies' => 'Firmaer',
	'qa_company_name' => 'Firma navn',
	'qa_address' => 'Adresse',
	'qa_website' => 'Webside',
	'qa_contact_management' => 'Kontakt håndering',
	'qa_contacts' => 'Kontakter',
	'qa_company' => 'Firma',
	'qa_first_name' => 'Fornavn',
	'qa_last_name' => 'Etternavn',
	'qa_phone' => 'Telefon',
	'qa_phone1' => 'Telefon 1',
	'qa_phone2' => 'Telefon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Bilde (max 8mb)',
	'qa_category_name' => 'Kategorinavn',
	'qa_product_management' => 'Produkt håndtering',
	'qa_products' => 'Produkter',
	'qa_product_name' => 'Produktnavn',
	'qa_price' => 'Pris',
	'qa_tags' => 'Stikkord',
	'qa_tag' => 'Stikkord',
	'qa_photo1' => 'Bilde 1',
	'qa_photo2' => 'Bilde 2',
	'qa_photo3' => 'Bilde 3',
	'qa_calendar' => 'Kalender',
	'qa_statuses' => 'Statuser',
	'qa_task_management' => 'Oppgave håndtering',
	'qa_tasks' => 'Oppgaver',
	'qa_status' => 'Status',
	'qa_attachment' => 'Vedlegg',
	'qa_due_date' => 'Tidsfrist',
	'qa_assigned_to' => 'Tildelt til',
	'qa_assets' => 'Ressurser',
	'qa_asset' => 'Ressurs',
	'qa_serial_number' => 'Serienummer',
	'qa_location' => 'Lokasjon',
	'qa_locations' => 'Lokasjoner',
	'qa_assigned_user' => 'Tildelt (bruker)',
	'qa_notes' => 'Notater',
	'qa_assets_history' => 'Ressurs historikk',
	'qa_assets_management' => 'Ressurs håndering',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Innholds håndtering',
	'qa_text' => 'Tekst',
	'qa_excerpt' => 'Utdrag',
	'qa_featured_image' => 'Hoved bilde',
	'qa_pages' => 'Sider',
	'qa_axis' => 'Akser',
	'qa_show' => 'Vis',
	'qa_group_by' => 'Gruppert på',
	'qa_chart_type' => 'Graftype',
	'qa_create_new_report' => 'Lag ny rapport',
	'qa_no_reports_yet' => 'Ingen rapporter sålangt.',
	'qa_created_at' => 'Laget den',
	'qa_updated_at' => 'Oppdatert den',
	'qa_deleted_at' => 'Slettet den',
	'qa_reports_x_axis_field' => 'X-akse - vennligst velg en av dato/tid feltene',
	'qa_reports_y_axis_field' => 'Y-akse - vennligst velg en av nummerfeltene',
	'qa_select_crud_placeholder' => 'Vennligst velg en av dine CRUDs',
	'qa_select_dt_placeholder' => 'Vennligst velg en av dato/tid feltene',
	'qa_aggregate_function_use' => 'Aggregeringsfunksjon som skal brukes',
	'qa_x_axis_group_by' => 'X-akse grupper etter',
	'qa_x_axis_field' => 'X-akse felt (dato/tid)',
	'qa_y_axis_field' => 'Y-akse felt',
	'qa_integer_float_placeholder' => 'Vennligst velt en av heltall/flyttall feltene',
	'qa_change_notifications_field_1_label' => 'Send en epost beskjed til bruker',
	'qa_change_notifications_field_2_label' => 'Når innlegging av CRUD',
	'qa_select_users_placeholder' => 'Vennligst velg en av dine brukere',
	'qa_is_created' => 'er laget',
	'qa_is_updated' => 'er oppdatert',
	'qa_is_deleted' => 'er slettet',
	'qa_notifications' => 'Varsler',
	'qa_notify_user' => 'Varsle bruker',
	'qa_when_crud' => 'Når CRUD',
	'qa_create_new_notification' => 'Lag ett nytt varsel',
	'qa_stripe_transactions' => 'Stripe transaksjon',
	'qa_upgrade_to_premium' => 'Oppgrader til Premium',
	'qa_messages' => 'Melding',
	'qa_you_have_no_messages' => 'Du har ingen meldinger.',
	'qa_all_messages' => 'Alle meldinger',
	'qa_new_message' => 'Ny melding',
	'qa_outbox' => 'Utboks',
	'qa_inbox' => 'Innboks',
	'qa_recipient' => 'Mottager',
	'qa_subject' => 'Emne',
	'qa_message' => 'Melding',
	'qa_send' => 'Send',
	'qa_reply' => 'Svar',
	'qa_calendar_sources' => 'Kalender kilder',
	'qa_new_calendar_source' => 'Lag en ny kalender kilde',
	'qa_crud_title' => 'Crud tittel',
	'qa_crud_date_field' => 'Crud dato felt',
	'qa_prefix' => 'Prefiks',
	'qa_label_field' => 'Etikettfelt',
	'qa_suffix' => 'Suffiks',
	'qa_no_calendar_sources' => 'Ingen kalender kilder enda.',
	'qa_crud_event_field' => 'Hendelse etikettfelt',
	'qa_create_new_calendar_source' => 'Lag en ny kalender kilde',
	'qa_edit_calendar_source' => 'Rediger kalender kilder',
	'qa_client_management' => 'Klient håndtering',
	'qa_client_management_settings' => 'Innstillinger klient håndtering',
	'qa_country' => 'Land',
	'qa_client_status' => 'Klient status',
	'qa_clients' => 'Klienter',
	'qa_client_statuses' => 'Klient statuser',
	'qa_currencies' => 'Valutaer',
	'qa_main_currency' => 'Hoved valuta',
	'qa_documents' => 'Dokumenter',
	'qa_file' => 'Fil',
	'qa_income_source' => 'Inntektskilde',
	'qa_income_sources' => 'Inntektskilder',
	'qa_fee_percent' => 'Avgift i prosent',
	'qa_note_text' => 'Notat tekst',
	'qa_client' => 'Klient',
	'qa_start_date' => 'Start dato',
	'qa_budget' => 'Budsjett',
	'qa_project_status' => 'Prosjekt status',
	'qa_project_statuses' => 'Prosjekt statuser',
	'qa_transactions' => 'Transaksjoner',
	'qa_transaction_types' => 'Transaksjonstyper',
	'qa_transaction_type' => 'Transaksjonstype',
	'qa_transaction_date' => 'Transaksjonsdato',
	'qa_currency' => 'Valuta',
	'qa_current_password' => 'Gjeldende passord',
	'qa_new_password' => 'Nytt passord',
	'qa_password_confirm' => 'Nytt passord bekreftelse',
	'qa_dashboard_text' => 'Du er nå logget inn!',
	'qa_forgot_password' => 'Glemt ditt passord?',
	'qa_remember_me' => 'Husk meg',
	'qa_login' => 'Logg inn',
	'qa_change_password' => 'Endre passord',
	'qa_csv' => 'CSV',
	'qa_print' => 'Skriv ut',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Kopier',
	'qa_colvis' => 'Kolonne visning',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Tilbakestill passord',
	'qa_reset_password_woops' => '<strong>Oisann!</strong> Det ble problemer med inndata:',
	'qa_email_line1' => 'Du mottar denne eposten fordi vi har mottat ett ønske om å tilbakestille passordet på din konto.',
	'qa_email_line2' => 'Hvis du ikke forespurte om dette, så trenger du ikke gjøre noe.',
	'qa_email_greet' => 'Hallo',
	'qa_confirm_password' => 'Bekreft passordet',
	'qa_email_regards' => 'Hilsen',
	'qa_if_you_are_having_trouble' => 'Hvis du har problemer med å trykke på',
	'qa_copy_paste_url_bellow' => 'knapp, kopier og lim inn URLen under inn i din nettleser.',
	'qa_please_select' => 'Vennligst velg',
	'qa_register' => 'Registrer',
	'qa_registration' => 'Registrering',
	'qa_not_approved_title' => 'Du er ikke godkjent',
	'qa_not_approved_p' => 'Kontoen din er fortsatt ikke godkjent av administrator. Vennligst prøv igjen senere.',
	'qa_there_were_problems_with_input' => 'De oppsto problemer med inn-data',
	'qa_whoops' => 'Oups!',
	'quickadmin_title' => 'hrgamification',
];