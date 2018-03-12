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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Zaman',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Assets history',		'created_at' => 'Zaman',		'fields' => [			'asset' => 'Asset',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',		],	],
		'stripe-transactions' => [		'title' => 'Stripe Transactions',		'created_at' => 'Zaman',		'fields' => [			'transaction-user' => 'Email',			'amount' => 'Amount',		],	],
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
	'qa_create' => 'Oluştur',
	'qa_save' => 'Kaydet',
	'qa_edit' => 'Düzenle',
	'qa_view' => 'Görüntüle',
	'qa_update' => 'Güncelle',
	'qa_list' => 'Listele',
	'qa_no_entries_in_table' => 'Tabloda kayıt bulunamadı',
	'qa_custom_controller_index' => 'Özel denetçi dizini.',
	'qa_logout' => 'Çıkış yap',
	'qa_add_new' => 'Yeni ekle',
	'qa_are_you_sure' => 'Emin misiniz?',
	'qa_back_to_list' => 'Listeye dön',
	'qa_dashboard' => 'Kontrol Paneli',
	'qa_delete' => 'Sil',
	'qa_delete_selected' => 'Seçileni Sil',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategoriler',
	'qa_sample_category' => 'Örnek Kategori',
	'qa_questions' => 'Sorular',
	'qa_question' => 'Soru',
	'qa_answer' => 'Cevap',
	'qa_sample_question' => 'Örnek Soru',
	'qa_sample_answer' => 'Örnek Cevap',
	'qa_faq_management' => 'SSS Yönetimi',
	'qa_administrator_can_create_other_users' => 'Yönetici (diğer kullnıcıları oluşturabilir)',
	'qa_simple_user' => 'Basit Kullanıcı',
	'qa_title' => 'Başlık',
	'qa_roles' => 'Roller',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Kullanıcı Yönetimi',
	'qa_users' => 'Kullanıcılar',
	'qa_user' => 'Kullanıcı',
	'qa_name' => 'Ad',
	'qa_email' => 'E-posta',
	'qa_password' => 'Şifre',
	'qa_remember_token' => 'Beni Hatırla',
	'qa_subject' => 'Konu',
	'qa_message' => 'Mesaj',
	'qa_send' => 'Gönder',
	'qa_reply' => 'Cevapla',
	'qa_calendar_sources' => 'Takvim kaynağı',
	'qa_new_calendar_source' => 'Yeni takvim kaynağı oluştur',
	'qa_crud_title' => 'Crud başlığı',
	'qa_crud_date_field' => 'Crud tarih alanı',
	'qa_prefix' => 'Önek',
	'qa_label_field' => 'Etiket alanı',
	'qa_suffix' => 'Sonek',
	'qa_no_calendar_sources' => 'Henüz takvim kaynağı oluşturulmadı',
	'qa_crud_event_field' => 'Olay etiket alanı',
	'qa_create_new_calendar_source' => 'Takvim Kaynağı Oluştur',
	'qa_edit_calendar_source' => 'Takvim Kaynağını Düzenle',
	'qa_client_management' => 'Müşteri yönetimi',
	'qa_client_management_settings' => 'Müşteri yönetim ayarları',
	'qa_country' => 'Ülke',
	'qa_client_status' => 'Müşteri Durumu',
	'qa_clients' => 'Müşteriler',
	'qa_client_statuses' => 'Müşteri durumları',
	'qa_currencies' => 'Kurlar',
	'qa_main_currency' => 'Ana kur',
	'qa_documents' => 'Döküman',
	'qa_file' => 'Dosya',
	'qa_income_source' => 'Gelir kaynağı',
	'qa_income_sources' => 'Gelir kaynakları',
	'qa_fee_percent' => 'Ücret oranı',
	'qa_note_text' => 'Not yazısı',
	'qa_client' => 'Müşteri',
	'qa_start_date' => 'Başlangıç Tarihi',
	'qa_budget' => 'Bütçe',
	'qa_project_status' => 'Proje durumu',
	'qa_project_statuses' => 'Proje durumları',
	'qa_transactions' => 'İşlemler',
	'qa_transaction_types' => 'İşlem Türleri',
	'qa_transaction_type' => 'İşlem türü',
	'qa_transaction_date' => 'İşlem tarihi',
	'qa_currency' => 'Kur',
	'qa_current_password' => 'Geçerli şifreniz',
	'qa_new_password' => 'Yeni şifre',
	'qa_password_confirm' => 'Yeni şifreyi onayla',
	'qa_dashboard_text' => 'Giriş Yaptınız!',
	'qa_forgot_password' => 'Şifrenizi mi unuttunuz?',
	'qa_remember_me' => 'Beni Hatırla',
	'qa_login' => 'Giriş',
	'qa_change_password' => 'Şifreyi değiştir',
	'qa_csv' => 'CSV',
	'qa_print' => 'Yazdır',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Kopyala',
	'qa_colvis' => 'Sütun görünürlüğü',
	'qa_pdf' => 'PDF',
	'qa_email_greet' => 'Merhaba',
	'qa_email_regards' => 'Saygılar',
	'qa_confirm_password' => 'Şifreyi onayla',
	'qa_if_you_are_having_trouble' => 'tıklamakta problem yaşıyorsanız',
	'qa_please_select' => 'Lütfen seçiniz',
	'qa_register' => 'Kaydol',
	'qa_registration' => 'Kayıt',
	'qa_not_approved_title' => 'Onaylandmadınız',
	'qa_not_approved_p' => 'Hesabınız yönetici tarafından henüz onaylanmadı. Lütfen daha sonra tekrar deneyiniz.',
	'qa_restore' => 'Geri yükle',
	'qa_permadel' => 'Tamamen Sil',
	'qa_all' => 'Hepsi',
	'qa_trash' => 'Çöp',
	'qa_permissions' => 'İzinler',
	'qa_user_actions' => 'Kullanıcı hareketleri',
	'qa_action' => 'Hareket',
	'qa_action_model' => 'Hareket Modeli',
	'qa_action_id' => 'Hareket id',
	'qa_time' => 'Zaman',
	'qa_campaign' => 'Şirket',
	'qa_campaigns' => 'Şirketler',
	'qa_description' => 'Açıklama',
	'qa_valid_from' => 'Zamanından itibaren',
	'qa_valid_to' => 'Zamanına kadar',
	'qa_discount_amount' => 'İndirim tutarı',
	'qa_discount_percent' => 'İndirim yüzdesi',
	'qa_coupons_amount' => 'Kupon tutarı',
	'qa_coupons' => 'Kuponlar',
	'qa_code' => 'Kod',
	'qa_redeem_time' => 'Ödeme zamanı',
	'qa_coupon_management' => 'Kupon yönetimi',
	'qa_time_management' => 'Tarih yönetimi',
	'qa_projects' => 'Projeler',
	'qa_reports' => 'Raporlar',
	'qa_time_entries' => 'Tarih girdileri',
	'qa_work_type' => 'Çalışma türü',
	'qa_work_types' => 'Çalışma türleri',
	'qa_project' => 'Proje',
	'qa_start_time' => 'Başlangıç zamanı',
	'qa_end_time' => 'Bitiş zamanı',
	'qa_expense_category' => 'Gider Kategorisi',
	'qa_expense_categories' => 'Gider Kategorileri',
	'qa_expense_management' => 'Gider Yönetimi',
	'qa_expenses' => 'Giderler',
	'qa_expense' => 'Gider',
	'qa_entry_date' => 'Giriş tarihi',
	'qa_amount' => 'Tutar',
	'qa_income_categories' => 'Gelir kategorileri',
	'qa_monthly_report' => 'Aylık rapor',
	'qa_companies' => 'Şirketler',
	'qa_company_name' => 'Şirket adı',
	'qa_address' => 'Adres',
	'qa_website' => 'Website',
	'qa_contact_management' => 'İletişim yönetimi',
	'qa_contacts' => 'İrtibatlar',
	'qa_company' => 'Şirket',
	'qa_first_name' => 'Ad',
	'qa_last_name' => 'Soyad',
	'qa_phone' => 'Telefon',
	'qa_phone1' => 'Telefon 1',
	'qa_phone2' => 'Telefon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Fotoğraf (max 8mb)',
	'qa_category_name' => 'Kategori adı',
	'qa_product_management' => 'Ürün yönetimi',
	'qa_products' => 'Ürünler',
	'qa_product_name' => 'Ürün adı',
	'qa_price' => 'Fiyat',
	'qa_tags' => 'Etiketler',
	'qa_tag' => 'Etiket',
	'qa_photo1' => 'Fotoğraf 1',
	'qa_photo2' => 'Fotoğraf 2',
	'qa_photo3' => 'Fotoğraf 3',
	'qa_calendar' => 'Takvim',
	'qa_statuses' => 'Durumlar',
	'qa_task_management' => 'Görev Yönetimi',
	'qa_tasks' => 'Görevler',
	'qa_status' => 'Durum',
	'qa_attachment' => 'Ek',
	'qa_due_date' => 'Vade tarihi',
	'qa_assigned_to' => 'Atanmış',
	'qa_assets' => 'Varlıklar',
	'qa_asset' => 'Varlık',
	'qa_serial_number' => 'Seri numarası',
	'qa_location' => 'Yer',
	'qa_locations' => 'Yerler',
	'qa_assigned_user' => 'Atanmış (kullanıcı)',
	'qa_notes' => 'Notlar',
	'qa_assets_history' => 'Varlık geçmişi',
	'qa_assets_management' => 'Varlık yönetimi',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'İletişim yönetimi',
	'qa_text' => 'Yazı',
	'qa_excerpt' => 'Alıntı',
	'qa_featured_image' => 'Öne çıkan fotoğraf',
	'qa_pages' => 'Sayfalar',
	'qa_axis' => 'Aksis',
	'qa_show' => 'Göster',
	'qa_group_by' => 'Grupla',
	'qa_chart_type' => 'Çizelge türü',
	'qa_create_new_report' => 'Yeni rapor oluştur',
	'qa_no_reports_yet' => 'Henüz rapor yok.',
	'qa_created_at' => 'tarihinde oluşturuldu',
	'qa_updated_at' => 'tarihinde güncellendi',
	'qa_deleted_at' => 'tarihinde silindi',
	'qa_reports_x_axis_field' => 'X-aksis - lütfen tarih/zaman seçimi yapınız',
	'qa_reports_y_axis_field' => 'Y-aksis - lütfen tarih/zaman seçimi yapınız',
	'qa_select_crud_placeholder' => 'Lütfen CRUDlarınızdan birini seçiniz',
	'qa_select_dt_placeholder' => 'Lütfen tarih/zamandan birini seçiniz.',
	'qa_aggregate_function_use' => 'Kullanmak için fnoksiyonları toplayınız',
	'qa_x_axis_group_by' => 'X-aksisi grupla',
	'qa_x_axis_field' => 'X-aksis alanı (tarih/zaman)',
	'qa_y_axis_field' => 'Y-aksisi alanı',
	'qa_integer_float_placeholder' => 'Lütfen alanlardan birini seçiniz',
	'qa_change_notifications_field_1_label' => 'Kullanıcılara uyarı mesajı gönder',
	'qa_select_users_placeholder' => 'Lütfen kullanıcılarınızdan birini seçiniz',
	'qa_is_created' => 'oluşturuldu',
	'qa_is_updated' => 'güncellendi',
	'qa_is_deleted' => 'silindi',
	'qa_notifications' => 'Bildiriler',
	'qa_notify_user' => 'Kullanıcıya Bildir',
	'qa_create_new_notification' => 'Yeni bildiri oluştur',
	'qa_messages' => 'Mesajlar',
	'qa_you_have_no_messages' => 'Mesajınız yok',
	'qa_all_messages' => 'Tüm mesajlar',
	'qa_new_message' => 'Yeni Mesaj',
	'qa_outbox' => 'Giden kutusu',
	'qa_inbox' => 'Gelen kutusu',
	'qa_recipient' => 'Alıcı',
	'qa_reset_password' => 'Şifreyi yenile',
	'qa_reset_password_woops' => '<strong>Tüh!</strong> input: ile ilgili problemler var',
	'qa_email_line1' => 'Hesabınızla ilgili şifre yenileme talebi aldık. ',
	'qa_email_line2' => 'Şifre yenileme talebinden bulunmadıysanız bu mesajı görmezden geliniz.',
	'qa_copy_paste_url_bellow' => 'lütfen üstteki URLyi yeni bir sayfada açınız.',
	'qa_stripe_transactions' => 'Stripe Alışverişleri',
	'qa_upgrade_to_premium' => 'Premiuma Geçin',
	'qa_there_were_problems_with_input' => 'Girdide sorunlar var',
	'qa_whoops' => 'Tüh!',
	'qa_csvImport' => 'CSV Yükleme',
	'qa_csv_file_to_import' => 'Yüklenecek CSV dosyası',
	'quickadmin_title' => 'hrgamification',
];