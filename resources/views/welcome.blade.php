<x-main title="Custom Dashboard">

    <x-breadcrumb>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-menu-list title="Simple Menu" :items="[['label' => 'General', 'active' => true, 'url' => '#'], ['label' => 'Teams', 'url' => '#'], ['label' => 'Billing', 'url' => '#'], ['label' => 'Invoices', 'url' => '#'], ['label' => 'Account', 'url' => '#']]" />

    @php
        $items = [
            [
                'label' => 'General',
                'active' => true,
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>',
            ],
            [
                'label' => 'Teams',
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>',
            ],
        ];
    @endphp
    <x-menu-list title="Menu with Icons" :showIcons="true" :items="$items" />

    @php
        $items = [
            [
                'label' => 'General',
                'active' => true,
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>',
            ],
            [
                'label' => 'Billing',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>',
                'dropdown' => [['label' => 'Submenu 1', 'url' => '#'], ['label' => 'Submenu 2', 'url' => '#'], ['label' => 'Submenu 3', 'url' => '#']],
            ],
        ];
    @endphp

    <x-menu-list title="Menu with Dropdowns" :showIcons="true" :items="$items" />

    @php
        $items = [
            [
                'label' => 'Dashboard',
                'active' => true,
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 4h6v8h-6z" /><path d="M14 4h6v8h-6z" /><path d="M4 16h6v4h-6z" /><path d="M14 16h6v4h-6z" /></svg>',
            ],
            [
                'label' => 'Products',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 10l5 -6l5 6" /><path d="M21 10l-2 8a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2l-2 -8z" /><path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /></svg>',
                'dropdown' => [['label' => 'View All Products', 'url' => '#'], ['label' => 'Add Product', 'url' => '#'], ['label' => 'Categories', 'url' => '#'], ['label' => 'Inventory', 'url' => '#'], ['label' => 'Delete Product', 'url' => '#', 'method' => 'DELETE']],
            ],
            [
                'label' => 'Orders',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 12h6" /><path d="M9 16h6" /></svg>',
                'dropdown' => [['label' => 'Pending Orders', 'url' => '#'], ['label' => 'Completed Orders', 'url' => '#'], ['label' => 'Cancelled Orders', 'url' => '#']],
            ],
        ];
    @endphp
    <x-menu-list title="Menu with Custom Dropdowns" :showIcons="true" :items="$items" />
</x-main>
