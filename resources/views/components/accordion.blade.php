@props([
    'variant' => 'default',
    'title' => 'Accordion',
])

@php
    $variantClasses = [
        'default' => '',
        'bordered' => 'accordion-bordered',
        'full-bordered' => 'accordion-full-bordered',
        'separated' => 'accordion-full-bordered accordion-separated',
    ];

    $accordionClass = $variantClasses[$variant] ?? '';
@endphp

<div {{ $attributes }} x-data="{ openAccordion: null }">
    {{ $slot }}
</div>
