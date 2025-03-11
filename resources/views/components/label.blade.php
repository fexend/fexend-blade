@php
    $label = $attributes->get('label') ?? $slot;
@endphp

<label for="{{ $attributes->get('for') }}" {{ $attributes->except(['for', 'required', 'class']) }} class="{{ $attributes->get('class') }} @error($attributes->get('name')) form-error @enderror">
    {{ $label }} <span class="{{ $attributes->get('required') ? 'text-danger dark:text-danger-dark' : 'text-info dark:text-info-dark' }}">{{ $attributes->get('required') ? '*' : '' }}</span>
</label>
