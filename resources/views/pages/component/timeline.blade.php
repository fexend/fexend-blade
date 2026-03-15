<?php
use function Laravel\Folio\name;
name('component.timeline');
?>

<x-main>
    <x-slot name="title">Timeline Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Timeline" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Timeline Component</h2></x-slot>
        <p>The timeline component displays a vertical sequence of events with colored dot or icon markers, timestamps, and descriptions.</p>
    </x-card>

    <!-- Vertical with Color Dots -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Vertical with Color Dots</h2></x-slot>
        <div class="mb-6">
            <x-timeline>
                <x-timeline-item title="Project Kickoff" time="January 10, 2025" description="Initial project meeting and scope definition completed." color="primary" />
                <x-timeline-item title="Design Phase" time="February 1, 2025" description="UI/UX designs approved and handed off to development." color="success" />
                <x-timeline-item title="Development In Progress" time="March 15, 2025 — ongoing" description="Frontend and backend development underway." color="warning" />
                <x-timeline-item title="QA Testing" time="Planned — April 2025" description="Quality assurance and user acceptance testing." />
            </x-timeline>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-timeline&gt;
    &lt;x-timeline-item title="Project Kickoff" time="January 10, 2025"
        description="Initial project meeting." color="primary" /&gt;
    &lt;x-timeline-item title="Design Phase" time="February 1, 2025"
        description="UI/UX designs approved." color="success" /&gt;
    &lt;x-timeline-item title="Development" time="March 15, 2025"
        description="Development underway." color="warning" /&gt;
    &lt;x-timeline-item title="QA Testing" time="Planned — April 2025"
        description="Quality assurance testing." /&gt;
&lt;/x-timeline&gt;
        </code></pre>
    </x-card>

    <!-- With Icon Dots -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">With Icon Dots</h2></x-slot>
        <div class="mb-6">
            <x-timeline>
                <x-timeline-item title="Order Placed" time="10:00 AM">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </x-slot>
                </x-timeline-item>
                <x-timeline-item title="Packed & Shipped" time="2:30 PM" color="success">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </x-slot>
                </x-timeline-item>
                <x-timeline-item title="Out for Delivery" time="9:00 AM" color="warning">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                    </x-slot>
                </x-timeline-item>
            </x-timeline>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-timeline&gt;
    &lt;x-timeline-item title="Order Placed" time="10:00 AM"&gt;
        &lt;x-slot name="icon"&gt;&lt;svg ...&gt;...&lt;/svg&gt;&lt;/x-slot&gt;
    &lt;/x-timeline-item&gt;
    &lt;x-timeline-item title="Shipped" time="2:30 PM" color="success"&gt;
        &lt;x-slot name="icon"&gt;&lt;svg ...&gt;...&lt;/svg&gt;&lt;/x-slot&gt;
    &lt;/x-timeline-item&gt;
&lt;/x-timeline&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Timeline Item Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>title</td><td>string</td><td>''</td><td>Event title</td></tr>
                <tr><td>time</td><td>string</td><td>null</td><td>Timestamp or date string</td></tr>
                <tr><td>description</td><td>string</td><td>null</td><td>Optional description text (or use default slot)</td></tr>
                <tr><td>color</td><td>string</td><td>''</td><td>primary, success, warning, danger — dot color</td></tr>
                <tr><td>icon</td><td>slot</td><td>—</td><td>SVG rendered inside an icon-dot instead of a plain dot</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Use color dots for status-driven timelines (green = done, yellow = in progress, grey = pending).</li>
            <li>Use icon dots for process or order tracking where a recognizable icon adds clarity.</li>
            <li>Keep descriptions brief — the timeline is a summary, not a full log.</li>
        </ul>
    </x-card>
</x-main>
