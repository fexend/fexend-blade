@props([
    'vertical' => false,
    'step' => 1,
])

<div x-data="{ step: {{ $step }} }" {{ $attributes }}>
    <div class="stepper {{ $vertical ? 'stepper-vertical relative' : '' }}" role="list">
        {{ $slot }}
    </div>
</div>
