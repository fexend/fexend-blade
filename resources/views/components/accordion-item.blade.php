@props(['id', 'title', 'variant' => 'default'])

@php
    $variantClasses = [
        'default' => 'accordion',
        'bordered' => 'accordion accordion-bordered',
        'full-bordered' => 'accordion accordion-full-bordered',
        'separated' => 'accordion accordion-full-bordered accordion-separated',
    ];

    $accordionClass = $variantClasses[$variant] ?? 'accordion';
@endphp

<div class="{{ $accordionClass }}" x-data="{ id: {{ $id }} }">
    <div class="accordion-header" @click="openAccordion = openAccordion === id ? null : id">
        <h4 class="accordion-title">{{ $title }}</h4>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" :class="{ 'rotate-180': openAccordion === id }" x-transition x-transition:duration.200ms>
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </div>
    <div class="accordion-body" x-show="openAccordion === id" x-transition x-collapse>
        {{ $slot }}
    </div>
</div>
