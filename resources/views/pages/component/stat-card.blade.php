<?php
use function Laravel\Folio\name;
name('component.stat-card');
?>

<x-main>
    <x-slot name="title">Stat Card Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Stat Card" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Stat Card Component</h2></x-slot>
        <p>Stat cards display key metrics with icons, color coding, and trend indicators. Use them on dashboards to surface at-a-glance KPIs.</p>
    </x-card>

    <!-- With Icon Colors & Trends -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">With Icon Colors & Trends</h2></x-slot>
        <div class="mb-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-stat-card value="$24,500" label="Total Revenue" color="primary" trend="up" trendValue="+12.5% from last month">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="1,284" label="Active Users" color="success" trend="up" trendValue="+8.2% this week">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="342" label="Orders" color="danger" trend="down" trendValue="-3.1% this week">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="4.8" label="Avg. Rating" color="warning" trend="neutral" trendValue="No change">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="89%" label="Conversion Rate" color="secondary" trend="up" trendValue="+2.4%">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </x-slot>
            </x-stat-card>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-stat-card value="$24,500" label="Total Revenue" color="primary" trend="up" trendValue="+12.5% from last month"&gt;
    &lt;x-slot name="icon"&gt;
        &lt;svg ...&gt;...&lt;/svg&gt;
    &lt;/x-slot&gt;
&lt;/x-stat-card&gt;
        </code></pre>
    </x-card>

    <!-- Filled Color Variants -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Filled Color Variants</h2></x-slot>
        <div class="mb-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-stat-card value="$24,500" label="Total Revenue" color="primary" :filled="true">
                <x-slot name="icon"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></x-slot>
            </x-stat-card>
            <x-stat-card value="1,284" label="Active Users" color="success" :filled="true">
                <x-slot name="icon"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></x-slot>
            </x-stat-card>
            <x-stat-card value="342" label="Orders" color="danger" :filled="true">
                <x-slot name="icon"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></x-slot>
            </x-stat-card>
            <x-stat-card value="$1,800" label="Expenses" color="warning" :filled="true">
                <x-slot name="icon"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></x-slot>
            </x-stat-card>
            <x-stat-card value="98" label="Tasks Done" color="info" :filled="true">
                <x-slot name="icon"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></x-slot>
            </x-stat-card>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-stat-card value="$24,500" label="Total Revenue" color="primary" :filled="true"&gt;
    &lt;x-slot name="icon"&gt;...&lt;/x-slot&gt;
&lt;/x-stat-card&gt;
        </code></pre>
    </x-card>

    <!-- Hover Variant -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Hover Effect</h2></x-slot>
        <div class="mb-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-stat-card value="15.2 TB" label="Storage Used" color="info" :hover="true" trend="down" trendValue="-0.5%">
                <x-slot name="icon"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg></x-slot>
            </x-stat-card>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-stat-card value="15.2 TB" label="Storage Used" color="info" :hover="true" trend="down" trendValue="-0.5%"&gt;
    &lt;x-slot name="icon"&gt;...&lt;/x-slot&gt;
&lt;/x-stat-card&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Stat Card Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>value</td><td>string</td><td>'0'</td><td>The main metric value to display</td></tr>
                <tr><td>label</td><td>string</td><td>'Stat'</td><td>Descriptive label below the value</td></tr>
                <tr><td>color</td><td>string</td><td>''</td><td>primary, secondary, success, danger, warning, info</td></tr>
                <tr><td>filled</td><td>boolean</td><td>false</td><td>Applies a filled background using the color</td></tr>
                <tr><td>hover</td><td>boolean</td><td>false</td><td>Adds a hover lift effect</td></tr>
                <tr><td>trend</td><td>string</td><td>null</td><td>up, down, neutral — shows trend indicator</td></tr>
                <tr><td>trendValue</td><td>string</td><td>null</td><td>Text describing the trend (e.g. "+12.5%")</td></tr>
                <tr><td>icon</td><td>slot</td><td>—</td><td>SVG icon rendered inside the icon box</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Limit dashboard stat cards to 4–6 to avoid cognitive overload.</li>
            <li>Use <code>trend</code> to give context — a raw number alone is less meaningful than a comparison.</li>
            <li>Use filled variants sparingly — they draw the eye and work best for primary KPIs.</li>
        </ul>
    </x-card>
</x-main>
