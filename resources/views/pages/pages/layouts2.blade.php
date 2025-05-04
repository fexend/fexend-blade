<?php
use function Laravel\Folio\name;
name('pages.layouts-2');
?>

<x-main title="Layouts 2" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Layouts 2" active></x-breadcrumb-item>
    </x-breadcrumb>
</x-main>
