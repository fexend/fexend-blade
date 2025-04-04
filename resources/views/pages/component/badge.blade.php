<?php
use function Laravel\Folio\name;
name('component.badge');
?>

<x-main>
    <x-slot name="title">Badge Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Badge" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Badge Component</h2>
        </x-slot>
        <p>The badge component is used to highlight and display short pieces of information, status indicators, or counts. Badges can be customized with different colors, styles, and shapes to match your design needs.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-2 flex flex-wrap gap-2">
            <x-badge type="primary">Primary</x-badge>
            <x-badge type="secondary">Secondary</x-badge>
            <x-badge type="success">Success</x-badge>
            <x-badge type="danger">Danger</x-badge>
            <x-badge type="warning">Warning</x-badge>
            <x-badge type="info">Info</x-badge>
            <x-badge type="dark">Dark</x-badge>
            <x-badge type="white">White</x-badge>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-badge type="primary"&gt;Primary&lt;/x-badge&gt;
&lt;x-badge type="secondary"&gt;Secondary&lt;/x-badge&gt;
&lt;x-badge type="success"&gt;Success&lt;/x-badge&gt;
&lt;x-badge type="danger"&gt;Danger&lt;/x-badge&gt;
&lt;x-badge type="warning"&gt;Warning&lt;/x-badge&gt;
&lt;x-badge type="info"&gt;Info&lt;/x-badge&gt;
&lt;x-badge type="dark"&gt;Dark&lt;/x-badge&gt;
&lt;x-badge type="white"&gt;White&lt;/x-badge&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <p class="mb-4">The badge component comes with several style variants.</p>

        <!-- Soft Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Soft Variant</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-badge type="primary" style="soft">Primary</x-badge>
                <x-badge type="secondary" style="soft">Secondary</x-badge>
                <x-badge type="success" style="soft">Success</x-badge>
                <x-badge type="danger" style="soft">Danger</x-badge>
                <x-badge type="dark" style="soft">Dark</x-badge>
                <x-badge type="white" style="soft">White</x-badge>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-badge type="primary" style="soft"&gt;Primary&lt;/x-badge&gt;
&lt;x-badge type="secondary" style="soft"&gt;Secondary&lt;/x-badge&gt;
&lt;x-badge type="success" style="soft"&gt;Success&lt;/x-badge&gt;
&lt;x-badge type="danger" style="soft"&gt;Danger&lt;/x-badge&gt;
&lt;x-badge type="dark" style="soft"&gt;Dark&lt;/x-badge&gt;
&lt;x-badge type="white" style="soft"&gt;White&lt;/x-badge&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Outline Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Outline Variant</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-badge type="primary" style="outline">Primary</x-badge>
                <x-badge type="secondary" style="outline">Secondary</x-badge>
                <x-badge type="success" style="outline">Success</x-badge>
                <x-badge type="danger" style="outline">Danger</x-badge>
                <x-badge type="dark" style="outline">Dark</x-badge>
                <x-badge type="white" style="outline">White</x-badge>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-badge type="primary" style="outline"&gt;Primary&lt;/x-badge&gt;
&lt;x-badge type="secondary" style="outline"&gt;Secondary&lt;/x-badge&gt;
&lt;x-badge type="success" style="outline"&gt;Success&lt;/x-badge&gt;
&lt;x-badge type="danger" style="outline"&gt;Danger&lt;/x-badge&gt;
&lt;x-badge type="dark" style="outline"&gt;Dark&lt;/x-badge&gt;
&lt;x-badge type="white" style="outline"&gt;White&lt;/x-badge&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Rounded Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Rounded Variant</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-badge type="primary" rounded>Primary</x-badge>
                <x-badge type="success" rounded>Success</x-badge>
                <x-badge type="danger" rounded>Danger</x-badge>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-badge type="primary" rounded&gt;Primary&lt;/x-badge&gt;
&lt;x-badge type="success" rounded&gt;Success&lt;/x-badge&gt;
&lt;x-badge type="danger" rounded&gt;Danger&lt;/x-badge&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Combined Variants -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Combined Variants</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-badge type="primary" style="soft" rounded>Soft & Rounded</x-badge>
                <x-badge type="success" style="outline" rounded>Outline & Rounded</x-badge>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-badge type="primary" style="soft" rounded&gt;Soft & Rounded&lt;/x-badge&gt;
&lt;x-badge type="success" style="outline" rounded&gt;Outline & Rounded&lt;/x-badge&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">Badges can be used in various contexts:</p>

        <!-- Status Indicators -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Status Indicators</h3>
            </x-slot>

            <div class="mb-6">
                <div class="flex items-center gap-2 mb-2">
                    <x-badge type="success">Active</x-badge>
                    <span>User account is active</span>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <x-badge type="warning">Pending</x-badge>
                    <span>Order is awaiting approval</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-badge type="danger">Expired</x-badge>
                    <span>Subscription has ended</span>
                </div>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;div class="flex items-center gap-2"&gt;
    &lt;x-badge type="success"&gt;Active&lt;/x-badge&gt;
    &lt;span&gt;User account is active&lt;/span&gt;
&lt;/div&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Notification Counter -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Notification Counter</h3>
            </x-slot>

            <div class="mb-6">
                <button class="btn btn-primary relative">
                    Notifications
                    <x-badge type="danger" rounded class="absolute -top-2 -right-2">5</x-badge>
                </button>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;button class="btn btn-primary relative"&gt;
    Notifications
    &lt;x-badge type="danger" rounded class="absolute -top-2 -right-2"&gt;5&lt;/x-badge&gt;
&lt;/button&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Badge Component Props">
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
                    <td>The color of the badge. Options: 'primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark', 'white'.</td>
                </tr>
                <tr>
                    <td>style</td>
                    <td>string</td>
                    <td>'default'</td>
                    <td>The style variant of the badge. Options: 'default', 'soft', 'outline'.</td>
                </tr>
                <tr>
                    <td>rounded</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to use fully rounded corners (pill shape) for the badge.</td>
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
            <li>Use badges sparingly to highlight important information without overwhelming the user.</li>
            <li>Choose colors that have appropriate meaning - green for success/active, red for errors/alerts, etc.</li>
            <li>Keep text within badges short and concise - ideally one or two words.</li>
            <li>Use rounded badges for numeric indicators and status markers.</li>
            <li>Consider using soft or outline variants in dense UIs to reduce visual noise.</li>
            <li>Ensure sufficient color contrast between badge text and background for accessibility.</li>
        </ul>
    </x-card>
</x-main>
