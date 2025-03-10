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

    public static function component()
    {
        //
    }

    public static function pages()
    {
        //
    }
}
