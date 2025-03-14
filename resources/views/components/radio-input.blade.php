@php
    $name = $attributes->get('name');
@endphp
<label class="form-radio" for="label-{{ $attributes->get('id') ?? $attributes->get('name') }}">
    <input type="radio" {{ $attributes }} />
    {{ $slot }}
</label>
@error($name)
    <span class="form-error">{{ $message }}</span>
@enderror
