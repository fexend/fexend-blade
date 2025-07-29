<?php

namespace App\View\Composers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public Request $request
    ) {
        //
    }

    public function compose(View $view)
    {
        if (!is_null($this->request->route())) {
            $pageName = $this->request->route()->getName();
            $routePrefix = explode('.', $pageName)[0] ?? '';

            $sidebarContent = match ($routePrefix) {
                'settings' => self::setting(),
                'dashboard' => self::dashboard(),
                'master' => self::master(),
                'element' => self::element(),
                'component' => self::component(),
                'pages' => self::pages(),
                default => self::dashboard(),
            };

            $view->with('sidebarContent', $sidebarContent);
            $view->with('sidebarMenus', self::composeAllMenu());
        }
    }

    public function composeAllMenu(): array
    {
        return [
            self::dashboard(),
            self::setting(),
            self::element(),
            self::component(),
            self::pages(),
        ];
    }

    public static function setting()
    {
        return [
            'title' => 'Settings',
            'route_prefix' => 'settings',
            'route_active' => in_array(request()->route()->getName(), [
                'settings.index',
                'settings.role.index',
                'settings.role.create',
                'settings.role.edit',
                'settings.user.index',
                'settings.user.create',
                'settings.user.edit',
                'settings.user.show',
            ]),
            'permission_names' => [],
            'role_names' => [],
            'menus' => [
                [
                    'title' => 'Role',
                    'route' => 'settings.role.index',
                    'route_active' => in_array(request()->route()->getName(), [
                        'settings.role.index',
                        'settings.role.create',
                        'settings.role.edit',
                    ]),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    "title" => 'Permission',
                    'route' => 'settings.permission.index',
                    'route_active' => in_array(request()->route()->getName(), [
                        'settings.permission.index',
                        'settings.permission.create',
                        'settings.permission.edit',
                    ]),
                    'permission_names' => [],
                    'role_names' => [],
                ]
            ]
        ];
    }

    public static function dashboard(): array
    {
        return [
            'title' => 'Dashboard',
            'route_prefix' => 'dashboard',
            'route_active' => in_array(request()->route()->getName(), [
                'dashboard',
                'dashboard.dashboard-1',
                'dashboard.dashboard-2',
                'dashboard.dashboard-3',
            ]),
            'permission_names' => [],
            'role_names' => [],
            'menus' => [
                [
                    'title' => 'Dashboard',
                    'route' => 'dashboard',
                    'route_active' => in_array(request()->route()->getName(), ['dashboard']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Dashboard 2',
                    'route' => 'dashboard.dashboard-2',
                    'route_active' => request()->route()->getName() === 'dashboard.dashboard-2',
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Dashboard 3',
                    'route' => 'dashboard.dashboard-3',
                    'route_active' => request()->route()->getName() === 'dashboard.dashboard-3',
                    'permission_names' => [],
                    'role_names' => [],
                ]
            ],
        ];
    }

    public static function master(): array
    {
        return [
            'title' => 'Master',
            'route_prefix' => 'master',
            'route_active' => in_array(request()->route()->getName(), ['master']),
            'permission_names' => [],
            'role_names' => [],
            'menus' => [
                [
                    'title' => 'User',
                    'route' => 'master.user.index',
                    'route_active' => in_array(request()->route()->getName(), ['master.user.index']),
                    'permission_names' => [],
                    'role_names' => [],
                ]
            ]
        ];
    }

    public static function element()
    {
        return [
            'title' => 'Element',
            'route_prefix' => 'element',
            'route_active' => in_array(request()->route()->getName(), ['element']),
            'permission_names' => [],
            'role_names' => [],
            'menus' => [
                [
                    'title' => 'Button',
                    'route' => 'element.button',
                    'route_active' => in_array(request()->route()->getName(), ['element.button']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Input',
                    // 'route' => ,
                    'route_active' => in_array(request()->route()->getName(), [
                        'element.forms.input',
                        'element.forms.checkbox',
                        'element.forms.textarea',
                        'element.forms.select',
                        'element.forms.input-date',
                        'element.forms.input-file',
                        'element.forms.input-radio',
                        'element.forms.input-switch',
                        'element.forms.checkbox',
                    ]),
                    'permission_names' => [],
                    'role_names' => [],
                    'sub_menus' => [
                        [
                            'title' => 'Input',
                            'route' => 'element.forms.input',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'Textarea',
                            'route' => 'element.forms.textarea',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.textarea']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'Select',
                            'route' => 'element.forms.select',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.select']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'Date',
                            'route' => 'element.forms.input-date',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-date']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'File',
                            'route' => 'element.forms.input-file',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-file']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'Radio',
                            'route' => 'element.forms.input-radio',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-radio']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'Switch',
                            'route' => 'element.forms.input-switch',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-switch']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                        [
                            'title' => 'Checkbox',
                            'route' => 'element.forms.checkbox',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.checkbox']),
                            'permission_names' => [],
                            'role_names' => [],
                        ],
                    ]
                ]
            ],
        ];
    }

    public static function component(): array
    {
        return [
            'title' => 'Component',
            'route_prefix' => 'component',
            'route_active' => in_array(request()->route()->getName(), ['component']),
            'permission_names' => [],
            'role_names' => [],
            'menus' => [
                [
                    'title' => 'Component',
                    'route' => 'component.index',
                    'route_active' => in_array(request()->route()->getName(), ['component.index']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Accordion",
                    'route' => 'component.accordion',
                    'route_active' => in_array(request()->route()->getName(), ['component.accordion']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Alert",
                    'route' => 'component.alert',
                    'route_active' => in_array(request()->route()->getName(), ['component.alert']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Badge",
                    'route' => 'component.badge',
                    'route_active' => in_array(request()->route()->getName(), ['component.badge']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Breadcrumb",
                    'route' => 'component.breadcrumb',
                    'route_active' => in_array(request()->route()->getName(), ['component.breadcrumb']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Card",
                    'route' => 'component.card',
                    'route_active' => in_array(request()->route()->getName(), ['component.card']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Collapse",
                    'route' => 'component.collapse',
                    'route_active' => in_array(request()->route()->getName(), ['component.collapse']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Divider",
                    'route' => 'component.divider',
                    'route_active' => in_array(request()->route()->getName(), ['component.divider']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Drawer",
                    'route' => 'component.drawer',
                    'route_active' => in_array(request()->route()->getName(), ['component.drawer']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Dropdown",
                    'route' => 'component.dropdown',
                    'route_active' => in_array(request()->route()->getName(), ['component.dropdown']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Menu List",
                    'route' => 'component.menu-list',
                    'route_active' => in_array(request()->route()->getName(), ['component.menu-list']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Modal",
                    'route' => 'component.modal',
                    'route_active' => in_array(request()->route()->getName(), ['component.modal']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Popover",
                    'route' => 'component.popover',
                    'route_active' => in_array(request()->route()->getName(), ['component.popover']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Tab",
                    'route' => 'component.tab',
                    'route_active' => in_array(request()->route()->getName(), ['component.tab']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Table",
                    'route' => 'component.table',
                    'route_active' => in_array(request()->route()->getName(), ['component.table']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Toast",
                    'route' => 'component.toast',
                    'route_active' => in_array(request()->route()->getName(), ['component.toast']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => "Tooltip",
                    'route' => 'component.tooltip',
                    'route_active' => in_array(request()->route()->getName(), ['component.tooltip']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
            ],
        ];
    }

    public static function pages()
    {
        return [
            'title' => 'Pages',
            'route_prefix' => 'pages',
            'route_active' => in_array(request()->route()->getName(), ['pages', 'pages.login', 'pages.register', 'pages.forgot-password', 'pages.reset-password', 'pages.resend-verification-email']),
            'permission_names' => [],
            'role_names' => [],
            'menus' => [
                [
                    'title' => 'Login',
                    'route' => 'pages.login',
                    'route_active' => in_array(request()->route()->getName(), ['pages.login']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Register',
                    'route' => 'pages.register',
                    'route_active' => in_array(request()->route()->getName(), ['pages.register']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Forgot Password',
                    'route' => 'pages.forgot-password',
                    'route_active' => in_array(request()->route()->getName(), ['pages.forgot-password']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Reset Password',
                    'route' => 'pages.reset-password',
                    'route_active' => in_array(request()->route()->getName(), ['pages.reset-password']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Resend Verification',
                    'route' => 'pages.resend-verification-email',
                    'route_active' => in_array(request()->route()->getName(), ['pages.resend-verification-email']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [],
                [
                    'title' => 'Layouts 1',
                    'route' => 'pages.layouts-1',
                    'route_active' => in_array(request()->route()->getName(), ['pages.layouts-1']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Layouts 2',
                    'route' => 'pages.layouts-2',
                    'route_active' => in_array(request()->route()->getName(), ['pages.layouts-2']),
                    'permission_names' => [],
                    'role_names' => [],
                ],
                [
                    'title' => 'Layouts 3',
                    'route' => 'pages.layouts-3',
                    'route_active' => in_array(request()->route()->getName(), ['pages.layouts-3']),
                    'permission_names' => [],
                    'role_names' => [],
                ]
            ]
        ];
    }
}
