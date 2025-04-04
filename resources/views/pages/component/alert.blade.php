<?php
use function Laravel\Folio\name;
name('component.alert');
?>

<x-main>
    <x-slot name="title">Alert Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Alert" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Alert Component</h2>
        </x-slot>
        <p>The alert component provides feedback messages for user actions, notifications, and status updates. Alerts are available in different styles and can be dismissible.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-alert type="primary">This is a primary alert</x-alert>
            <x-alert type="success">This is a success alert</x-alert>
            <x-alert type="danger">This is a danger alert</x-alert>
            <x-alert type="warning">This is a warning alert</x-alert>
            <x-alert type="info">This is an info alert</x-alert>
            <x-alert type="dark">This is a dark alert</x-alert>
            <x-alert type="white">This is a white alert</x-alert>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-alert type="primary"&gt;This is a primary alert&lt;/x-alert&gt;
&lt;x-alert type="success"&gt;This is a success alert&lt;/x-alert&gt;
&lt;x-alert type="danger"&gt;This is a danger alert&lt;/x-alert&gt;
&lt;x-alert type="warning"&gt;This is a warning alert&lt;/x-alert&gt;
&lt;x-alert type="info"&gt;This is an info alert&lt;/x-alert&gt;
&lt;x-alert type="dark"&gt;This is a dark alert&lt;/x-alert&gt;
&lt;x-alert type="white"&gt;This is a white alert&lt;/x-alert&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <p class="mb-4">The alert component comes with several style variants.</p>

        <!-- Soft Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Soft Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-alert type="primary" soft>This is a soft primary alert</x-alert>
                <x-alert type="success" soft>This is a soft success alert</x-alert>
                <x-alert type="dark" soft>This is a soft dark alert</x-alert>
                <x-alert type="white" soft>This is a soft white alert</x-alert>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-alert type="primary" soft&gt;This is a soft primary alert&lt;/x-alert&gt;
&lt;x-alert type="success" soft&gt;This is a soft success alert&lt;/x-alert&gt;
&lt;x-alert type="dark" soft&gt;This is a soft dark alert&lt;/x-alert&gt;
&lt;x-alert type="white" soft&gt;This is a soft white alert&lt;/x-alert&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Outline Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Outline Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-alert type="primary" outline>This is an outline primary alert</x-alert>
                <x-alert type="success" outline>This is an outline success alert</x-alert>
                <x-alert type="dark" outline>This is an outline dark alert</x-alert>
                <x-alert type="white" outline>This is an outline white alert</x-alert>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-alert type="primary" outline&gt;This is an outline primary alert&lt;/x-alert&gt;
&lt;x-alert type="success" outline&gt;This is an outline success alert&lt;/x-alert&gt;
&lt;x-alert type="dark" outline&gt;This is an outline dark alert&lt;/x-alert&gt;
&lt;x-alert type="white" outline&gt;This is an outline white alert&lt;/x-alert&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Rounded Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Rounded Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-alert type="primary" rounded>This is a rounded primary alert</x-alert>
                <x-alert type="success" rounded>This is a rounded success alert</x-alert>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-alert type="primary" rounded&gt;This is a rounded primary alert&lt;/x-alert&gt;
&lt;x-alert type="success" rounded&gt;This is a rounded success alert&lt;/x-alert&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Dismissible Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Dismissible Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-alert type="primary" dismissible>This is a dismissible primary alert</x-alert>
                <x-alert type="success" dismissible>This is a dismissible success alert</x-alert>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-alert type="primary" dismissible&gt;This is a dismissible primary alert&lt;/x-alert&gt;
&lt;x-alert type="success" dismissible&gt;This is a dismissible success alert&lt;/x-alert&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Combined Variants -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Combined Variants</h3>
            </x-slot>

            <div class="mb-6">
                <x-alert type="primary" soft rounded dismissible>Soft, rounded and dismissible alert</x-alert>
                <x-alert type="success" outline rounded dismissible>Outline, rounded and dismissible alert</x-alert>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-alert type="primary" soft rounded dismissible&gt;Soft, rounded and dismissible alert&lt;/x-alert&gt;
&lt;x-alert type="success" outline rounded dismissible&gt;Outline, rounded and dismissible alert&lt;/x-alert&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- With Slot Content -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Using Formatted Content</h2>
        </x-slot>

        <div class="mb-6">
            <x-alert type="primary">
                <strong>Well done!</strong> You can include <em>formatted content</em> in alerts.
            </x-alert>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-alert type="primary"&gt;
    &lt;strong&gt;Well done!&lt;/strong&gt; You can include &lt;em&gt;formatted content&lt;/em&gt; in alerts.
&lt;/x-alert&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Alert Component Props">
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
                    <td>type</td>
                    <td>string</td>
                    <td>'primary'</td>
                    <td>The type/color of the alert. Options: 'primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark', 'white'.</td>
                </tr>
                <tr>
                    <td>dismissible</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the alert can be dismissed/closed.</td>
                </tr>
                <tr>
                    <td>soft</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to use soft/muted styling for the alert.</td>
                </tr>
                <tr>
                    <td>outline</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to use outlined styling for the alert.</td>
                </tr>
                <tr>
                    <td>rounded</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to use fully rounded corners for the alert.</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices Card -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Use appropriate colors for different message types (success, warning, error).</li>
            <li>Keep alert messages concise and clear.</li>
            <li>Use dismissible alerts for non-critical information that users may want to hide.</li>
            <li>For important alerts that shouldn't be missed, avoid making them dismissible.</li>
            <li>Consider using soft or outline variants in dense UIs to reduce visual noise.</li>
        </ul>
    </x-card>
</x-main>
