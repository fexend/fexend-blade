@php
    $name = $attributes->get('name');
    $style = $attributes->get('style', 'basic');
    $checked = $attributes->get('checked', false);
    $id = $attributes->get('id');

    $variant = $attributes->get('variant', 'primary');
    $variant = in_array($variant, ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark', 'light']) ? $variant : 'primary';
    $variant = "label-checkbox-card-{$variant}";
@endphp

@if ($style === 'basic')
    <label for="{{ $id ?? $name }}" class="label-checkbox">
        <input type="checkbox" {{ $attributes->merge(['class' => 'input-checkbox']) }} />
        {{ $slot }}
    </label>
    @error($name)
        <span class="form-error">{{ $message }}</span>
    @enderror
@endif

@if ($style === 'divider')
    <label for="{{ $id ?? $name }}" class="label-checkbox-divider">
        <input type="checkbox" {{ $attributes->merge(['class' => 'input-checkbox']) }} />
        <div>
            {{ $slot }}
        </div>
    </label>
    @error($name)
        <span class="form-error">{{ $message }}</span>
    @enderror
@endif

@if ($style === 'card')
    <label for="{{ $id ?? $name }}" class="label-checkbox-card {{ $variant }}">
        <input type="checkbox" {{ $attributes->merge(['class' => 'input-checkbox']) }} />

        <div>
            {{ $slot }}
        </div>
    </label>
@endif
