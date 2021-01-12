<?php
return [
    'tooltips' => true,
    'theme' => env('APP_THEME'),
    'app' => env('APP_NAME'),
    'sidenav' => [
        'primary' => [
            [
                'show' => env('SIDEBAR_SHOW_MENU_WORKSPACE', true),
                'icon' => 'Workspace',
                'label' => 'Dashboard',
                'guard' => null,
                'type' => 'uri',
                'route' => 'admin',
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_ADD', true),
                'icon' => 'Add',
                'label' => 'Ajout rapide',
                'guard' => 'create account',
                'type' => 'panel',
                'id' => 'add'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_SEARCH', false),
                'icon' => 'Search',
                'label' => 'Recherche',
                'guard' => 'admin',
                'type' => 'panel',
                'id' => 'search'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_MEDIA', false),
                'icon' => 'Image',
                'label' => 'Medias',
                'guard' => 'media',
                'type' => 'uri',
                'route' => 'brain.media.medias.index',
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_CRM', false),
                'icon' => 'Events',
                'label' => 'CRM',
                'guard' => 'crm',
                'type' => 'panel',
                'id' => 'crm'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_CATALOG', false),
                'icon' => 'Catalog',
                'label' => 'Catalogue',
                'guard' => 'catalog',
                'type' => 'panel',
                'id' => 'catalog'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_SALE', false),
                'icon' => 'InventoryManagement',
                'label' => 'Vente',
                'guard' => 'sale',
                'type' => 'panel',
                'id' => 'sale'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_BLOG', false),
                'icon' => 'Blog',
                'label' => 'Blog',
                'guard' => 'blog',
                'type' => 'panel',
                'id' => 'blog'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_RESOURCES', false),
                'icon' => 'Help',
                'label' => 'Ressources',
                'guard' => 'resources',
                'type' => 'panel',
                'id' => 'resources'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_HELP', false),
                'icon' => 'Help',
                'label' => 'Assistance',
                'guard' => 'help',
                'type' => 'panel',
                'id' => 'help'
            ],
        ],
        'secondary' => [
            [
                'show' => env('SIDEBAR_SHOW_MENU_ADMIN', true),
                'icon' => 'ShareKnowledge',
                'label' => 'Admin',
                'guard' => 'list accounts',
                'type' => 'panel',
                'id' => 'admin'
            ],
            [
                'show' => env('SIDEBAR_SHOW_MENU_PROFILE', true),
                'icon' => 'User',
                'label' => 'Profil',
                'guard' => null,
                'type' => 'panel',
                'id' => 'me'
            ],
//            [
//                'show' => env('SIDEBAR_SHOW_MENU_SETTINGS', false),
//                'icon' => 'Settings',
//                'label' => 'Réglages',
//                'guard' => 'admin',
//                'route' => '',
//                'id' => ''
//            ],
        ]
    ],
    'panels' => [
        'add' => [
            'label' => 'Ajouter',
            'items' => [
                [
                    'icon' => 'User',
                    'label' => 'Utilisateur',
                    'guard' => 'create user',
                    'type' => 'uri',
                    'route' => 'register',
                    'id' => ''
                ],
                [
                    'icon' => 'Enterprise',
                    'label' => 'Compte',
                    'guard' => 'create account',
                    'type' => 'uri',
                    'route' => 'brain.admin.accounts.create',
                    'id' => ''
                ],
                [
                    'icon' => 'InventoryManagement',
                    'label' => 'Opportunité',
                    'guard' => 'crm',
                    'type' => 'modal',
                    'shortcuts' => [
                        'primary' => 'Alt',
                        'keyCode' => 'KeyO'
                    ],
                    'modalTitle' => 'Créer une nouvelle opportunité',
                    'form' => 'LeadForm',
                    'route' => 'brain.crm.leads.create',
                    'id' => ''
                ],
                [
                    'icon' => 'UserIdentification',
                    'label' => 'Contact',
                    'guard' => 'crm',
                    'type' => 'modal',
                    'shortcuts' => [
                        'primary' => 'Alt',
                        'keyCode' => 'KeyC'
                    ],
                    'modalTitle' => 'Créer un nouveau contact',
                    'form' => 'ContactForm',
                    'route' => 'brain.crm.contacts.create',
                    'id' => ''
                ],
                [
                    'icon' => 'Enterprise',
                    'label' => 'Entreprise',
                    'guard' => 'crm',
                    'type' => 'modal',
                    'shortcuts' => [
                        'primary' => 'Alt',
                        'keyCode' => 'KeyE'
                    ],
                    'modalTitle' => 'Créer une nouvelle entreprise',
                    'form' => 'CompanyForm',
                    'route' => 'brain.crm.companies.create',
                    'id' => ''
                ],
                [
                    'icon' => 'RequestQuote',
                    'label' => 'Devis',
                    'guard' => 'sale',
                    'type' => 'modal',
                    'shortcuts' => [
                        'primary' => 'Alt',
                        'keyCode' => 'KeyD'
                    ],
                    'modalTitle' => 'Créer un nouveau devis',
                    'form' => 'QuotationForm',
                    'route' => 'brain.sale.quotations.create',
                    'id' => ''
                ],
            ],
        ],
        'admin' => [
            'label' => 'Admin',
            'items' => [
                [
                    'label' => 'Comptes',
                    'guard' => 'permission:list accounts',
                    'type' => 'uri',
                    'route' => 'brain.admin.accounts.index',
                    'id' => ''
                ],
                [
                    'label' => 'Utilisateurs',
                    'guard' => 'permission:list users',
                    'type' => 'uri',
                    'route' => 'brain.admin.users.index',
                    'id' => ''
                ],
                [
                    'label' => 'Rôles',
                    'guard' => 'access',
                    'type' => 'uri',
                    'route' => 'brain.access.roles.index',
                    'id' => ''
                ],
                [
                    'label' => 'Permissions',
                    'guard' => 'access',
                    'type' => 'uri',
                    'route' => 'brain.access.permissions.index',
                    'id' => ''
                ],
            ],
        ],
        'crm' => [
            'label' => 'CRM',
            'items' => [
                [
                    'icon' => 'InventoryManagement',
                    'label' => 'Opportunités',
                    'guard' => 'crm',
                    'type' => 'uri',
                    'route' => 'brain.crm.leads.index',
                    'id' => ''
                ],
                [
                    'icon' => 'UserIdentification',
                    'label' => 'Contacts',
                    'guard' => 'crm',
                    'type' => 'uri',
                    'route' => 'brain.crm.contacts.index',
                    'id' => ''
                ],
                [
                    'icon' => 'Enterprise',
                    'label' => 'Entreprises',
                    'guard' => 'crm',
                    'type' => 'uri',
                    'route' => 'brain.crm.companies.index',
                    'id' => ''
                ],
            ],
        ],
        'catalog' => [
            'label' => 'Catalogue',
            'items' => [
                [
                    'icon' => 'Category',
                    'label' => 'Catégories',
                    'guard' => 'catalog',
                    'type' => 'uri',
                    'route' => 'brain.catalog.categories.index',
                    'id' => ''
                ],
                [
                    'icon' => 'Archive',
                    'label' => 'Ouvrages',
                    'guard' => 'catalog',
                    'type' => 'uri',
                    'route' => 'brain.catalog.groups.index',
                    'id' => ''
                ],
                [
                    'icon' => 'Product',
                    'label' => 'Produits',
                    'guard' => 'catalog',
                    'type' => 'uri',
                    'route' => 'brain.catalog.products.index',
                    'id' => ''
                ],
            ],
        ],
        'sale' => [
            'label' => 'Vente',
            'items' => [
                [
                    'icon' => 'RequestQuote',
                    'label' => 'Devis',
                    'guard' => 'sale',
                    'type' => 'uri',
                    'route' => 'brain.sale.quotations.index',
                    'id' => ''
                ],
                [
                    'icon' => 'Receipt',
                    'label' => 'Commandes',
                    'guard' => 'sale',
                    'type' => 'uri',
                    'route' => 'brain.sale.orders.index',
                    'id' => ''
                ],
                [
                    'icon' => 'Receipt',
                    'label' => 'Factures',
                    'guard' => 'sale',
                    'type' => 'uri',
                    'route' => 'brain.sale.invoices.index',
                    'id' => ''
                ],
                [
                    'icon' => 'Receipt',
                    'label' => 'Contrats',
                    'guard' => 'sale',
                    'type' => 'uri',
                    'route' => 'brain.sale.contracts.index',
                    'id' => ''
                ],
            ],
        ],
        'blog' => [
            'label' => 'Blog',
            'items' => [
                [
                    'label' => 'Articles',
                    'guard' => 'blog',
                    'type' => 'uri',
                    'route' => 'brain.blog.articles.index',
                    'id' => ''
                ],
            ],
        ],
        'resources' => [
            'label' => 'Ressources',
            'items' => [
                [
                    'label' => 'FAQ',
                    'guard' => 'faq',
                    'type' => 'uri',
                    'route' => 'brain.faq.questions.index',
                    'id' => ''
                ],
                [
                    'label' => 'Glossaire',
                    'guard' => 'glossary',
                    'type' => 'uri',
                    'route' => 'brain.glossary.terms.index',
                    'id' => ''
                ],
                [
                    'label' => 'Bookmark',
                    'guard' => 'bookmark',
                    'type' => 'uri',
                    'route' => 'brain.bookmark.items.index',
                    'id' => ''
                ],
                [
                    'label' => 'Catégories du Bookmark',
                    'guard' => 'bookmark',
                    'type' => 'uri',
                    'route' => 'brain.bookmark.categories.index',
                    'id' => ''
                ],
                [
                    'label' => 'Types du Bookmark',
                    'guard' => 'bookmark',
                    'type' => 'uri',
                    'route' => 'brain.bookmark.types.index',
                    'id' => ''
                ],
            ],
        ],
        'help' => [
            'label' => 'Aide/Support',
            'items' => [
                [
                    'view' => 'helpdesk::back.tickets.index',
                    'label' => 'Tickets',
                    'guard' => 'helpdesk',
                    'type' => 'uri',
                    'route' => 'brain.helpdesk.tickets.index',
                    'id' => ''
                ],
                [
                    'view' => 'documentation::back.documentum',
                    'icon' => 'Information',
                    'label' => 'Documentation',
                    'guard' => 'manage documentation',
                    'type' => 'uri',
                    'route' => 'brain.documentation.referential',
                    'id' => ''
                ],
            ],
        ],
        'settings' => [
            'label' => 'Configuration',
            'items' => [
                [
                    'label' => 'Permissions',
                    'guard' => 'manage access',
                    'type' => 'uri',
                    'route' => 'brain.access.permissions.index',
                    'id' => ''
                ],
                [
                    'label' => 'Rôles',
                    'guard' => 'manage access',
                    'type' => 'uri',
                    'route' => 'brain.access.roles.index',
                    'id' => ''
                ],
                [
                    'label' => 'Taxes',
                    'guard' => 'manage business',
                    'type' => 'uri',
                    'route' => 'brain.business.taxes.index',
                    'id' => ''
                ],
                [
                    'label' => 'Unités',
                    'guard' => 'manage business',
                    'type' => 'uri',
                    'route' => 'brain.business.units.index',
                    'id' => ''
                ],
                [
                    'label' => 'Devises',
                    'guard' => 'manage business',
                    'type' => 'uri',
                    'route' => 'brain.business.currencies.index',
                    'id' => ''
                ],
                [
                    'label' => 'Formes légales',
                    'guard' => 'manage business',
                    'type' => 'uri',
                    'route' => 'brain.business.legal-forms.index',
                    'id' => ''
                ],
                [
                    'label' => 'Étapes d’une opportunité',
                    'guard' => 'manage crm',
                    'type' => 'uri',
                    'route' => 'brain.crm.lead-states.index',
                    'id' => ''
                ],
                [
                    'label' => 'Origines d’une opportunité',
                    'guard' => 'manage crm',
                    'type' => 'uri',
                    'route' => 'brain.crm.lead-origins.index',
                    'id' => ''
                ],
                [
                    'label' => 'Types d’un contrat',
                    'guard' => 'manage legal',
                    'type' => 'uri',
                    'route' => 'brain.legal.types.index',
                    'id' => ''
                ],
                [
                    'label' => 'Templates d’un contrat',
                    'guard' => 'manage legal',
                    'type' => 'uri',
                    'route' => 'brain.legal.templates.index',
                    'id' => ''
                ],
                [
                    'label' => 'Étapes d’un contrat',
                    'guard' => 'manage legal',
                    'type' => 'uri',
                    'route' => 'brain.legal.contract-states.index',
                    'id' => ''
                ],
                [
                    'label' => 'Types d’un projet',
                    'guard' => 'manage pm',
                    'type' => 'uri',
                    'route' => 'brain.pm.project-types.index',
                    'id' => ''
                ],
                [
                    'label' => 'Étapes d’un projet',
                    'guard' => 'manage pm',
                    'type' => 'uri',
                    'route' => 'brain.pm.project-states.index',
                    'id' => ''
                ],
            ],
        ],
        'me' => [
            'label' => 'Mon compte',
            'items' => [
                [
                    'label' => 'Mon profil',
                    'guard' => null,
                    'type' => 'uri',
                    'route' => 'brain.me.profile.edit',
                    'id' => ''
                ],
                [
                    'label' => 'Me déconnecter',
                    'guard' => null,
                    'type' => 'uri',
                    'route' => 'logout',
                    'id' => ''
                ],
            ],
        ],
    ]
];
