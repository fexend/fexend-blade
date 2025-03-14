@props([
    'type' => 'primary',
    'style' => 'default',
    'rounded' => false,
])

@php
    $classes = 'badge';
    
    // Add type and style classes
    if ($style === 'soft') {
        $classes .= " badge-{$type}-soft";
    } elseif ($style === 'outline') {
        $classes .= " badge-{$type}-outline badge-outline";
    } else {
        $classes .= " badge-{$type}";
    }
    
    // Add rounded class if needed
    if ($rounded) {
        $classes .= ' badge-rounded';
    }
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
