<?php
use function Laravel\Folio\name;
name('component.popover');
?>

<x-main>
    <x-slot name="title">Popover Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Popover" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Popover Component</h2>
        </x-slot>
        <p>The popover component provides a way to display additional content or information when users interact with a trigger element. Built with Popper.js for precise positioning, popovers can be triggered by hover or click events and are useful for tooltips, detailed explanations, or additional actions.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 flex space-x-4">
            <x-popover>
                <x-slot name="triggerButton">
                    <button class="button button-primary">Hover me</button>
                </x-slot>
                This is a basic hover popover
            </x-popover>

            <x-popover trigger="click">
                <x-slot name="triggerButton">
                    <button class="button button-secondary">Click me</button>
                </x-slot>
                This is a click-triggered popover
            </x-popover>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-popover&gt;
    &lt;x-slot name="triggerButton"&gt;
        &lt;button class="button button-primary"&gt;Hover me&lt;/button&gt;
    &lt;/x-slot&gt;
    This is a basic hover popover
&lt;/x-popover&gt;

&lt;x-popover trigger="click"&gt;
    &lt;x-slot name="triggerButton"&gt;
        &lt;button class="button button-secondary"&gt;Click me&lt;/button&gt;
    &lt;/x-slot&gt;
    This is a click-triggered popover
&lt;/x-popover&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Placement Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Placement Options</h2>
        </x-slot>

        <div class="gap-20">
            <x-popover placement="top">
                <x-slot name="triggerButton">
                    <button class="button button-secondary-outline w-full">Top</button>
                </x-slot>
                Popover on top
            </x-popover>

            <x-popover placement="bottom">
                <x-slot name="triggerButton">
                    <button class="button button-secondary-outline w-full">Bottom</button>
                </x-slot>
                Popover on bottom
            </x-popover>

            <x-popover placement="left">
                <x-slot name="triggerButton">
                    <button class="button button-secondary-outline w-full">Left</button>
                </x-slot>
                Popover on left
            </x-popover>

            <x-popover placement="right">
                <x-slot name="triggerButton">
                    <button class="button button-secondary-outline w-full">Right</button>
                </x-slot>
                Popover on right
            </x-popover>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-popover placement="top"&gt;
    &lt;x-slot name="triggerButton"&gt;
        &lt;button class="button button-secondary-outline"&gt;Top&lt;/button&gt;
    &lt;/x-slot&gt;
    Popover on top
&lt;/x-popover&gt;

&lt;x-popover placement="bottom"&gt;
    &lt;x-slot name="triggerButton"&gt;
        &lt;button class="button button-secondary-outline"&gt;Bottom&lt;/button&gt;
    &lt;/x-slot&gt;
    Popover on bottom
&lt;/x-popover&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <!-- Help Text -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Help Text</h3>
            </x-slot>

            <div class="mb-6">
                <div class="flex items-center gap-2">
                    <label>Username</label>
                    <x-popover placement="right">
                        <x-slot name="triggerButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400 hover:text-gray-600 cursor-help">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>
                        </x-slot>
                        <div class="text-sm">
                            <strong>Username Requirements:</strong><br>
                            • 3-20 characters<br>
                            • Letters, numbers, and underscores only<br>
                            • Must start with a letter
                        </div>
                    </x-popover>
                </div>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;div class="flex items-center gap-2"&gt;
    &lt;label&gt;Username&lt;/label&gt;
    &lt;x-popover placement="right"&gt;
        &lt;x-slot name="triggerButton"&gt;
            &lt;svg class="text-gray-400 hover:text-gray-600 cursor-help"&gt;...&lt;/svg&gt;
        &lt;/x-slot&gt;
        &lt;div class="text-sm"&gt;
            &lt;strong&gt;Username Requirements:&lt;/strong&gt;&lt;br&gt;
            • 3-20 characters&lt;br&gt;
            • Letters, numbers, and underscores only
        &lt;/div&gt;
    &lt;/x-popover&gt;
