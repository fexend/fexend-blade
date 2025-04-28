<?php
use function Laravel\Folio\name;
name('component.index');
?>

<x-main>
    <x-slot name="title">Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component" active></x-breadcrumb-item>
        {{-- <x-breadcrumb-item title="Accordion" active></x-breadcrumb-item> --}}
    </x-breadcrumb>
</x-main>
