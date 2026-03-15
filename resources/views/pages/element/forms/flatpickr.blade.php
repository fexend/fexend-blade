<?php
use function Laravel\Folio\name;
name('element.forms.flatpickr');
?>

<x-main>
    <x-slot name="title">Flatpickr Element</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Flatpickr" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Flatpickr Element</h2></x-slot>
        <p>The <code>&lt;x-flatpickr&gt;</code> component wraps Flatpickr into a self-contained Blade component. It initializes the picker via <code>x-init</code> and supports all common modes: single date, date-time, time, range, and multiple.</p>
    </x-card>

    <!-- Date Picker -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Date Picker</h2></x-slot>
        <div class="mb-6 max-w-sm">
            <x-flatpickr label="Date" mode="single" placeholder="Select date" name="date" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-flatpickr label="Date" mode="single" name="date" /&gt;
        </code></pre>
    </x-card>

    <!-- Date & Time Picker -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Date & Time Picker</h2></x-slot>
        <div class="mb-6 max-w-sm">
            <x-flatpickr label="Date & Time" mode="datetime" placeholder="Select date and time" name="datetime" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-flatpickr label="Date &amp; Time" mode="datetime" name="datetime" /&gt;
        </code></pre>
    </x-card>

    <!-- Time Only -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Time Picker</h2></x-slot>
        <div class="mb-6 max-w-sm">
            <x-flatpickr label="Time Only" mode="time" placeholder="Select time" name="time" :showIcon="false" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-flatpickr label="Time Only" mode="time" name="time" :showIcon="false" /&gt;
        </code></pre>
    </x-card>

    <!-- Date Range -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Date Range Picker</h2></x-slot>
        <div class="mb-6 max-w-sm">
            <x-flatpickr label="Date Range" mode="range" placeholder="Select date range" name="date_range" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-flatpickr label="Date Range" mode="range" name="date_range" /&gt;
        </code></pre>
    </x-card>

    <!-- Multiple Dates -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Multiple Date Selection</h2></x-slot>
        <div class="mb-6 max-w-sm">
            <x-flatpickr label="Multiple Dates" mode="multiple" placeholder="Select multiple dates" name="dates" />
            <span class="form-feedback">Hold Ctrl/Cmd to select multiple dates.</span>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-flatpickr label="Multiple Dates" mode="multiple" name="dates" /&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Flatpickr Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>id</td><td>string</td><td>auto-generated</td><td>Input ID used by Flatpickr to initialize</td></tr>
                <tr><td>label</td><td>string</td><td>null</td><td>Label text above the input</td></tr>
                <tr><td>mode</td><td>string</td><td>'single'</td><td>single, datetime, time, range, multiple</td></tr>
                <tr><td>placeholder</td><td>string</td><td>'Select date'</td><td>Input placeholder</td></tr>
                <tr><td>showIcon</td><td>boolean</td><td>true</td><td>Show calendar/clock icon inside input</td></tr>
                <tr><td>name</td><td>string</td><td>null</td><td>HTML name attribute for form submission</td></tr>
                <tr><td>value</td><td>string</td><td>null</td><td>Pre-filled value (e.g. old() or model date)</td></tr>
                <tr><td>required</td><td>boolean</td><td>false</td><td>Marks the input as required</td></tr>
                <tr><td>disabled</td><td>boolean</td><td>false</td><td>Disables the picker</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Use <code>mode="range"</code> for date interval inputs (event duration, booking periods).</li>
            <li>Use <code>mode="datetime"</code> when you need both date and time precision (appointment scheduling).</li>
            <li>Pass <code>:value="old('date', $model->date)"</code> to pre-fill on edit forms.</li>
            <li>Always validate on the server — Flatpickr only controls the UI.</li>
        </ul>
    </x-card>
</x-main>
