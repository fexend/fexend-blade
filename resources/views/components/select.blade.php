@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
@endphp

<div class="form-group">
    @if ($label)
        <x-label :for="$name" :name="$name" :required="$required">{{ $label }}</x-label>
    @endif

    <select class="select {{ $attributes->get('class') }} @error($name) input-error @enderror"
        {{ $attributes->except(['class', 'label', 'required']) }}>
        {{ $slot }}
    </select>

    @error($name)
        <span class="form-feedback form-feedback-error">{{ $message }}</span>
    @enderror
</div>
