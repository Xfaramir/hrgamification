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
	'qa_create' => 'Créer',
	'qa_save' => 'Sauver',
	'qa_edit' => 'Modifier',
	'qa_restore' => 'Restaurer',
	'qa_permadel' => 'Supprimer définitivement',
	'qa_all' => 'Tous',
	'qa_trash' => 'Poubelle',
	'qa_view' => 'Voir',
	'qa_update' => 'Mettre à jour',
	'qa_list' => 'Lister',
	'qa_logout' => 'Déconnexion',
	'qa_add_new' => 'Nouveau',
	'qa_are_you_sure' => 'Êtes-vous certain ?',
	'qa_back_to_list' => 'Retour à la liste',
	'qa_dashboard' => 'Tableau de bord',
	'qa_delete' => 'Supprimer',
	'qa_delete_selected' => 'Supprimer sélectionnés',
	'qa_category' => 'Catégorie',
	'qa_categories' => 'Catégories',
	'qa_please_select' => 'Sélectionner',
	'qa_crud_event_field' => 'Champ de l\'étiquette d\'événement',
	'qa_create_new_calendar_source' => 'Créer une nouvelle source de calendrier',
	'qa_edit_calendar_source' => 'Modifier la source du calendrier',
	'qa_client_management' => 'Gestion des clients',
	'qa_client_management_settings' => 'Paramètres de gestion du client',
	'qa_country' => 'Pays',
	'qa_client_status' => 'Statut du client',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Statut des clients',
	'qa_currencies' => 'Devises',
	'qa_main_currency' => 'Monnaie principale',
	'qa_documents' => 'Documents',
	'qa_file' => 'Fichier',
	'qa_income_source' => 'Source de revenu',
	'qa_income_sources' => 'Sources de revenu',
	'qa_fee_percent' => 'Pourcentage de frais',
	'qa_note_text' => 'Texte de note',
	'qa_client' => 'Client',
	'qa_start_date' => 'Date de début',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'L\'état du projet',
	'qa_project_statuses' => 'Statut du projet',
	'qa_transactions' => 'Transaction',
	'qa_transaction_types' => 'Type de transaction',
	'qa_transaction_type' => 'Type de transaction',
	'qa_transaction_date' => 'Date de la transaction',
	'qa_currency' => 'Devise',
	'qa_current_password' => 'Mot de passe actuel',
	'qa_new_password' => 'Nouveau mot de passe',
	'qa_password_confirm' => 'Confirmation du nouveau mot de passe',
	'qa_dashboard_text' => 'Vous êtes authentifié!',
	'qa_forgot_password' => 'Mot de passe oublié?',
	'qa_remember_me' => 'Se souvenir de moi',
	'qa_login' => 'S\'identifier',
	'qa_change_password' => 'Changer le mot de passe',
	'qa_print' => 'Imprimer',
	'qa_copy' => 'Copier',
	'qa_colvis' => 'Visibilité de la colonne',
	'qa_reset_password' => 'Réinitialiser le mot de passe',
	'qa_reset_password_woops' => '<strong>Whoops!</strong> Il y avait des problèmes d\'entrée:',
	'qa_email_line1' => 'Vous recevez ce courrier électronique parce que nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.',
	'qa_email_line2' => 'Si vous n\'avez pas demandé de réinitialisation d\'un mot de passe, aucune autre action n\'est requise.',
	'qa_email_greet' => 'Bonjour',
	'qa_email_regards' => 'Cordialement',
	'qa_confirm_password' => 'Confirmez le mot de passe',
	'qa_if_you_are_having_trouble' => 'Si vous rencontrez des problèmes, cliquez sur',
	'qa_copy_paste_url_bellow' => 'bouton, copiez et collez l\'URL ci-dessous dans votre navigateur Web:',
	'qa_register' => 'S\'inscrire',
	'qa_registration' => 'Enregistrement',
	'qa_not_approved_title' => 'Vous n\'êtes pas approuvé',
	'qa_not_approved_p' => 'Votre compte n\'est toujours pas approuvé par l\'administrateur. Veuillez patienter et réessayer plus tard.',
	'qa_questions' => 'Des questions',
	'qa_question' => 'Question',
	'qa_answer' => 'Réponse',
	'qa_sample_question' => 'Exemple de question',
	'qa_sample_answer' => 'Exemple de réponse',
	'qa_password' => 'Mot de passe',
	'qa_remember_token' => 'Se souvenir du jeton',
	'qa_permissions' => 'Autorisations',
	'qa_user_actions' => 'Actions de l\'utilisateur',
	'qa_action' => 'Action',
	'qa_time' => 'Heure',
	'qa_description' => 'Déscription',
	'qa_valid_from' => 'Validation à partir de ',
	'qa_discount_amount' => 'Montant de l\'abonnement',
	'qa_discount_percent' => '% De réduction',
	'qa_coupons_amount' => 'Montant des coupons',
	'qa_coupons' => 'Coupons',
	'qa_redeem_time' => 'Échangez le temps',
	'qa_coupon_management' => 'Gestion des coupons',
	'qa_time_management' => 'Gestion du temps',
	'qa_projects' => 'Projet',
	'qa_reports' => 'Rapports',
	'qa_time_entries' => 'Entrées de l\'heure',
	'qa_work_type' => 'Type de travail',
	'qa_work_types' => 'Types de travail',
	'qa_project' => 'Projet',
	'qa_start_time' => 'Heure de début',
	'qa_end_time' => 'Heure de fin',
	'qa_expense_category' => 'Catégorie de dépenses',
	'qa_expense_categories' => 'Catégories de dépenses',
	'qa_expense_management' => 'Gestion des dépenses',
	'qa_expenses' => 'Dépenses',
	'qa_expense' => 'Dépense',
	'qa_entry_date' => 'Date d\'entrée',
	'qa_amount' => 'Montant',
	'qa_income_categories' => 'Catégories de revenu',
	'qa_monthly_report' => 'Rapport mensuel',
	'qa_companies' => 'Organisme',
	'qa_company_name' => 'Nom de l\'organisme',
	'qa_address' => 'Addresse',
	'qa_website' => 'Site web',
	'qa_contact_management' => 'Gestion des contacts',
	'qa_contacts' => 'Contacts',
	'qa_company' => 'Organisme',
	'qa_first_name' => 'Prénom',
	'qa_last_name' => 'Nom',
	'qa_phone' => 'Téléphone',
	'qa_category_name' => 'Nom de la catégorie',
	'qa_product_management' => 'Gestion des produits',
	'qa_products' => 'Produits',
	'qa_product_name' => 'Désignation du produit',
	'qa_price' => 'Prix',
	'qa_calendar' => 'Calendrier',
	'qa_statuses' => 'Statut',
	'qa_task_management' => 'Gestion des tâches',
	'qa_tasks' => 'Tâches',
	'qa_status' => 'Statut',
	'qa_attachment' => 'Document joint',
	'qa_due_date' => 'Date d\'échéance',
	'qa_assigned_to' => 'Assigné à',
	'qa_assets' => 'Les atouts',
	'qa_asset' => 'Atout',
	'qa_serial_number' => 'Numéro de série',
	'qa_assigned_user' => 'Affecté (utilisateur)',
	'qa_assets_history' => 'Historique des actifs',
	'qa_assets_management' => 'Gestion d\'actifs',
	'qa_slug' => 'Limace',
	'qa_content_management' => 'Gestion de contenu',
	'qa_text' => 'Texte',
	'qa_excerpt' => 'Extrait',
	'qa_featured_image' => 'L\'image sélectionnée',
	'qa_axis' => 'Axe',
	'qa_show' => 'Afficher',
	'qa_group_by' => 'Grouper par',
	'qa_chart_type' => 'Type de graphique',
	'qa_create_new_report' => 'Créer un nouveau rapport',
	'qa_select_dt_placeholder' => 'Sélectionnez un des champs date / heure',
	'qa_aggregate_function_use' => 'Fonction agrégée à utiliser',
	'qa_change_notifications_field_1_label' => 'Envoyer une notification par courrier électronique à l\'utilisateur',
	'qa_select_users_placeholder' => 'Sélectionnez un de vos Utilisateurs',
	'qa_is_created' => 'est créé',
	'qa_is_updated' => 'est mis à jour',
	'qa_is_deleted' => 'est supprimé',
	'qa_notifications' => 'Notifications',
	'qa_notify_user' => 'Notifier l\'utilisateur',
	'qa_create_new_notification' => 'Créer une nouvelle notification',
	'qa_stripe_transactions' => 'Transactions de rayures',
	'qa_upgrade_to_premium' => 'Passer à la version premium',
	'qa_messages' => 'Messages',
	'qa_you_have_no_messages' => 'Vous n\'avez pas de messages.',
	'qa_all_messages' => 'Tous les messages',
	'qa_new_message' => 'Nouveau message',
	'qa_outbox' => 'Boîte d\'envoi',
	'qa_inbox' => 'Boîte de réception',
	'qa_recipient' => 'destinataire',
	'qa_message' => 'Message',
	'qa_send' => 'Envoyer',
	'qa_reply' => 'Répondre',
	'qa_calendar_sources' => 'Sources de calendrier',
	'qa_new_calendar_source' => 'Créer une nouvelle source de calendrier',
	'qa_crud_title' => 'Titre de Crud',
	'qa_crud_date_field' => 'Champ de dates de Crud',
	'qa_prefix' => 'Préfixe',
	'qa_label_field' => 'Champ d\'étiquette',
	'qa_suffix' => 'Sufix',
	'qa_no_calendar_sources' => 'Il n\'y a pas encore de sources de calendrier.',
	'qa_no_entries_in_table' => 'Table vide',
	'qa_faq_management' => 'Gestion des questions',
	'qa_administrator_can_create_other_users' => 'Administrateur',
	'qa_simple_user' => 'Utilisateur',
	'qa_title' => 'Titre',
	'qa_roles' => 'Rôles',
	'qa_role' => 'Rôle',
	'qa_user_management' => 'Gestion des Utilisateurs',
	'qa_users' => 'Utilisateurs',
	'qa_user' => 'Utilisateur',
	'qa_name' => 'Nom',
	'qa_email' => 'eMail',
	'qa_valid_to' => 'Valide jusqua',
	'qa_phone1' => 'Téléphone 1',
	'qa_tags' => 'Mots clefs',
	'qa_tag' => 'Mot clef',
	'qa_when_crud' => 'Sur modification',
	'qa_phone2' => 'Téléphone 2',
	'quickadmin_title' => 'hrgamification',
];