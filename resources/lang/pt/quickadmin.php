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
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Tempo',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
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
		'assets-history' => [		'title' => 'Assets history',		'created_at' => 'Tempo',		'fields' => [			'asset' => 'Asset',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',		],	],
		'stripe-transactions' => [		'title' => 'Stripe Transactions',		'created_at' => 'Tempo',		'fields' => [			'transaction-user' => 'Email',			'amount' => 'Amount',		],	],
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
	'qa_create' => 'Criar',
	'qa_save' => 'Salvar',
	'qa_edit' => 'Editar',
	'qa_view' => 'Visualizar',
	'qa_update' => 'Atualizar',
	'qa_list' => 'Listar',
	'qa_no_entries_in_table' => 'Sem entradas na tabela',
	'qa_custom_controller_index' => 'Índice de Controller personalizado.',
	'qa_logout' => 'Sair',
	'qa_add_new' => 'Novo',
	'qa_are_you_sure' => 'Tem certeza?',
	'qa_back_to_list' => 'Voltar',
	'qa_dashboard' => 'Painel',
	'qa_delete' => 'Excluir',
	'qa_restore' => 'Restaurar',
	'qa_permadel' => 'Excluir',
	'qa_all' => 'Todos',
	'qa_trash' => 'Lixo',
	'qa_delete_selected' => 'Excluir Selecionados',
	'qa_category' => 'Categoria',
	'qa_categories' => 'Categorias',
	'qa_sample_category' => 'Categoria Exemplo',
	'qa_questions' => 'Questões',
	'qa_question' => 'Questão',
	'qa_answer' => 'Resposta',
	'qa_administrator_can_create_other_users' => 'Administrador',
	'qa_simple_user' => 'Usuário simples',
	'qa_title' => 'Título',
	'qa_roles' => 'Funções',
	'qa_role' => 'Função',
	'qa_name' => 'Nome',
	'qa_password' => 'Senha',
	'qa_remember_token' => 'Lembrar Senha',
	'qa_permissions' => 'Permissões',
	'qa_action' => 'Ação',
	'qa_forgot_password' => 'Esqueceu sua senha?',
	'qa_remember_me' => 'Lembrar-me',
	'qa_change_password' => 'Alterar senha',
	'qa_print' => 'Imprimir',
	'qa_copy' => 'Copiar',
	'qa_colvis' => 'Colunas Visíveis',
	'qa_reset_password' => 'Redefinir senha',
	'qa_email_greet' => 'Olá',
	'qa_confirm_password' => 'Confirmação da senha',
	'qa_please_select' => 'Selecione por favor',
	'qa_sample_question' => 'Questão Exemplo',
	'qa_sample_answer' => 'Resposta Exemplo',
	'qa_faq_management' => 'Gerenciamento de FAQ',
	'qa_user_management' => 'Gerenciamento de usuários',
	'qa_users' => 'Usuários',
	'qa_user' => 'Usuário',
	'qa_email' => 'E-mail',
	'qa_user_actions' => 'Ações do usuário',
	'qa_action_model' => 'Modelo de ação',
	'qa_action_id' => 'ID de ação',
	'qa_time' => 'Tempo',
	'qa_campaign' => 'Campanha',
	'qa_campaigns' => 'Campanhas',
	'qa_description' => 'Descrição',
	'qa_valid_from' => 'Válido de',
	'qa_valid_to' => 'Válido até',
	'qa_discount_amount' => 'Quantia de desconto',
	'qa_discount_percent' => 'Percentual de desconto',
	'qa_coupons_amount' => 'Quantia de cupons',
	'qa_coupons' => 'Cupons',
	'qa_code' => 'Código',
	'qa_redeem_time' => 'Tempo de resgate',
	'qa_coupon_management' => 'Gerenciamento de cupons',
	'qa_time_management' => 'Gerenciamento de tempo',
	'qa_projects' => 'Projetos',
	'qa_reports' => 'Relatórios',
	'qa_time_entries' => 'Entradas de tempo',
	'qa_work_type' => 'Tipo de trabalho',
	'qa_work_types' => 'Tipos de trabalho',
	'qa_project' => 'Projeto',
	'qa_start_time' => 'Tempo de início',
	'qa_end_time' => 'Tempo de final',
	'qa_expense_category' => 'Categoria de Despesa',
	'qa_expense_categories' => 'Categorias de Despesa',
	'qa_expense_management' => 'Gerenciamento de Despesa',
	'qa_expenses' => 'Despesas',
	'qa_expense' => 'Despesa',
	'qa_entry_date' => 'Data de entrada',
	'qa_amount' => 'Quantidade',
	'qa_income_categories' => 'Categorias de entrada',
	'qa_monthly_report' => 'Relatório mensal',
	'qa_companies' => 'Empresas',
	'qa_company_name' => 'Nome da empresa',
	'qa_address' => 'Endereço',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Gerenciamento de contato',
	'qa_contacts' => 'Contatos',
	'qa_company' => 'Empresa',
	'qa_first_name' => 'Primeiro nome',
	'qa_last_name' => 'Último nome',
	'qa_phone' => 'Telefone',
	'qa_phone1' => 'Telefone 1',
	'qa_phone2' => 'Telefone 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (máx. 8 MB)',
	'qa_category_name' => 'Nome da categoria',
	'qa_product_management' => 'Gerenciamento de produtos',
	'qa_products' => 'Produtos',
	'qa_product_name' => 'Nome do produto',
	'qa_price' => 'Preço',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Calendário',
	'qa_statuses' => 'Status',
	'qa_task_management' => 'Gerenciamento de tarefas',
	'qa_tasks' => 'Tarefas',
	'qa_status' => 'Status',
	'qa_attachment' => 'Anexo',
	'qa_due_date' => 'Data de vencimento',
	'qa_assigned_to' => 'Atribuído',
	'qa_assets' => 'Ativos',
	'qa_asset' => 'Ativo',
	'qa_serial_number' => 'Número de série',
	'qa_location' => 'Local',
	'qa_locations' => 'Locais',
	'qa_assigned_user' => 'Atribuído (usuário)',
	'qa_notes' => 'Notas',
	'qa_assets_history' => 'Histórico de ativos',
	'qa_assets_management' => 'Gerenciamento de ativos',
	'qa_content_management' => 'Gerenciamento de conteúdo',
	'qa_text' => 'Texto',
	'qa_pages' => 'Páginas',
	'qa_axis' => 'Eixo',
	'qa_show' => 'Exibir',
	'qa_group_by' => 'Agrupar por',
	'qa_chart_type' => 'Tipo de gráfico',
	'qa_create_new_report' => 'Criar novo relatório',
	'qa_no_reports_yet' => 'Nenhum relatório ainda.',
	'qa_created_at' => 'Criado em',
	'qa_updated_at' => 'Atualizado em',
	'qa_deleted_at' => 'Excluído em',
	'qa_reports_x_axis_field' => 'Eixo X - por favor escolha um dos campos de data/hora',
	'qa_reports_y_axis_field' => 'Eixo Y - por favor escolha um dos campos numéricos',
	'qa_select_crud_placeholder' => 'Por favor selecione um de seus CRUDs',
	'qa_select_dt_placeholder' => 'Por favor selecione um dos campos de data/hora',
	'qa_aggregate_function_use' => 'Agregar função a utilizar',
	'qa_x_axis_group_by' => 'Eixo X agrupar por',
	'qa_x_axis_field' => 'Campo do eixo X (data/hora)',
	'qa_y_axis_field' => 'Campo do eixo Y',
	'qa_integer_float_placeholder' => 'Por favor selecione um dos campos inteiros/float',
	'qa_change_notifications_field_1_label' => 'Enviar notificação por e-mail ao Usuário',
	'qa_select_users_placeholder' => 'Por favor selecione um de seus Usuários',
	'qa_is_created' => 'foi criado',
	'qa_is_updated' => 'foi atualizado',
	'qa_is_deleted' => 'foi excluído',
	'qa_notifications' => 'Notificações',
	'qa_notify_user' => 'Notificar Usuário',
	'qa_when_crud' => 'Quando CRUD',
	'qa_create_new_notification' => 'Criar nova Notificação',
	'qa_stripe_transactions' => 'Transações Stripe',
	'qa_upgrade_to_premium' => 'Atualizar para Premium',
	'qa_messages' => 'Mensagens',
	'qa_you_have_no_messages' => 'Você não possui nenhuma mensagem.',
	'qa_all_messages' => 'Todas as mensagens',
	'qa_new_message' => 'Nova mensagem',
	'qa_outbox' => 'Caixa de saída',
	'qa_inbox' => 'Caixa de entrada',
	'qa_recipient' => 'Destinatário',
	'qa_subject' => 'Assunto',
	'qa_message' => 'Mensagem',
	'qa_send' => 'Enviar',
	'qa_reply' => 'Responder',
	'qa_calendar_sources' => 'Fontes de calendário',
	'qa_new_calendar_source' => 'Criar nova fonte de calendário',
	'qa_crud_title' => 'Título do CRUD',
	'qa_crud_date_field' => 'Campo de data CRUD',
	'qa_prefix' => 'Prefixo',
	'qa_label_field' => 'Campo de rótulo',
	'qa_suffix' => 'Sufixo',
	'qa_no_calendar_sources' => 'Nenhuma fonte de calendário ainda.',
	'qa_crud_event_field' => 'Campo de rótulo do evento',
	'qa_create_new_calendar_source' => 'Criar nova Fonte de Calendário',
	'qa_edit_calendar_source' => 'Editar Fonte de Calendário',
	'qa_client_management' => 'Gerenciamento de clientes',
	'qa_client_management_settings' => 'Configurações de gerenciamento de clientes',
	'qa_country' => 'País',
	'qa_client_status' => 'Status do cliente',
	'qa_clients' => 'Clientes',
	'qa_client_statuses' => 'Status do cliente',
	'qa_currencies' => 'Moedas',
	'qa_main_currency' => 'Moeda principal',
	'qa_documents' => 'Documentos',
	'qa_file' => 'Arquivo',
	'qa_income_source' => 'Fonte de entrada',
	'qa_income_sources' => 'Fontes de entrada',
	'qa_fee_percent' => 'Percentual de taxa',
	'qa_note_text' => 'Texto da nota',
	'qa_client' => 'Cliente',
	'qa_start_date' => 'Data de início',
	'qa_budget' => 'Orçamento',
	'qa_project_status' => 'Status do projeto',
	'qa_project_statuses' => 'Status do projeto',
	'qa_transactions' => 'Transações',
	'qa_transaction_types' => 'Tipos de transação',
	'qa_transaction_type' => 'Tipo de transação',
	'qa_transaction_date' => 'Data da transação',
	'qa_currency' => 'Moeda',
	'qa_current_password' => 'Senha atual',
	'qa_new_password' => 'Nova senha',
	'qa_password_confirm' => 'Confirmação da nova senha',
	'qa_dashboard_text' => 'Você entrou!',
	'qa_login' => 'Entrar',
	'qa_reset_password_woops' => '<strong> Ops! </strong> Há problemas com a entrada:',
	'qa_email_line1' => 'Você está recebendo este e-mail porque nós recebemos uma solicitação de redefinição de senha para a sua conta.',
	'qa_email_line2' => 'Se você não solicitou redefinição de senha, nenhuma ação é necessária.',
	'qa_if_you_are_having_trouble' => 'Se você está tendo problemas para clicar no',
	'qa_copy_paste_url_bellow' => 'botão, copie e cole a URL abaixo no seu navegador web:',
	'qa_excerpt' => 'Resumo',
	'qa_featured_image' => 'Imagem em destaque',
	'qa_change_notifications_field_2_label' => 'Quando entrar no CRUD',
	'qa_email_regards' => 'Saudações',
	'qa_register' => 'Registrar',
	'qa_registration' => 'Registro',
	'qa_not_approved_title' => 'Você não está aprovado',
	'qa_not_approved_p' => 'Sua conta não foi liberada ainda pelo administrador, por favor, aguarde e tente mais tarde.',
	'qa_there_were_problems_with_input' => 'Há problemas com a entrada',
	'qa_whoops' => 'Ops!',
	'qa_slug' => 'Slug',
	'qa_csv' => 'CSV',
	'qa_excel' => 'Excel',
	'qa_pdf' => 'PDF',
	'qa_file_contains_header_row' => 'O arquivo contém cabeçalho?',
	'qa_csvImport' => 'Importação CSV',
	'qa_csv_file_to_import' => 'Arquivo CSV para importar',
	'qa_parse_csv' => 'Analisar CSV',
	'qa_import_data' => 'Importar data',
	'qa_imported_rows_to_table' => 'Importado :rows linhas para tabela :table',
	'quickadmin_title' => 'hrgamification',
];