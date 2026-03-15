@props([
    'value' => '0',
    'label' => 'Stat',
    'color' => '',
    'filled' => false,
    'hover' => false,
    'trend' => null,
    'trendValue' => null,
])

@php
    $classes = 'stat-card';
    if ($filled && $color) $classes .= " stat-card-{$color}";
    if ($hover) $classes .= ' stat-card-hover';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if (isset($icon) || $color)
        <div class="flex items-center justify-between mb-4">
            @if (isset($icon))
                <div class="stat-card-icon {{ !$filled && $color ? "stat-card-icon-{$color}" : '' }}">
                    {{ $icon }}
                </div>
            @endif
        </div>
    @endif

    <div class="stat-card-value">{{ $value }}</div>
    <div class="stat-card-label">{{ $label }}</div>

    @if ($trend && $trendValue)
        <div class="stat-card-trend stat-card-trend-{{ $trend }}">
            @if ($trend === 'up')
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
            @elseif ($trend === 'down')
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"/></svg>
            @endif
            {{ $trendValue }}
        </div>
    @endif

    @if (isset($footer))
        {{ $footer }}
    @endif
</div>
