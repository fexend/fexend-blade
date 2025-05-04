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
                'dashboard' => self::dashboard(),
                'setting' => self::setting(),
                'element' => self::element(),
                'component' => self::component(),
                'pages' => self::pages(),
                default => [
                    'title' => 'Dashboard',
                    'route_prefix' => 'dashboard',
                    'route_active' => in_array(request()->route()->getName(), ['dashboard']),
                    'menus' => [],
                ],
            };

            $view->with('sidebarContent', $sidebarContent);
            $view->with('sidebarMenus', self::composeAllMenu());
        }
    }

    public function composeAllMenu(): array
    {
        return [
            // self::dashboard(),
            // self::setting(),
            self::element(),
            self::component(),
            self::pages(),
        ];
    }


    public static function dashboard()
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
            'menus' => [
                [
                    'title' => 'Dashboard',
                    'route' => 'dashboard',
                    'route_active' => in_array(request()->route()->getName(), ['dashboard']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Dashboard 2',
                    'route' => 'dashboard.dashboard-2',
                    'route_active' => request()->route()->getName() === 'dashboard.dashboard-2',
                    'permission_names' => [],
                ],
                [
                    'title' => 'Dashboard 3',
                    'route' => 'dashboard.dashboard-3',
                    'route_active' => request()->route()->getName() === 'dashboard.dashboard-3',
                    'permission_names' => [],
                ]
            ],
        ];
    }

    public static function setting()
    {
        //
    }

    public static function element()
    {
        return [
            'title' => 'Element',
            'route_prefix' => 'element',
            'route_active' => in_array(request()->route()->getName(), ['element']),
            'menus' => [
                [
                    'title' => 'Button',
                    'route' => 'element.button',
                    'route_active' => in_array(request()->route()->getName(), ['element.button']),
                    'permission_names' => [],
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
                    'sub_menus' => [
                        [
                            'title' => 'Input',
                            'route' => 'element.forms.input',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'Textarea',
                            'route' => 'element.forms.textarea',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.textarea']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'Select',
                            'route' => 'element.forms.select',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.select']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'Date',
                            'route' => 'element.forms.input-date',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-date']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'File',
                            'route' => 'element.forms.input-file',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-file']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'Radio',
                            'route' => 'element.forms.input-radio',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-radio']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'Switch',
                            'route' => 'element.forms.input-switch',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.input-switch']),
                            'permission_names' => [],
                        ],
                        [
                            'title' => 'Checkbox',
                            'route' => 'element.forms.checkbox',
                            'route_active' => in_array(request()->route()->getName(), ['element.forms.checkbox']),
                            'permission_names' => [],
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
            'menus' => [
                [
                    'title' => 'Component',
                    'route' => 'component.index',
                    'route_active' => in_array(request()->route()->getName(), ['component.index']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Accordion",
                    'route' => 'component.accordion',
                    'route_active' => in_array(request()->route()->getName(), ['component.accordion']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Alert",
                    'route' => 'component.alert',
                    'route_active' => in_array(request()->route()->getName(), ['component.alert']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Badge",
                    'route' => 'component.badge',
                    'route_active' => in_array(request()->route()->getName(), ['component.badge']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Breadcrumb",
                    'route' => 'component.breadcrumb',
                    'route_active' => in_array(request()->route()->getName(), ['component.breadcrumb']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Card",
                    'route' => 'component.card',
                    'route_active' => in_array(request()->route()->getName(), ['component.card']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Collapse",
                    'route' => 'component.collapse',
                    'route_active' => in_array(request()->route()->getName(), ['component.collapse']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Divider",
                    'route' => 'component.divider',
                    'route_active' => in_array(request()->route()->getName(), ['component.divider']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Drawer",
                    'route' => 'component.drawer',
                    'route_active' => in_array(request()->route()->getName(), ['component.drawer']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Dropdown",
                    'route' => 'component.dropdown',
                    'route_active' => in_array(request()->route()->getName(), ['component.dropdown']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Menu List",
                    'route' => 'component.menu-list',
                    'route_active' => in_array(request()->route()->getName(), ['component.menu-list']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Modal",
                    'route' => 'component.modal',
                    'route_active' => in_array(request()->route()->getName(), ['component.modal']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Popover",
                    'route' => 'component.popover',
                    'route_active' => in_array(request()->route()->getName(), ['component.popover']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Tab",
                    'route' => 'component.tab',
                    'route_active' => in_array(request()->route()->getName(), ['component.tab']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Table",
                    'route' => 'component.table',
                    'route_active' => in_array(request()->route()->getName(), ['component.table']),
                    'permission_names' => [],
                ],
                [
                    'title' => "Tooltip",
                    'route' => 'component.tooltip',
                    'route_active' => in_array(request()->route()->getName(), ['component.tooltip']),
                    'permission_names' => [],
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
            'menus' => [
                [
                    'title' => 'Login',
                    'route' => 'pages.login',
                    'route_active' => in_array(request()->route()->getName(), ['pages.login']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Register',
                    'route' => 'pages.register',
                    'route_active' => in_array(request()->route()->getName(), ['pages.register']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Forgot Password',
                    'route' => 'pages.forgot-password',
                    'route_active' => in_array(request()->route()->getName(), ['pages.forgot-password']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Reset Password',
                    'route' => 'pages.reset-password',
                    'route_active' => in_array(request()->route()->getName(), ['pages.reset-password']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Resend Verification',
                    'route' => 'pages.resend-verification-email',
                    'route_active' => in_array(request()->route()->getName(), ['pages.resend-verification-email']),
                    'permission_names' => [],
                ],
                [],
                [
                    'title' => 'Layouts 1',
                    'route' => 'pages.layouts-1',
                    'route_active' => in_array(request()->route()->getName(), ['pages.layouts-1']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Layouts 2',
                    'route' => 'pages.layouts-2',
                    'route_active' => in_array(request()->route()->getName(), ['pages.layouts-2']),
                    'permission_names' => [],
                ],
                [
                    'title' => 'Layouts 3',
                    'route' => 'pages.layouts-3',
                    'route_active' => in_array(request()->route()->getName(), ['pages.layouts-3']),
                    'permission_names' => [],
                ]
            ]
        ];
    }
}
