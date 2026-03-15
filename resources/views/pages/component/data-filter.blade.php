<?php
use function Laravel\Folio\name;
name('component.data-filter');
?>

<x-main>
    <x-slot name="title">Data Filter Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Data Filter" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Data Filter Component</h2></x-slot>
        <p>The data filter provides a search bar with chip-based filter toggles. Combine it with a data table or list to let users narrow results without a page reload.</p>
    </x-card>

    <!-- Filter Bar with Chips -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Filter Bar with Chips</h2></x-slot>
        <div class="mb-6">
            <x-data-filter
                :filters="['React', 'Vue', 'Angular', 'Svelte']"
                label="Framework:"
                searchPlaceholder="Search projects..."
            />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-data-filter
    :filters="['React', 'Vue', 'Angular', 'Svelte']"
    label="Framework:"
    searchPlaceholder="Search projects..."
/&gt;
        </code></pre>
    </x-card>

    <!-- Search Only (no chips) -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Search Only</h2></x-slot>
        <div class="mb-6">
            <x-data-filter searchPlaceholder="Search users..." :showCount="false" :showClear="true" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-data-filter searchPlaceholder="Search users..." :showCount="false" /&gt;
        </code></pre>
    </x-card>

    <!-- Active Chips with Remove -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Active Filter Chips with Remove</h2></x-slot>
        <div class="mb-6" x-data="{
            chips: ['Status: Active', 'Type: Admin', 'Date: This Month', 'Role: Editor'],
            remove(chip) { this.chips = this.chips.filter(c => c !== chip); }
        }">
            <div class="flex flex-wrap gap-2 items-center">
                <span class="text-sm text-slate-500 dark:text-slate-400">Active filters:</span>
                <template x-for="chip in chips" :key="chip">
                    <button class="data-filter-chip active" @click="remove(chip)">
                        <span x-text="chip"></span>
                        <span class="data-filter-chip-remove">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </span>
                    </button>
                </template>
                <span x-show="chips.length === 0" class="text-sm italic text-slate-400">All filters cleared</span>
            </div>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;div x-data="{ chips: ['Status: Active', 'Role: Editor'], remove(c) { this.chips = this.chips.filter(x => x !== c); } }"&gt;
    &lt;template x-for="chip in chips" :key="chip"&gt;
        &lt;button class="data-filter-chip active" @click="remove(chip)"&gt;
            &lt;span x-text="chip"&gt;&lt;/span&gt;
            &lt;span class="data-filter-chip-remove"&gt;...&lt;/span&gt;
        &lt;/button&gt;
    &lt;/template&gt;
&lt;/div&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Data Filter Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>filters</td><td>array</td><td>[]</td><td>List of filter chip labels</td></tr>
                <tr><td>label</td><td>string</td><td>null</td><td>Label shown before the chips (e.g. "Status:")</td></tr>
                <tr><td>searchPlaceholder</td><td>string</td><td>'Search...'</td><td>Input placeholder text</td></tr>
                <tr><td>showSearch</td><td>boolean</td><td>true</td><td>Show/hide the search input</td></tr>
                <tr><td>showCount</td><td>boolean</td><td>true</td><td>Show active filter count</td></tr>
                <tr><td>showClear</td><td>boolean</td><td>true</td><td>Show "Clear all" button when filters active</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Limit filter chips to 5–7 options; use a dropdown for larger option sets.</li>
            <li>Always provide a "Clear all" affordance so users can reset without thinking.</li>
            <li>Show the active filter count so users know their results are filtered.</li>
            <li>Connect the <code>search</code> and <code>activeFilters</code> Alpine state to a <code>@watch</code> or Livewire filter for real-time results.</li>
        </ul>
    </x-card>
</x-main>
