@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
@endphp

<div class="form-group">
    @if ($label)
        <x-label :for="$name" id="label-{{ $attributes->get('id') }}" :name="$name" :required="$required">{{ $label }}</x-label>
    @endif

    <select class="{{ $attributes->get('class') }} @error($name) input-error @enderror" {{ $attributes->except(['class']) }}>
        {{ $slot }}
    </select>

    @error($name)
        <span class="form-feedback form-feedback-error">{{ $message }}</span>
    @enderror
</div>
