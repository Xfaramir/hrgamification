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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Waktu',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Assets history',		'created_at' => 'Waktu',		'fields' => [			'asset' => 'Asset',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',		],	],
		'stripe-transactions' => [		'title' => 'Stripe Transactions',		'created_at' => 'Waktu',		'fields' => [			'transaction-user' => 'Email',			'amount' => 'Amount',		],	],
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
	'qa_create' => 'Buat',
	'qa_save' => 'Simpan',
	'qa_edit' => 'Edit',
	'qa_view' => 'Lihat',
	'qa_update' => 'Update',
	'qa_list' => 'Daftar',
	'qa_no_entries_in_table' => 'Tidak ada data di tabel',
	'qa_custom_controller_index' => 'Controller index yang sesuai kebutuhan Anda.',
	'qa_logout' => 'Keluar',
	'qa_add_new' => 'Tambahkan yang baru',
	'qa_are_you_sure' => 'Anda yakin?',
	'qa_back_to_list' => 'Kembali ke daftar',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Hapus',
	'qa_delete_selected' => 'Hapus terpilih',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategori',
	'qa_sample_category' => 'Contoh Kategori',
	'qa_questions' => 'Pertanyaan',
	'qa_question' => 'Pertanyaan',
	'qa_answer' => 'Jawaban',
	'qa_sample_question' => 'Contoh Pertanyaan',
	'qa_sample_answer' => 'Contoh Jawaban',
	'qa_faq_management' => 'Manajemen  FAQ',
	'qa_administrator_can_create_other_users' => 'Administrator (bisa membuat account user lain)',
	'qa_simple_user' => 'Pengguna Biasa',
	'qa_title' => 'Judul',
	'qa_roles' => 'Peranan',
	'qa_role' => 'Peran',
	'qa_user_management' => 'Manajemen Pengguna',
	'qa_users' => 'Daftar Pengguna',
	'qa_user' => 'Pengguna',
	'qa_name' => 'Nama',
	'qa_email' => 'Email',
	'qa_password' => 'Kata Sandi',
	'qa_remember_token' => 'Token Pengingat',
	'qa_permissions' => 'Izin',
	'qa_user_actions' => 'Aksi Pengguna',
	'qa_action' => 'Aksi',
	'qa_action_model' => 'Model Aksi',
	'qa_action_id' => 'Id Aksi',
	'qa_time' => 'Waktu',
	'qa_campaign' => 'Kampanye',
	'qa_campaigns' => 'Daftar Kampanye',
	'qa_description' => 'Deskripsi',
	'qa_valid_from' => 'Berlaku dari',
	'qa_valid_to' => 'Berlaku sampai',
	'qa_discount_amount' => 'Jumlah Diskon',
	'qa_discount_percent' => 'Persentasi Diskon',
	'qa_coupons_amount' => 'Jumlah Kupon',
	'qa_coupons' => 'Jupon',
	'qa_code' => 'Kode',
	'qa_coupon_management' => 'manajemen Kupon',
	'qa_time_management' => 'Manajemen Waktu',
	'qa_projects' => 'Daftar Kegiatan',
	'qa_reports' => 'Laporan',
	'qa_time_entries' => 'Input Waktu',
	'qa_work_type' => 'Tipe Pekerjaan',
	'qa_work_types' => 'Tipe-tipe Pekerjaan',
	'qa_project' => 'Kegiatan',
	'qa_start_time' => 'Waktu Mulai',
	'qa_end_time' => 'Waktu Selesai',
	'qa_expense_category' => 'Kategori Pengeluaran',
	'qa_restore' => 'Mengembalikan',
	'qa_permadel' => 'Hapus Selamanya',
	'qa_all' => 'Semua',
	'qa_trash' => 'Sampah',
	'qa_redeem_time' => 'Tukarkan waktu',
	'qa_expense_categories' => 'Kategori Biaya',
	'qa_expense_management' => 'Manajemen biaya',
	'qa_expenses' => 'Beban',
	'qa_expense' => 'Biaya',
	'qa_entry_date' => 'Tanggal masuk',
	'qa_amount' => 'Jumlah',
	'qa_income_categories' => 'Kategori pendapatan',
	'qa_monthly_report' => 'Laporan bulanan',
	'qa_companies' => 'Perusahaan',
	'qa_company_name' => 'Nama Perusahaan',
	'qa_address' => 'Alamat',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Manajemen kontak',
	'qa_contacts' => 'Kontak',
	'qa_company' => 'Perusahaan',
	'qa_first_name' => 'Nama Depan',
	'qa_last_name' => 'Nama Belakang',
	'qa_phone' => 'Telepon',
	'qa_phone1' => 'Telepon 1',
	'qa_phone2' => 'Telepon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto',
	'qa_category_name' => 'Nama kategori',
	'qa_product_management' => 'Manajemen Produk',
	'qa_products' => 'Produk',
	'qa_product_name' => 'Nama Produk',
	'qa_price' => 'Harga',
	'qa_tags' => 'Tag',
	'qa_tag' => 'Menandai',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Kalendar',
	'qa_statuses' => 'Status',
	'qa_task_management' => 'Manajemen Tugas',
	'qa_tasks' => 'Tugas',
	'qa_status' => 'Status',
	'qa_attachment' => 'Lampiran',
	'qa_due_date' => 'Batas Tanggal  Terahir',
	'qa_assigned_to' => 'Ditugaskan untuk',
	'qa_assets' => 'Aktiva',
	'qa_asset' => 'Aset',
	'qa_serial_number' => 'Nomor seri',
	'qa_location' => 'Lokasi',
	'qa_locations' => 'Lokasi',
	'qa_assigned_user' => 'Ditugaskan (pengguna)',
	'qa_notes' => 'Catatan',
	'qa_assets_history' => 'History aset',
	'qa_assets_management' => 'Pengelolaan aset',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Manajemen konten',
	'qa_text' => 'Teks',
	'qa_excerpt' => 'Kutipan',
	'qa_featured_image' => 'Gambar unggulan',
	'qa_pages' => 'Halaman',
	'qa_show' => 'Tampil',
	'qa_chart_type' => 'Jenis bagan',
	'qa_create_new_report' => 'Buat laporan baru',
	'qa_no_reports_yet' => 'Belum ada laporan.',
	'qa_created_at' => 'Dibuat pada',
	'qa_updated_at' => 'Diperbarui pada',
	'qa_deleted_at' => 'Dihapus pada',
	'qa_reports_x_axis_field' => 'Sumbu X - pilih salah satu bidang tanggal / waktu',
	'qa_reports_y_axis_field' => 'Sumbu Y - pilih salah satu bidang nomor',
	'qa_select_crud_placeholder' => 'Silakan pilih salah satu CRUDs Anda',
	'qa_select_dt_placeholder' => 'Pilih salah satu field tanggal / waktu',
	'qa_aggregate_function_use' => 'Fungsi agregat untuk digunakan',
	'qa_integer_float_placeholder' => 'Silahkan pilih salah satu field integer / float',
	'qa_change_notifications_field_1_label' => 'Kirim pemberitahuan email ke User',
	'qa_change_notifications_field_2_label' => 'Saat masuk di CRUD',
	'qa_select_users_placeholder' => 'Silahkan pilih salah satu User anda',
	'qa_is_created' => 'dibuat',
	'qa_is_updated' => 'diperbarui',
	'qa_is_deleted' => 'dihapus',
	'qa_notifications' => 'Pemberitahuan',
	'qa_notify_user' => 'Beritahu Pengguna',
	'qa_when_crud' => 'Saat CRUD',
	'qa_create_new_notification' => 'Buat Pemberitahuan baru',
	'qa_stripe_transactions' => 'Transaksi Stripe',
	'qa_upgrade_to_premium' => 'Tingkatkan ke Premium',
	'qa_messages' => 'Pesan',
	'qa_you_have_no_messages' => 'Anda tidak memiliki pesan',
	'qa_all_messages' => 'Semua pesan',
	'qa_new_message' => 'Pesan baru',
	'qa_outbox' => 'Kotak keluar',
	'qa_inbox' => 'Kotak masuk',
	'qa_recipient' => 'Penerima',
	'qa_subject' => 'Subjek',
	'qa_message' => 'Pesan',
	'qa_send' => 'Kirim',
	'qa_reply' => 'Balas',
	'qa_import_data' => 'Import Data',
	'quickadmin_title' => 'hrgamification',
];