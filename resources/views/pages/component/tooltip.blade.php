<?php
use function Laravel\Folio\name;
name('component.tooltip');
?>

<x-main>
    <x-slot name="title">Tooltip Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Tooltip" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Tooltip Component</h2>
        </x-slot>
        <p>The tooltip component provides additional information when users hover over an element. It's useful for providing context, hints, or explanations without cluttering the interface.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-4">
            <x-tooltip content="This is a tooltip">
                <button class="btn btn-primary">Hover me</button>
            </x-tooltip>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-tooltip content="This is a tooltip"&gt;
    &lt;button class="btn btn-primary"&gt;Hover me&lt;/button&gt;
&lt;/x-tooltip&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">Tooltips can be used in various contexts:</p>

        <!-- Information Icons -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Information Icons</h3>
            </x-slot>

            <div class="mb-6 space-x-4">
                <x-tooltip content="Additional information about this feature">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M12 9h.01" />
                        <path d="M11 12h1v4h1" />
                    </svg>
                </x-tooltip>
                <x-tooltip content="This action cannot be undone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M12 9h.01" />
                        <path d="M11 12h1v4h1" />
                    </svg>
                </x-tooltip>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-tooltip content="Additional information about this feature"&gt;
    &lt;i class="fas fa-info-circle text-blue-500"&gt;&lt;/i&gt;
&lt;/x-tooltip&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Form Elements -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Form Elements</h3>
            </x-slot>

            <div class="mb-6">
                <x-tooltip content="Enter your full legal name">
                    <input type="text" class="form-control" placeholder="Full Name">
                </x-tooltip>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-tooltip content="Enter your full legal name"&gt;
    &lt;input type="text" class="form-control" placeholder="Full Name"&gt;
&lt;/x-tooltip&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Tooltip Component Props">
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
                    <td>content</td>
                    <td>string</td>
                    <td>'This is a tooltip text.'</td>
                    <td>The text content to display in the tooltip</td>
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
            <li>Keep tooltip content brief and concise</li>
            <li>Use tooltips for supplementary information, not critical content</li>
            <li>Ensure tooltip text has sufficient contrast with its background</li>
            <li>Position tooltips where they won't obstruct important content</li>
            <li>Consider touch device users when implementing tooltips</li>
            <li>Use consistent tooltip styling throughout your application</li>
        </ul>
    </x-card>
</x-main>
