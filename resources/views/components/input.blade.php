@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
    $type = $attributes->get('type', 'text');
    $infoText = $attributes->get('infoText');
    $iconPosition = $attributes->get('iconPosition', 'right');
    $hasIcon = isset($iconContent) && $iconContent->isNotEmpty();

    if ($attributes->has('data-flatpickr')) {
        $type = 'text';
    }
@endphp

<div class="form-group">
    @if ($label)
        <x-label :for="$name" :name="$name" :required="$required">{{ $label }}</x-label>
    @endif

    @if ($hasIcon && $iconPosition === 'left')
        <div class="input-icon-left">
            <span class="input-icon">{{ $iconContent }}</span>
            <input type="{{ $type }}"
                class="input {{ $attributes->get('class') }} @error($name) input-error @enderror"
                {{ $attributes->except(['class', 'type', 'label', 'iconPosition', 'infoText'])->merge(['value' => old($name) ?? $attributes->get('value')]) }} />
        </div>
    @elseif ($hasIcon)
        <div class="input-icon-right">
            <input type="{{ $type }}"
                class="input {{ $attributes->get('class') }} @error($name) input-error @enderror"
                {{ $attributes->except(['class', 'type', 'label', 'iconPosition', 'infoText'])->merge(['value' => old($name) ?? $attributes->get('value')]) }} />
            <span class="input-icon">{{ $iconContent }}</span>
        </div>
    @else
        <input type="{{ $type }}"
            class="input {{ $attributes->get('class') }} @error($name) input-error @enderror"
            {{ $attributes->except(['class', 'type', 'label', 'iconPosition', 'infoText'])->merge(['value' => old($name) ?? $attributes->get('value')]) }} />
    @endif

    @if (isset($info))
        {{ $info }}
    @elseif ($infoText)
        <span class="form-feedback">{{ $infoText }}</span>
    @endif

    @error($name)
        <span class="form-feedback form-feedback-error">{{ $message }}</span>
    @enderror
</div>
