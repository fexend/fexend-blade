@props([
    'id' => null,
    'label' => null,
    'mode' => 'single',
    'placeholder' => 'Select date',
    'showIcon' => true,
    'name' => null,
    'value' => null,
    'required' => false,
    'disabled' => false,
])

@php
    $inputId = $id ?? 'fp-' . uniqid();
    $isDateTime = $mode === 'datetime';
    $isTime = $mode === 'time';
    $isRange = $mode === 'range';
    $isMultiple = $mode === 'multiple';
@endphp

<div class="form-group" x-data x-init="
    flatpickr('#{{ $inputId }}', {
        @if ($isDateTime)
        enableTime: true,
        dateFormat: 'Y-m-d H:i',
        @elseif ($isTime)
        enableTime: true,
        noCalendar: true,
        dateFormat: 'H:i',
        @elseif ($isRange)
        mode: 'range',
        @elseif ($isMultiple)
        mode: 'multiple',
        @endif
    });
">
    @if ($label)
        <label class="label" for="{{ $inputId }}">{{ $label }}</label>
    @endif

    @if ($showIcon && !$isTime)
        <div class="input-icon-left">
            <span class="input-icon">
                @if ($isDateTime)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                @endif
            </span>
            <input
                id="{{ $inputId }}"
                name="{{ $name }}"
                type="text"
                class="input"
                placeholder="{{ $placeholder }}"
                value="{{ $value }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes->except(['id', 'label', 'mode', 'placeholder', 'showIcon', 'name', 'value', 'required', 'disabled']) }}
            >
        </div>
    @else
        <input
            id="{{ $inputId }}"
            name="{{ $name }}"
            type="text"
            class="input"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            {{ $required ? 'required' : '' }}
            {{ $disabled ? 'disabled' : '' }}
            {{ $attributes->except(['id', 'label', 'mode', 'placeholder', 'showIcon', 'name', 'value', 'required', 'disabled']) }}
        >
    @endif
</div>
