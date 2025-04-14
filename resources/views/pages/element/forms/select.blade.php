<?php
use function Laravel\Folio\name;
name('element.forms.select');
?>
<x-main>
    <x-slot name="title">Select Input</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Select Input" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Select Input Component</h2>
        </x-slot>
        <p>The select input component provides two ways to handle dropdown selections: native HTML select and enhanced Select2 dropdown.</p>
    </x-card>

    <!-- Basic Select -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Select</h2>
        </x-slot>

        <div class="mb-6">
            <x-select name="basic_select" label="Basic Select" class="form-input w-full">
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </x-select>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-select
    name="basic_select"
    label="Basic Select"
    class="form-input w-full"
&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/option&gt;
    &lt;option value="3"&gt;Option 3&lt;/x-select&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Select2 Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Select2 Examples</h2>
        </x-slot>

        <!-- Basic Select2 -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Basic Select2</h3>
            <x-select name="select2_basic" label="Enhanced Select" class="form-input w-full" id="select-2basic" data-select2>
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </x-select>
        </div>

        <!-- Multiple Select -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Multiple Select</h3>
            <x-select name="select2_multiple" label="Multiple Select" class="form-input w-full" data-select2 multiple>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </x-select>
        </div>

        <!-- Searchable Select -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Searchable Select</h3>
            <x-select name="select2_search" label="Searchable Select" class="form-input w-full" data-select2>
                <option value="">Search options...</option>
                @foreach (range(1, 10) as $i)
                    <option value="{{ $i }}">Option {{ $i }}</option>
                @endforeach
            </x-select>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;!-- Basic Select2 --&gt;
&lt;x-select
    name="select2_basic"
    label="Enhanced Select"
    class="form-input w-full"
    data-select2
&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/option&gt;
    &lt;option value="3"&gt;Option 3&lt;/x-select&gt;

&lt;!-- Multiple Select --&gt;
&lt;x-select
    name="select2_multiple"
    label="Multiple Select"
    class="form-input w-full"
    data-select2
    multiple
&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/option&gt;
    &lt;option value="3"&gt;Option 3&lt;/x-select&gt;

&lt;!-- Searchable Select --&gt;
&lt;x-select
    name="select2_search"
    label="Searchable Select"
    class="form-input w-full"
    data-select2
&gt;
    &lt;option value=""&gt;Search options...&lt;/option&gt;
    @foreach (range(1, 10) as $i)
&lt;option value="{{ $i }}"&gt;Option {{ $i }}&lt;/option&gt;
@endforeach
&lt;/x-select&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Select Sizes -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Select Sizes</h2>
        </x-slot>

        <!-- Small Select -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Small Select</h3>
            <x-select name="select_sm" label="Small Select" class="form-input form-sm w-full">
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </x-select>
        </div>

        <!-- Default Select -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Default Select</h3>
            <x-select name="select_default" label="Default Select" class="form-input w-full">
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </x-select>
        </div>

        <!-- Large Select -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Large Select</h3>
            <x-select name="select_lg" label="Large Select" class="form-input form-lg w-full">
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </x-select>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;!-- Small Select --&gt;
&lt;x-select name="select_sm" label="Small Select" class="form-input form-sm w-full"&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/x-select&gt;

&lt;!-- Default Select --&gt;
&lt;x-select name="select_default" label="Default Select" class="form-input w-full"&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/x-select&gt;

&lt;!-- Large Select --&gt;
&lt;x-select name="select_lg" label="Large Select" class="form-input form-lg w-full"&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/x-select&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Rounded Select -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Rounded Select</h2>
        </x-slot>

        <!-- Basic Rounded Select -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Basic Rounded Select</h3>
            <x-select name="select_rounded" label="Rounded Select" class="form-input form-rounded w-full">
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </x-select>
        </div>

        <!-- Rounded Select2 -->
        <div class="mb-6">
            <h3 class="text-lg font-medium mb-4">Rounded Select2</h3>
            <x-select name="select2_rounded" label="Rounded Select2" class="form-input form-rounded w-full" data-select2>
                <option value="">Select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </x-select>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;!-- Basic Rounded Select --&gt;
&lt;x-select name="select_rounded" label="Rounded Select" class="form-input form-rounded w-full"&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/x-select&gt;

&lt;!-- Rounded Select2 --&gt;
&lt;x-select name="select2_rounded" label="Rounded Select2" class="form-input form-rounded w-full" data-select2&gt;
    &lt;option value=""&gt;Select an option&lt;/option&gt;
    &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;option value="2"&gt;Option 2&lt;/x-select&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API -->
    <x-card class="mb-4">
        <x-table title="Select Component Properties">
            <x-slot name="thead">
                <tr>
                    <th>Property</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Default</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>name</td>
                    <td>Input name attribute</td>
                    <td>string</td>
                    <td>required</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td>Label text for the select</td>
                    <td>string</td>
                    <td>null</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>Makes the field required</td>
                    <td>boolean</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>multiple</td>
                    <td>Enables multiple selection</td>
                    <td>boolean</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>data-select2</td>
                    <td>Enables Select2 enhancement</td>
                    <td>attribute</td>
                    <td>null</td>
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
            <li>Use basic select for simple dropdown needs</li>
            <li>Use Select2 when you need search functionality or multiple selections</li>
            <li>Always provide clear labels and placeholders</li>
            <li>Group related options using optgroup when appropriate</li>
            <li>Include a default "Select an option" placeholder for nullable fields</li>
            <li>Consider using data-select2 attribute for enhanced user experience</li>
            <li>Implement proper validation and error handling</li>
        </ul>
    </x-card>

    <x-slot name="scripts">
        <!-- Remove the inline script as it will be handled by select2.js -->
    </x-slot>
</x-main>
