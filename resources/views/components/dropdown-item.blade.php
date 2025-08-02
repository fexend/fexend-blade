<!-- filepath: /home/zulfi/development/fexend-blade/resources/views/components/dropdown-item.blade.php -->
@props([
    'href' => '#',
    'method' => 'GET',
])

@php
    $classes = 'dropdown-item';
@endphp

@if ($method === 'GET')
    <a href="{{ $href }}" class="{{ $classes }}" role="menuitem" @click="$parent.close()">
        {{ $slot }}
    </a>
@else
    <form action="{{ $href }}" method="POST" class="w-full">
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif
        <button type="submit" class="{{ $classes }}" role="menuitem" @click="$parent.close()">
            {{ $slot }}
        </button>
    </form>
@endif
