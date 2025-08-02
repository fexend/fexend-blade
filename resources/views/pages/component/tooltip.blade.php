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
        <p>The tooltip component provides additional information when users hover over or click an element. Built with Popper.js for intelligent positioning that automatically adjusts based on viewport boundaries.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-4">
            <x-tooltip content="This is a basic tooltip">
                <button class="button button-primary">Hover me</button>
            </x-tooltip>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tooltip content="This is a basic tooltip"&gt;
    &lt;button class="button button-primary"&gt;Hover me&lt;/button&gt;
&lt;/x-tooltip&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Placement Options -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Placement Options</h2>
        </x-slot>

        <p class="mb-4">Tooltips can be positioned in different directions. Popper.js automatically adjusts if there's not enough space.</p>

        <div class="mb-6 grid grid-cols-2 md:grid-cols-4 gap-4">
            <x-tooltip content="Top placement" placement="top">
                <button class="button button-primary-outline w-full">Top</button>
            </x-tooltip>
            <x-tooltip content="Bottom placement" placement="bottom">
                <button class="button button-primary-outline w-full">Bottom</button>
            </x-tooltip>
            <x-tooltip content="Left placement" placement="left">
                <button class="button button-primary-outline w-full">Left</button>
            </x-tooltip>
            <x-tooltip content="Right placement" placement="right">
                <button class="button button-primary-outline w-full">Right</button>
            </x-tooltip>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tooltip content="Top placement" placement="top"&gt;
    &lt;button class="button button-primary-outline"&gt;Top&lt;/button&gt;
&lt;/x-tooltip&gt;

&lt;x-tooltip content="Bottom placement" placement="bottom"&gt;
    &lt;button class="button button-primary-outline"&gt;Bottom&lt;/button&gt;
&lt;/x-tooltip&gt;

&lt;x-tooltip content="Left placement" placement="left"&gt;
    &lt;button class="button button-primary-outline"&gt;Left&lt;/button&gt;
&lt;/x-tooltip&gt;

&lt;x-tooltip content="Right placement" placement="right"&gt;
    &lt;button class="button button-primary-outline"&gt;Right&lt;/button&gt;
&lt;/x-tooltip&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Trigger Options -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Trigger Options</h2>
        </x-slot>

        <p class="mb-4">Tooltips can be triggered by hover or click events.</p>

        <div class="mb-6 space-x-4">
            <x-tooltip content="Appears on hover" trigger="hover">
                <button class="button button-secondary">Hover Trigger</button>
            </x-tooltip>
            <x-tooltip content="Click to toggle" trigger="click">
                <button class="button button-secondary">Click Trigger</button>
            </x-tooltip>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tooltip content="Appears on hover" trigger="hover"&gt;
    &lt;button class="button button-secondary"&gt;Hover Trigger&lt;/button&gt;
&lt;/x-tooltip&gt;

&lt;x-tooltip content="Click to toggle" trigger="click"&gt;
    &lt;button class="button button-secondary"&gt;Click Trigger&lt;/button&gt;
&lt;/x-tooltip&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Delay Configuration -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Delay Configuration</h2>
        </x-slot>

        <p class="mb-4">You can configure the delay before the tooltip appears (in milliseconds).</p>

        <div class="mb-6 space-x-4">
            <x-tooltip content="No delay" delay="0">
                <button class="button button-info">No Delay</button>
            </x-tooltip>
            <x-tooltip content="500ms delay" delay="500">
                <button class="button button-info">500ms Delay</button>
            </x-tooltip>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tooltip content="No delay" delay="0"&gt;
    &lt;button class="button button-info"&gt;No Delay&lt;/button&gt;
&lt;/x-tooltip&gt;

&lt;x-tooltip content="500ms delay" delay="500"&gt;
    &lt;button class="button button-info"&gt;500ms Delay&lt;/button&gt;
&lt;/x-tooltip&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <!-- Information Icons -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Information Icons</h3>
            </x-slot>

            <div class="mb-6 space-x-4">
                <x-tooltip content="Additional information about this feature" placement="top" class="w-[2000px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-blue-500 cursor-help">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M12 9h.01" />
                        <path d="M11 12h1v4h1" />
                    </svg>
                </x-tooltip>
                <x-tooltip content="This action cannot be undone" placement="top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-alert-triangle text-amber-500 cursor-help">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 9v4" />
                        <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                        <path d="M12 16h.01" />
                    </svg>
                </x-tooltip>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tooltip content="Additional information about this feature" placement="top"&gt;
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

            <div class="mb-6 space-y-4">
                <x-tooltip content="Enter your full legal name as it appears on official documents" placement="top">
                    <input type="text" class="form-control" placeholder="Full Name">
                </x-tooltip>
                <x-tooltip content="Password must be at least 8 characters with uppercase, lowercase, and numbers" placement="bottom">
                    <input type="password" class="form-control" placeholder="Password">
                </x-tooltip>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tooltip content="Enter your full legal name as it appears on official documents" placement="top"&gt;
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
                    <td>'Tooltip content'</td>
                    <td>The text content to display in the tooltip</td>
                </tr>
                <tr>
                    <td>placement</td>
                    <td>string</td>
                    <td>'top'</td>
                    <td>Tooltip position: 'top', 'bottom', 'left', 'right'</td>
                </tr>
                <tr>
                    <td>trigger</td>
                    <td>string</td>
                    <td>'hover'</td>
                    <td>How tooltip is triggered: 'hover' or 'click'</td>
                </tr>
                <tr>
                    <td>delay</td>
                    <td>number</td>
                    <td>100</td>
                    <td>Delay in milliseconds before showing tooltip (hover only)</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Requirements Card -->
    <x-card class="mb-4">
        <x-slot name="header">
            <h2 class="card-title">Requirements</h2>
        </x-slot>

        <p class="mb-4">This tooltip component requires the following dependencies:</p>

        <ul class="list-disc pl-6 space-y-2">
            <li><strong>Popper.js</strong> - For intelligent positioning and viewport detection</li>
            <li><strong>Alpine.js</strong> - For reactivity and DOM manipulation</li>
        </ul>

        <div class="mt-4 rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-html whitespace-pre">
&lt;!-- Include Popper.js --&gt;
&lt;script src="https://unpkg.com/@popperjs/core@2"&gt;&lt;/script&gt;

&lt;!-- Include Alpine.js --&gt;
&lt;script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"&gt;&lt;/script&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Best Practices Card -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Keep tooltip content brief and concise (recommended: under 100 characters)</li>
            <li>Use tooltips for supplementary information, not critical content</li>
            <li>Ensure tooltip text has sufficient contrast with its background</li>
            <li>Consider using click triggers on touch devices for better accessibility</li>
            <li>Use consistent tooltip styling throughout your application</li>
            <li>Test tooltip positioning near viewport edges to ensure proper behavior</li>
            <li>Provide keyboard navigation support for accessibility</li>
            <li>Use appropriate delay timing - too fast can be jarring, too slow can feel unresponsive</li>
        </ul>
    </x-card>
</x-main>
