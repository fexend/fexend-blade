@props([
    'variant' => null, // primary, secondary, info, success, warning, danger
    'size' => null, // sm, lg
    'loading' => false,
    'hover' => false,
    'margin' => 'mt-4',
])

@php
    $classes = ['card', $margin, $size ? "card-{$size}" : '', $variant ? "card-{$variant}" : '', $hover ? 'card-hover' : '', $loading ? 'loading' : ''];
@endphp

<div {{ $attributes->merge(['class' => implode(' ', array_filter($classes))]) }}>
    @if (isset($header))
        <div class="card-header">
            {{ $header }}
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if (isset($footer))
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
