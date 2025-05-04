<?php
use function Laravel\Folio\name;
name('pages.layouts-3');
?>

<x-main title="Layouts 3" :isSidebarOpen="true" :sidebarMenuIcon="false">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Layouts 3" active></x-breadcrumb-item>
    </x-breadcrumb>
</x-main>
