<?php
use function Laravel\Folio\name;
name('component.index');
?>

<x-main>
    <x-slot name="title">Components</x-slot>
    <x-slot name="description">This is the components page.</x-slot>
    <x-slot name="keywords">components, blade, laravel</x-slot>
    <x-slot name="active">components</x-slot>
    <x-slot name="body">
        <h1>Components</h1>
        <p>This is the components page.</p>
    </x-slot>
</x-main>
