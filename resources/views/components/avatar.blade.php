@props([
    'size' => '',
    'color' => '',
    'square' => false,
    'image' => null,
    'alt' => '',
    'status' => null,
])

@php
    $classes = 'avatar';
    if ($size) $classes .= " avatar-{$size}";
    if ($color) $classes .= " avatar-{$color}";
    if ($square) $classes .= ' avatar-square';
@endphp

<div class="relative inline-block">
    @if ($image)
        <img src="{{ $image }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => $classes]) }}>
    @else
        <span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
    @endif

    @if ($status)
        <span class="avatar-status avatar-status-{{ $status }}"></span>
    @endif
</div>
