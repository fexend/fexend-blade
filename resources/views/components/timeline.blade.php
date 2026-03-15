@props([])

<div {{ $attributes->merge(['class' => 'relative timeline']) }}>
    {{ $slot }}
</div>
