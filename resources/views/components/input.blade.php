@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $icon = $attributes->get('icon');
    $iconPosition = $attributes->get('iconPosition', 'right');
    $name = $attributes->get('name');
    $type = $attributes->get('type', 'text');
    $infoText = $attributes->get('infoText');
    $info = $info ?? null;

    // Add Flatpickr support
    $hasFlatpickr = $attributes->has('data-flatpickr');
    if ($hasFlatpickr) {
        $type = 'text';
    }
@endphp

@if (!$icon)
    <div class="form-group">
        @if ($label)
            <x-label :for="$name" id="label-{{ $attributes->get('id') }}" :name="$name" :required="$required">{{ $label }}</x-label>
        @endif
        <input type="{{ $type }}" class="{{ $attributes->get('class') }} @error($name) input-error @enderror" {{ $attributes->merge([
                'value' => old($name) ?? $attributes->get('value'),
            ])->except(['class', 'type']) }} />
        @if (isset($info))
            {{ $info }}
        @elseif ($infoText)
            <span class="form-feedback">{{ $infoText }}</span>
        @endif
        @error($name)
            <span class="form-feedback form-feedback-error">{{ $message }}</span>
        @enderror
    </div>
@endif

@if ($icon)

    @if ($iconPosition === 'left')
        <div class="form-group input-icon-left">
            @if ($label)
                <x-label :for="$name" id="label-{{ $attributes->get('id') }}" :name="$name" :required="$required">{{ $label }}</x-label>
            @endif
            <input type="{{ $type }}" class="{{ $attributes->get('class') }} @error($name) input-error @enderror" {{ $attributes->merge([
                    'value' => old($name) ?? $attributes->get('value'),
                ])->except(['class', 'type']) }} />

            <span class="input-icon">{{ $iconContent }}</span>
        </div>
        @if (isset($info))
            {{ $info }}
        @elseif ($infoText)
            <span class="form-feedback">{{ $infoText }}</span>
        @endif
        @error($name)
            <span class="form-feedback form-feedback-error">{{ $message }}</span>
        @enderror
    @endif

    @if ($iconPosition !== 'left')
        <div class="form-group input-icon-right">
            @if ($label)
                <x-label :for="$name" id="label-{{ $attributes->get('id') }}" :name="$name" :required="$required">{{ $label }}</x-label>
            @endif
            <input type="{{ $type }}" class="{{ $attributes->get('class') }} @error($name) input-error @enderror" {{ $attributes->merge([
                    'value' => old($name) ?? $attributes->get('value'),
                ])->except(['class', 'type']) }} />

            <span class="input-icon">{{ $iconContent }}</span>
        </div>
        @if (isset($info))
            {{ $info }}
        @elseif ($infoText)
            <span class="form-feedback">{{ $infoText }}</span>
        @endif

        @error($name)
            <span class="form-feedback form-feedback-error">{{ $message }}</span>
        @enderror
    @endif
@endif
