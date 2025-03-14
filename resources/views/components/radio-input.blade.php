@php
    $name = $attributes->get('name');
    $style = $attributes->get('style', 'basic');

    $buttonVariant = $attributes->get('variant', 'primary');
    $buttonVariant = in_array($buttonVariant, ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark', 'light']) ? $buttonVariant : 'primary';
    $buttonVariant = "radio-button-{$buttonVariant}";
@endphp

@if ($style === 'basic')
    <label class="form-radio" for="{{ $attributes->get('id') ?? $attributes->get('name') }}">
        <input type="radio" {{ $attributes }} />
        {{ $slot }}
    </label>
    @error($name)
        <span class="form-error">{{ $message }}</span>
    @enderror
@endif

@if ($style === 'card')
    <label for="{{ $attributes->get('id') ?? $name }}" class="radio-card">
        <div>
            {{ $slot }}
        </div>

        <input type="radio" {{ $attributes }} />
    </label>
    @error($name)
        <span class="form-error">{{ $message }}</span>
    @enderror
@endif

@if ($style === 'button')
    <label for="{{ $attributes->get('id') ?? $name }}" class="radio-button {{ $buttonVariant }}">
        <input type="radio" {{ $attributes }} class="sr-only" />
        <p class="text-sm font-medium">{{ $slot }}</p>
    </label>
    @error($name)
        <span class="form-error">{{ $message }}</span>
    @enderror
@endif
