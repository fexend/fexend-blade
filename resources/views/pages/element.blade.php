<?php
use function Laravel\Folio\name;
name('element.index');
?>

<x-main title="Elements">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Elements" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="heading-1 mb-8">Elements</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ([
            ['Button',      'element.button'],
            ['Input',       'element.forms.input'],
            ['Textarea',    'element.forms.textarea'],
            ['Checkbox',    'element.forms.checkbox'],
            ['Radio',       'element.forms.input-radio'],
            ['Switch',      'element.forms.input-switch'],
            ['Select',      'element.forms.select'],
            ['File Upload', 'element.forms.input-file'],
            ['Date Picker', 'element.forms.flatpickr'],
            ['WYSIWYG',     'element.forms.wysiwyg'],
            ['DataTable',   'element.datatable'],
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
