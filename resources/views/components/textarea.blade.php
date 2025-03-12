@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
@endphp

<div class="form-group mb-2 md:mb-3 lg:mb-4">
    @if ($label)
        <x-label :for="$name" id="label-{{ $attributes->get('id') }}" :name="$name" :required="$required">{{ $label }}</x-label>
    @endif

    <textarea class="{{ $attributes->get('class') }} @error($name) form-error @enderror" {{ $attributes->merge([
            'value' => old($name) ?? $attributes->get('value'),
        ])->except(['class']) }}>{{ old($name) ?? $slot }}</textarea>

    @error($name)
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>
