<?php
use function Laravel\Folio\name;
name('element.forms.textarea');
?>
<x-main>
    <x-slot name="title">Textarea Input</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Textarea" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Textarea Component</h2>
        </x-slot>
        <p>The textarea component provides a multi-line text input field with support for labels, validation states, and various sizing options.</p>
    </x-card>

    <!-- Basic Example -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-textarea name="basic1" label="Basic Textarea" placeholder="Enter your text here"></x-textarea>

            <x-textarea name="basic2" label="Disabled Textarea" disabled>Disabled content</x-textarea>

            <x-textarea name="basic3" label="Required Textarea" required></x-textarea>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-textarea name="basic1" label="Basic Textarea" placeholder="Enter your text here"&gt;&lt;/x-textarea&gt;

&lt;x-textarea name="basic2" label="Disabled Textarea" disabled&gt;Disabled content&lt;/x-textarea&gt;

&lt;x-textarea name="basic3" label="Required Textarea" required&gt;&lt;/x-textarea&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Sizing -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Textarea Sizes</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-textarea name="size1" label="Small Textarea" class="form-sm"></x-textarea>

            <x-textarea name="size2" label="Default Textarea"></x-textarea>

            <x-textarea name="size3" label="Large Textarea" class="form-lg"></x-textarea>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-textarea name="size1" label="Small Textarea" class="form-sm"&gt;&lt;/x-textarea&gt;

&lt;x-textarea name="size2" label="Default Textarea"&gt;&lt;/x-textarea&gt;

&lt;x-textarea name="size3" label="Large Textarea" class="form-lg"&gt;&lt;/x-textarea&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API -->
    <x-card class="mb-4">
        <x-table title="Textarea Component Props">
            <x-slot name="thead">
                <tr>
                    <th>Prop</th>
                    <th>Type</th>
                    <th>Default</th>
                    <th>Description</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>name</td>
                    <td>string</td>
                    <td>required</td>
                    <td>The name attribute for the textarea input.</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The label text for the textarea.</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the textarea is required.</td>
                </tr>
                <tr>
                    <td>disabled</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the textarea is disabled.</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Additional CSS classes for styling (form-sm, form-lg).</td>
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
            <li>Always provide a meaningful label for textareas to improve accessibility.</li>
            <li>Use placeholder text to provide helpful hints about the expected input.</li>
            <li>Consider appropriate sizing based on the expected content length.</li>
            <li>Include validation messages when necessary.</li>
            <li>Use disabled state only when user input should be prevented.</li>
            <li>Maintain consistent styling with other form elements in your application.</li>
            <li>Consider using the required attribute when the field is mandatory.</li>
        </ul>
    </x-card>
</x-main>
