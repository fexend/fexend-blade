<?php
use function Laravel\Folio\name;
name('pages.layouts-1');
?>

<x-main title="Layouts 1">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Layouts 1" active></x-breadcrumb-item>
    </x-breadcrumb>
</x-main>
