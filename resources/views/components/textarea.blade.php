@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
@endphp

<div class="form-group">
    @if ($label)
        <x-label :for="$name" :name="$name" :required="$required">{{ $label }}</x-label>
    @endif

    <textarea class="textarea {{ $attributes->get('class') }} @error($name) input-error @enderror" {{ $attributes->except(['class', 'label', 'required']) }}>{{ old($name) ?? $slot }}</textarea>

    @error($name)
        <span class="form-feedback form-feedback-error">{{ $message }}</span>
    @enderror
</div>
