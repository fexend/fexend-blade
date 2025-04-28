<?php
use function Laravel\Folio\name;
name('element.forms.input-date');
?>
<x-main>
    <x-slot name="title">Date Input</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Date Input" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Date Input Component</h2>
        </x-slot>
        <p>The date input component provides two ways to handle date inputs: native HTML5 date input and Flatpickr date picker.</p>
    </x-card>

    <!-- Native Date Input -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Native Date Input</h2>
        </x-slot>

        <div class="mb-6">
            <x-input type="date" name="native_date" label="Select Date" class="form-input w-full" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input
    type="date"
    name="native_date"
    label="Select Date"
    class="form-input w-full"
/&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Flatpickr Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Flatpickr Examples</h2>
        </x-slot>

        <!-- Basic Date Picker -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Basic Date Picker</h3>
            <x-input type="text" name="flatpickr_date" label="Select Date" class="form-input w-full" data-flatpickr="date" />
        </div>

        <!-- Date Range Picker -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Date Range Picker</h3>
            <x-input type="text" name="flatpickr_daterange" label="Select Date Range" class="form-input w-full" data-flatpickr="daterange" />
        </div>

        <!-- Date Time Picker -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Date Time Picker</h3>
            <x-input type="text" name="flatpickr_datetime" label="Select Date and Time" class="form-input w-full" data-flatpickr="datetime" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;!-- Basic Date Picker --&gt;
&lt;x-input
    type="text"
    name="flatpickr_date"
    label="Select Date"
    class="form-input w-full"
    data-flatpickr="date"
/&gt;

&lt;!-- Date Range Picker --&gt;
&lt;x-input
    type="text"
    name="flatpickr_daterange"
    label="Select Date Range"
    class="form-input w-full"
    data-flatpickr="daterange"
/&gt;

&lt;!-- Date Time Picker --&gt;
&lt;x-input
    type="text"
    name="flatpickr_datetime"
    label="Select Date and Time"
    class="form-input w-full"
    data-flatpickr="datetime"
/&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API -->
    <x-card class="mb-4">
        <x-table title="Date Input Types">
            <x-slot name="thead">
                <tr>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Example Usage</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>date</td>
                    <td>Basic date picker</td>
                    <td>data-flatpickr="date"</td>
                </tr>
                <tr>
                    <td>datetime</td>
                    <td>Date and time picker</td>
                    <td>data-flatpickr="datetime"</td>
                </tr>
                <tr>
                    <td>daterange</td>
                    <td>Date range picker</td>
                    <td>data-flatpickr="daterange"</td>
                </tr>
                <tr>
                    <td>weekday</td>
                    <td>Only weekdays selectable</td>
                    <td>data-flatpickr="weekday"</td>
                </tr>
                <tr>
                    <td>weekend</td>
                    <td>Only weekends selectable</td>
                    <td>data-flatpickr="weekend"</td>
                </tr>
                <tr>
                    <td>future</td>
                    <td>Only future dates</td>
                    <td>data-flatpickr="future"</td>
                </tr>
                <tr>
                    <td>past</td>
                    <td>Only past dates</td>
                    <td>data-flatpickr="past"</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Use native date input for basic date selection needs</li>
            <li>Use Flatpickr when you need more advanced features like date ranges or specific formatting</li>
            <li>Always provide clear labels and placeholders</li>
            <li>Consider using date restrictions when appropriate (future dates only, weekdays only, etc.)</li>
            <li>Use appropriate date formats based on your locale and requirements</li>
        </ul>
    </x-card>
</x-main>
