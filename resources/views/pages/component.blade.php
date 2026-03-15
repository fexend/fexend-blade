<?php
use function Laravel\Folio\name;
name('component.index');
?>

<x-main title="Components">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Components" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="heading-1 mb-8">Components</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ([
            ['Accordion',      'component.accordion'],
            ['Alert',          'component.alert'],
            ['Avatar',         'component.avatar'],
            ['Badge',          'component.badge'],
            ['Breadcrumb',     'component.breadcrumb'],
            ['Card',           'component.card'],
            ['Collapse',       'component.collapse'],
            ['Command Palette','component.command-palette'],
            ['Data Filter',    'component.data-filter'],
            ['Divider',        'component.divider'],
            ['Drawer',         'component.drawer'],
            ['Dropdown',       'component.dropdown'],
            ['File Upload',    'component.file-upload'],
            ['Menu List',      'component.menu-list'],
            ['Modal',          'component.modal'],
            ['Pagination',     'component.pagination'],
            ['Popover',        'component.popover'],
            ['Stat Card',      'component.stat-card'],
            ['Stepper',        'component.stepper'],
            ['Tab',            'component.tab'],
            ['Table',          'component.table'],
            ['Timeline',       'component.timeline'],
            ['Toast',          'component.toast'],
            ['Tooltip',        'component.tooltip'],
        ] as [$label, $route])
            <a href="{{ route($route) }}" class="card card-hover flex items-center justify-between p-4 group">
                <span class="font-medium text-slate-700 dark:text-slate-200 group-hover:text-primary dark:group-hover:text-primary-dark transition-colors">{{ $label }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400 group-hover:text-primary dark:group-hover:text-primary-dark transition-colors">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 6l6 6l-6 6"/>
                </svg>
            </a>
        @endforeach
    </div>
</x-main>
