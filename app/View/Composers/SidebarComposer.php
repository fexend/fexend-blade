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
                default => [],
            };

            $view->with('sidebarContent', $sidebarContent);
        }
    }


    public static function dashboard()
    {
        return [
            'title' => 'Dashboard',
            'route_prefix' => 'dashboard',
            'route_active' => in_array(request()->route()->getName(), ['dashboard', 'dashboard', 'dashboard']),
            'menus' => [
                [
                    'title' => 'Dashboard',
                    'route' => 'dashboard',
                    'route_active' => in_array(request()->route()->getName(), ['dashboard']),
                    'permission_names' => ['dashboard'],
                ],
                // [
                //     'title' => 'Dashboard 2',
                //     'route' => 'dashboard.dashboard-2',
                //     'route_active' => request()->route()->getName() === 'dashboard.dashboard-2',
                //     'permission_names' => ['dashboard.dashboard-2'],
                // ],
                // [
                //     'title' => 'Dashboard 3',
                //     'route' => 'dashboard.dashboard-3',
                //     'route_active' => request()->route()->getName() === 'dashboard.dashboard-3',
                //     'permission_names' => ['dashboard.dashboard-3'],
                // ],
                // [
                //     'title' => 'Sub Menu',
                //     'route_active' => in_array(request()->route()->getName(), ['dashboard.dashboard-4', 'dashboard.dashboard-5', 'dashboard.dashboard-6']),
                //     'permission_names' => ['dashboard.dashboard-4', 'dashboard.dashboard-5', 'dashboard.dashboard-6'],
                //     'sub_menus' => [
                //         [
                //             'title' => 'Dashboard 4',
                //             'route' => 'dashboard.dashboard-4',
                //             'route_active' => request()->route()->getName() === 'dashboard.dashboard-4',
                //             'permission_names' => ['dashboard.dashboard-4'],
                //         ],
                //         [
                //             'title' => 'Dashboard 5',
                //             'route' => 'dashboard.dashboard-5',
                //             'route_active' => request()->route()->getName() === 'dashboard.dashboard-5',
                //             'permission_names' => ['dashboard.dashboard-5'],
                //         ],
                //         [
                //             'title' => 'Dashboard 6',
                //             'route' => 'dashboard.dashboard-6',
                //             'route_active' => request()->route()->getName() === 'dashboard.dashboard-6',
                //             'permission_names' => [
                //                 'dashboard.dashboard-6'
                //             ]
                //         ],
                //     ],
                // ],
            ],
        ];
    }

    public static function setting()
    {
        //
    }

    public static function element()
    {
        //
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
                    'title' => "Acordion",
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
        //
    }
}
