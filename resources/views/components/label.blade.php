@php
    $required = $attributes->get('required');
    $name = $attributes->get('name');
    $extraClass = $attributes->get('class', '');
    $labelClass = 'label ' . ($required ? 'label-required ' : '') . $extraClass;
@endphp

<label for="{{ $attributes->get('for') }}" {{ $attributes->except(['for', 'required', 'name', 'class']) }} class="{{ trim($labelClass) }}">
    {{ $slot }}
</label>
