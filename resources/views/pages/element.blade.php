<?php
use function Laravel\Folio\name;
name('element.index');
?>

<x-main>
    <x-slot name="title">Element</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Component" active></x-breadcrumb-item>
        {{-- <x-breadcrumb-item title="Accordion" active></x-breadcrumb-item> --}}
    </x-breadcrumb>
</x-main>
