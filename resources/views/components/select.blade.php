@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
@endphp

<div class="form-group mb-2 md:mb-3 lg:mb-4">
    @if ($label)
        <x-label :for="$name" id="label-{{ $attributes->get('id') }}" :name="$name" :required="$required">{{ $label }}</x-label>
    @endif

    <select class="{{ $attributes->get('class') }} @error($name) form-error @enderror" {{ $attributes->except(['class']) }}>
        {{ $slot }}
    </select>

    @error($name)
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>
