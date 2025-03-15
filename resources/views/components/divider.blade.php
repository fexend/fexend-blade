@props(['text' => null, 'position' => 'center', 'style' => 'solid'])

@php
    $position = $position ?? 'center';
    $style = $style ?? 'solid';
    $text = $text ?? null;
@endphp

@if (!$text)
    {{-- Simple line divider --}}
    <div {{ $attributes->merge(['class' => 'divider']) }}></div>
@elseif ($style === 'gradient' && $position === 'center')
    {{-- Gradient style divider with text --}}
    <span class="relative flex justify-center">
        <div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
        <span class="relative z-10 bg-foreground dark:bg-foreground-dark px-6">{{ $text }}</span>
    </span>
@else
    @if ($position === 'center')
        {{-- Center text divider --}}
        <span class="flex items-center">
            <span class="h-px flex-1 bg-slate-400 dark:bg-slate-500"></span>
            <span class="shrink-0 px-6">{{ $text }}</span>
            <span class="h-px flex-1 bg-slate-400 dark:bg-slate-500"></span>
        </span>
    @elseif ($position === 'left')
        {{-- Left text divider --}}
        <span class="flex items-center">
            <span class="pr-6">{{ $text }}</span>
            <span class="h-px flex-1 bg-slate-400 dark:bg-slate-500"></span>
        </span>
    @elseif ($position === 'right')
        {{-- Right text divider --}}
        <span class="flex items-center">
            <span class="h-px flex-1 bg-slate-400 dark:bg-slate-500"></span>
            <span class="pl-6">{{ $text }}</span>
        </span>
    @endif
@endif
