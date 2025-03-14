@php
    $variant = $attributes->get('variant', 'primary');
    $variant = in_array($variant, ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark', 'light']) ? $variant : 'primary';
    $variant = "input-switch-{$variant}";
@endphp

<div class="flex flex-row">
    <input class="input-switch {{ $variant }}" type="checkbox" role="switch" {{ $attributes }} />
    <label class="inline-block ps-[0.15rem] hover:cursor-pointer" for="{{ $attributes->get('id') }}">{{ $slot }}</label>
</div>
