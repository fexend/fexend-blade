@php
    $variant = $attributes->get('variant', 'primary');
    $variant = in_array($variant, ['primary', 'secondary', 'success', 'danger', 'warning', 'info']) ? $variant : 'primary';
    $variantClass = $variant !== 'primary' ? "switch-{$variant}" : '';
@endphp

<div class="flex flex-row items-center gap-2">
    <input class="switch {{ $variantClass }}" type="checkbox" role="switch" {{ $attributes->except('variant') }} />
    <label class="label cursor-pointer" for="{{ $attributes->get('id') }}">{{ $slot }}</label>
</div>