&lt;/div&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Rich Content -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Rich Content</h3>
            </x-slot>

            <div class="mb-6">
                <x-popover trigger="click" placement="bottom" contentClass="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg max-w-sm">
                    <x-slot name="triggerButton">
                        <button class="button button-info">View Profile</button>
                    </x-slot>
                    <div class="p-0">
                        <div class="flex items-center gap-3 p-4 border-b border-gray-200 dark:border-gray-700">
                            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold">
                                JD
                            </div>
                            <div>
                                <h4 class="font-semibold">John Doe</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Software Engineer</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-sm text-gray-700 dark:text-gray-300 mb-3">
                                Passionate developer with 5+ years of experience in web development.
                            </p>
                            <div class="flex gap-2">
                                <button class="button button-sm btn-primary">Follow</button>
                                <button class="button button-sm btn-outline">Message</button>
                            </div>
                        </div>
                    </div>
                </x-popover>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-popover trigger="click" placement="bottom" 
           contentClass="bg-white border rounded-lg shadow-lg max-w-sm"&gt;
    &lt;x-slot name="triggerButton"&gt;
        &lt;button class="button button-info"&gt;View Profile&lt;/button&gt;
    &lt;/x-slot&gt;
    &lt;div class="p-0"&gt;
        &lt;!-- Profile header --&gt;
        &lt;div class="flex items-center gap-3 p-4 border-b"&gt;
            &lt;div class="w-12 h-12 bg-blue-500 rounded-full..."&gt;JD&lt;/div&gt;
            &lt;div&gt;
                &lt;h4 class="font-semibold"&gt;John Doe&lt;/h4&gt;
                &lt;p class="text-sm text-gray-600"&gt;Software Engineer&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- Actions --&gt;
        &lt;div class="p-4"&gt;
            &lt;button class="button button-sm btn-primary"&gt;Follow&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-popover&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Popover Component Props">
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
                    <td>trigger</td>
                    <td>string</td>
                    <td>'hover'</td>
                    <td>The trigger type for the popover. Options: 'hover', 'click'.</td>
                </tr>
                <tr>
                    <td>placement</td>
                    <td>string</td>
                    <td>'top'</td>
                    <td>Position of the popover relative to trigger. Options: 'top', 'bottom', 'left', 'right', 'top-start', 'top-end', etc.</td>
                </tr>
                <tr>
                    <td>offset</td>
                    <td>array</td>
                    <td>[0, 8]</td>
                    <td>Distance from the trigger element. Format: [skidding, distance].</td>
                </tr>
                <tr>
                    <td>contentClass</td>
                    <td>string</td>
                    <td>'bg-white dark:bg-gray-800 border...'</td>
                    <td>Additional classes to apply to the popover content container.</td>
                </tr>
                <tr>
                    <td>arrowClass</td>
                    <td>string</td>
                    <td>'popover-arrow'</td>
                    <td>Additional classes to apply to the popover arrow.</td>
                </tr>
                <tr>
                    <td>triggerClass</td>
                    <td>string</td>
                    <td>''</td>
                    <td>Additional classes to apply to the trigger wrapper.</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Slots -->
    <x-card class="mb-4">
        <x-table title="Available Slots">
            <x-slot name="thead">
                <tr>
                    <th>Slot</th>
                    <th>Description</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>trigger</td>
                    <td>The element that triggers the popover (button, icon, text, etc.)</td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>Alternative to default slot for popover content</td>
                </tr>
                <tr>
                    <td>default</td>
                    <td>The main content of the popover</td>
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
            <li>Use hover triggers for brief, supplementary information.</li>
            <li>Use click triggers for more detailed content or interactive elements.</li>
            <li>Keep popover content concise and focused.</li>
            <li>Choose appropriate placement to avoid viewport edges.</li>
            <li>Consider mobile users when implementing click-triggered popovers.</li>
            <li>Provide clear visual indicators for elements that trigger popovers.</li>
            <li>Use consistent offset values throughout your application.</li>
            <li>Test popover positioning on different screen sizes.</li>
            <li>Include Popper.js in your build for the component to work properly.</li>
        </ul>
    </x-card>
</x-main>
