@props([
    'type' => 'primary',
    'message' => '',
    'dismissible' => false,
    'soft' => false,
    'outline' => false,
    'rounded' => false,
])

@php
    $baseClass = 'alert ' . $attributes->get('class') ?? '';
    $typeClass = '';

    if ($soft) {
        $typeClass = "alert-{$type}-soft";
    } elseif ($outline) {
        $typeClass = "alert-{$type}-outline";
    } else {
        $typeClass = "alert-{$type}";
    }

    $roundedClass = $rounded ? 'alert-rounded' : '';
    $dismissibleClass = $dismissible ? 'alert-with-close' : '';
    $classes = "{$baseClass} {$typeClass} {$roundedClass} {$dismissibleClass}";
@endphp

@if ($dismissible)
    <div x-data="{ showAlert: true }" x-show="showAlert" class="{{ $classes }}" role="alert">
        <div>
            {{ $slot ?? $message }}
        </div>
        <span @click="showAlert = false" class="alert-close">X</span>
    </div>
@else
    <div class="{{ $classes }}" role="alert">
        {{ $slot ?? $message }}
    </div>
@endif
