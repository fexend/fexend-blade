@props([
    'title' => 'Collapse Item',
    'open' => false,
    'variant' => 'default',
])

@php
    $classes = 'collapse-component';
    switch ($variant) {
        case 'bordered':
            $classes .= ' collapse-bordered';
            break;
        case 'full-bordered':
            $classes .= ' collapse-full-bordered';
            break;
        case 'separated':
            $classes .= ' collapse-full-bordered collapse-separated';
            break;
        default:
            $classes .= ' collapse-default';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} x-data="{ open: {{ $open ? 'true' : 'false' }} }">
    <div class="collapse-header" @click="open = !open">
        <h4 class="collapse-title">{{ $title }}</h4>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" :class="{ 'rotate-180': open }" x-transition x-transition:duration.200ms>
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </div>
    <div class="collapse-body" x-show="open" x-transition x-collapse>
        {{ $slot }}
    </div>
</div>
