<?php
use function Laravel\Folio\name;
name('component.pagination');
?>

<x-main>
    <x-slot name="title">Pagination Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Pagination" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Pagination Component</h2></x-slot>
        <p>The pagination component wraps Laravel's paginator to render page navigation with Fexend's design tokens. Pass a <code>$paginator</code> object from your controller — no extra markup needed.</p>
    </x-card>

    <!-- Default Pagination (Static Demo) -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Default</h2></x-slot>
        <div class="mb-6">
            <nav class="pagination" aria-label="Page navigation example">
                <a href="#" class="pagination-link" aria-label="Previous page">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </a>
                <a href="#" class="pagination-link">1</a>
                <a href="#" class="pagination-link active" aria-current="page">2</a>
                <a href="#" class="pagination-link">3</a>
                <span class="pagination-page text-slate-400">...</span>
                <a href="#" class="pagination-link">10</a>
                <a href="#" class="pagination-link" aria-label="Next page">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
            </nav>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
{{-- In your controller --}}
$users = User::paginate(15);

{{-- In your view --}}
&lt;x-pagination :paginator="$users" /&gt;
        </code></pre>
    </x-card>

    <!-- Compact Pagination (Static Demo) -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Compact</h2></x-slot>
        <div class="mb-6">
            <nav class="pagination" aria-label="Compact pagination example">
                <a href="#" class="pagination-link" aria-label="First">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7M19 19l-7-7 7-7"/></svg>
                </a>
                <a href="#" class="pagination-link" aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </a>
                <span class="pagination-page text-sm text-slate-600 dark:text-slate-400 px-2">Page 3 of 10</span>
                <a href="#" class="pagination-link" aria-label="Next">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
                <a href="#" class="pagination-link" aria-label="Last">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5l7 7-7 7M13 5l7 7-7 7"/></svg>
                </a>
            </nav>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;nav class="pagination"&gt;
    &lt;a href="#" class="pagination-link"&gt;&lt;!-- first svg --&gt;&lt;/a&gt;
    &lt;a href="#" class="pagination-link"&gt;&lt;!-- prev svg --&gt;&lt;/a&gt;
    &lt;span class="pagination-page"&gt;Page 3 of 10&lt;/span&gt;
    &lt;a href="#" class="pagination-link"&gt;&lt;!-- next svg --&gt;&lt;/a&gt;
    &lt;a href="#" class="pagination-link"&gt;&lt;!-- last svg --&gt;&lt;/a&gt;
&lt;/nav&gt;
        </code></pre>
    </x-card>

    <!-- With Page Size Select -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">With Page Size Select</h2></x-slot>
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <span class="text-sm text-slate-600 dark:text-slate-400">Rows per page:</span>
                <select class="select w-20 py-1 text-sm">
                    <option>10</option><option>25</option><option>50</option><option>100</option>
                </select>
            </div>
            <nav class="pagination" aria-label="Page navigation with size">
                <a href="#" class="pagination-link">1</a>
                <a href="#" class="pagination-link active">2</a>
                <a href="#" class="pagination-link">3</a>
                <a href="#" class="pagination-link">4</a>
                <a href="#" class="pagination-link">5</a>
            </nav>
        </div>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Pagination Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>paginator</td><td>LengthAwarePaginator</td><td>null</td><td>Laravel paginator instance from <code>Model::paginate()</code></td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Always use <code>paginate()</code> in controllers, not <code>get()</code>, when rendering paged lists.</li>
            <li>Wrap the component in a conditional: <code>@if ($users->hasPages())</code> to hide it on single-page results.</li>
            <li>Combine with a page-size select for data-heavy tables.</li>
        </ul>
    </x-card>
</x-main>
