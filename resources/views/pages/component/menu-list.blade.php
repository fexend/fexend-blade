<?php
use function Laravel\Folio\name;
name('component.menu-list');
?>

<x-main>
    <x-slot name="title">Menu List Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Menu List" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Menu List Component</h2>
        </x-slot>
        <p>The Menu List component provides a flexible and customizable navigation menu system that supports nested dropdowns, icons, and multiple styling options.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6">
            <x-menu-list :items="[['label' => 'Dashboard', 'url' => '#'], ['label' => 'Profile', 'url' => '#'], ['label' => 'Settings', 'url' => '#']]" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-menu-list :items="[
    ['label' => 'Dashboard', 'url' => '#'],
    ['label' => 'Profile', 'url' => '#'],
    ['label' => 'Settings', 'url' => '#'],
]" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <!-- With Icons -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">With Icons</h3>
            </x-slot>

            <div class="mb-6">
                <x-menu-list :show-icons="true" :items="[
                    [
                        'label' => 'Dashboard',
                        'url' => '#',
                        'icon' => '<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' viewBox=\'0 0 24 24\'><path d=\'M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z\'></path></svg>',
                    ],
                    [
                        'label' => 'Profile',
                        'url' => '#',
                        'icon' => '<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' viewBox=\'0 0 24 24\'><path d=\'M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z\'></path></svg>',
                    ],
                ]" />
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-menu-list 
    :show-icons="true"
    :items="[
        [
            'label' => 'Dashboard',
            'url' => '#',
            'icon' => '&lt;svg&gt;...&lt;/svg&gt;'
        ],
        [
            'label' => 'Profile',
            'url' => '#',
            'icon' => '&lt;svg&gt;...&lt;/svg&gt;'
        ]
    ]" 
/&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- With Dropdown -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">With Dropdown</h3>
            </x-slot>

            <div class="mb-6">
                <x-menu-list :items="[
                    ['label' => 'Dashboard', 'url' => '#'],
                    [
                        'label' => 'Settings',
                        'dropdown' => [['label' => 'Profile', 'url' => '#'], ['label' => 'Security', 'url' => '#'], ['label' => 'Notifications', 'url' => '#']],
                    ],
                ]" />
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-menu-list 
    :items="[
        ['label' => 'Dashboard', 'url' => '#'],
        [
            'label' => 'Settings',
            'dropdown' => [
                ['label' => 'Profile', 'url' => '#'],
                ['label' => 'Security', 'url' => '#'],
                ['label' => 'Notifications', 'url' => '#']
            ]
        ]
    ]" 
/&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Menu List Component Props">
            <x-slot name="thead">
                <tr>
                    <th>Prop</th>
                    <th>Type</th>
                    <th>Default</th>
                    <th>Description</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>items</td>
                    <td>array</td>
                    <td>[]</td>
                    <td>Array of menu items with label, url, icon, and optional dropdown items.</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string</td>
                    <td>'Menu List'</td>
                    <td>The title displayed at the top of the menu list.</td>
                </tr>
                <tr>
                    <td>width</td>
                    <td>string</td>
                    <td>'w-80'</td>
                    <td>CSS class to control the width of the menu list.</td>
                </tr>
                <tr>
                    <td>showIcons</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to display icons next to menu items.</td>
                </tr>
                <tr>
                    <td>columns</td>
                    <td>integer</td>
                    <td>1</td>
                    <td>Number of columns to display the menu items in.</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices Card -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Keep menu labels clear and concise.</li>
            <li>Use icons consistently across menu items when enabled.</li>
            <li>Limit dropdown nesting to prevent complex navigation structures.</li>
            <li>Consider mobile responsiveness when setting menu widths.</li>
            <li>Use active states to indicate current page or section.</li>
            <li>Group related menu items together in dropdowns.</li>
        </ul>
    </x-card>
</x-main>
