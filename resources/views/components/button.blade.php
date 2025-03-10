@php
    $link = $attributes->get('link');
@endphp

@if ($link)
    <a href="{{ $link }}" {{ $attributes->merge([
        'class' => 'button',
    ]) }}>{{ $slot }}</a>
@endif

@if (!$link)
    <button {{ $attributes->merge([
        'class' => 'button',
    ]) }}>{{ $slot }}</button>
@endif
