@props([
    'type' => 'primary',
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
            {{ $slot }}
        </div>
        <button @click="showAlert = false" class="alert-close" aria-label="Close alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
@else
    <div class="{{ $classes }}" role="alert">
        {{ $slot }}
    </div>
@endif
