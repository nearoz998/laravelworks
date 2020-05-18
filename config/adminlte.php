<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'nec, ELX-016',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-logo
    |
    */

    'logo' => '<b>ELX-</b>016',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image-xl',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white text-sm',
    'classes_topnav_nav' => 'navbar-expand-lg',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-sidebar
    |
    */

    'sidebar_mini' => false,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 350,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'blue',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-menu
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => true,
            'topnav' => true,
        ],
        [
            'text' => 'testing',
            'topnav' => true,
            'url' => 'testing',
            'icon' => '',
        ],
        [
            'text' => 'Study',
            'icon' => '',
            'auto_view' => true,
            'topnav' => true,
            'preexpand' => true,
            'class' => 'text-right',
            'url' => '#',
            'submenu' => [
                    [
                        'text' => 'posts',
                        'url' => 'posts',
                    ],
                    [
                        'text' => 'form1',
                        'url' => 'form1',
                    ],
                    [
                        'text' => 'RFR',
                        'url' => 'room',
                    ],
                    [
                        'text' => 'pawan',
                        'url' => 'dhakalpawan',
                    ],
                ],
        ],
        [
            'text' => 'myGitHub',
            'topnav' => true,
            'url' => 'https://github.com/nearoz998/laravelworks',
            'icon' => 'fab fa-github',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 6,
            'label_color' => 'success',
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        ['header' => 'ELX-016'],
        [
            'text'    => 'Classroom',
            'icon'    => 'fas fa-book',
            'topnav'  => true,
            // 'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => 'Semester 1',
                    'url'  => 'https://drive.google.com/drive/folders/1-W9EiQCS80Qez08V7oMmhFCNluMZk81Z',
                    'icon_color' => 'green',
                ],
                [
                    'text' => 'Semester 2',
                    'url'  => 'https://drive.google.com/drive/folders/1-_0suPQ9cOUEYV3HkkTiiH3pnPRh0wFV',
                    'icon_color' => 'green',
                ],
                [
                    'text' => 'Semester 3',
                    'url'  => 'https://drive.google.com/drive/folders/1-9bwOx5Ik1jaOMm5hUVn3pabOJJwDGcV',
                    'icon_color' => 'green',
                ],
                [
                    'text' => 'Semester 4',
                    'url'  => '#',
                    'icon_color' => 'green',
                    'submenu' => [
                        [
                            'text' => 'Electronic Circuits',
                            'url'  => 'https://drive.google.com/drive/folders/10Gc0lPdGgiUX_5qQcLOlqqi07cOvgfUR',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => 'Instrumentation',
                            'url'  => 'https://drive.google.com/drive/folders/1-M02pUBHdlYxO7SfoUgofUgLtvQz5QMe',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => 'Microprocessors',
                            'url'  => 'https://drive.google.com/drive/folders/10KtXT3MRO5T9TDxG_loTFzuShCdoi_P_',  
                            'icon_color' => 'red', 
                        ],
                   ],
                ],
                [
                    'text' => 'Semester 5',
                    'url'  => 'https://drive.google.com/drive/folders/1cbNAN7i2cJEXCKVTX4nVkc3FwNCC_OvK',
                    'icon_color' => 'green',
                ],
                [
                    'text' => 'Semester 6',
                    'url'  => 'https://drive.google.com/drive/folders/1A8S5fkBA4aJSbakG-Sqa_B9frNqY8lOr',
                    'icon_color' => 'green',
                ],
                [
                    'text' => 'Semester 7',
                    'url'  => '#',
                    'icon_color' => 'green',
                    'submenu' => [
                        [
                            'text' => 'Aeronautical Communication',
                            'url'  => 'https://drive.google.com/drive/folders/1PV5QqAi99xwaQVfCYKENq8MVntLpNomA',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => 'Computer Network',
                            'url'  => 'https://drive.google.com/drive/folders/1606uvr7n0VOTah02U12Yte3YAKcnojzY',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => 'Digital Communication',
                            'url'  => 'https://drive.google.com/drive/folders/13Tmgnu0NomV1yQHOB5kA4TkGppOmFc97',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => 'Digital Signal Processing',
                            'url'  => '#',
                            'icon_color' => 'red',
                            'submenu' => [
                                [
                                    'text' => 'Lab Works',
                                    'url'  => 'https://drive.google.com/drive/folders/125Ox9LAfVHh7XgCg7HYSb7OqQ8IzzkAC',
                                    'icon_color' => 'orange',
                                ],
                                [
                                    'text' => 'Notes',
                                    'url'  => 'https://drive.google.com/drive/folders/11-9EM5N7VZhioH9Alo1qXTj1JXKXsLsb',
                                    'icon_color' => 'orange',
                                ],
                                [
                                    'text' => 'Tutorials',
                                    'url'  => 'https://drive.google.com/drive/folders/1-c3J7pDHtef3JPiZ0E3mb-_yz8f24wRy',
                                    'icon_color' => 'orange',   
                                ],
                           ],
                        ],
                        [
                            'text' => 'Electromagnetic Propagation and Antenna',
                            'url'  => 'https://drive.google.com/drive/folders/12UzPFD8usEN8NOeFnbSPSw6MuxvHlJw4',  
                            'icon_color' => 'red', 
                        ],
                        [
                            'text' => 'Research Methodology',
                            'url'  => 'https://drive.google.com/drive/folders/1BwaXEM9B6X4v45GVOdqJiARnEBFKxNam',
                            'icon_color' => 'red',
                        ],
                   ],
                ],
                [
                    'text' => 'Semester 8',
                    'url'  => '#',
                    'icon_color' => 'green',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'aqua',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
