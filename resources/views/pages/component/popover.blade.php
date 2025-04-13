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
        <p>The popover component provides a way to display additional content or information when users interact with a trigger element. Popovers can be triggered by hover or click events and are useful for tooltips, detailed explanations, or additional actions.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-4">
            <x-popover>
                <x-slot name="triggerSlot">
                    <button class="btn btn-primary">Hover me</button>
                </x-slot>
                This is a basic hover popover
            </x-popover>

            <x-popover trigger="click">
                <x-slot name="triggerSlot">
                    <button class="btn btn-secondary">Click me</button>
                </x-slot>
                This is a click-triggered popover
            </x-popover>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-popover&gt;
    &lt;x-slot name="triggerSlot"&gt;
        &lt;button class="btn btn-primary"&gt;Hover me&lt;/button&gt;
    &lt;/x-slot&gt;
    This is a basic hover popover
&lt;/x-popover&gt;

&lt;x-popover trigger="click"&gt;
    &lt;x-slot name="triggerSlot"&gt;
        &lt;button class="btn btn-secondary"&gt;Click me&lt;/button&gt;
    &lt;/x-slot&gt;
    This is a click-triggered popover
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
                    <x-popover>
                        <x-slot name="triggerSlot">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 9h.01" />
                                <path d="M11 12h1v4h1" />
                            </svg>
                        </x-slot>
                        Username must be between 3-20 characters and can only contain letters, numbers, and underscores.
                    </x-popover>
                </div>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;div class="flex items-center gap-2"&gt;
    &lt;label&gt;Username&lt;/label&gt;
    &lt;x-popover&gt;
        &lt;x-slot name="triggerSlot"&gt;
            &lt;i class="fas fa-question-circle text-gray-400"&gt;&lt;/i&gt;
        &lt;/x-slot&gt;
        Username must be between 3-20 characters...
    &lt;/x-popover&gt;
&lt;/div&gt;
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
                    <td>contentClass</td>
                    <td>string</td>
                    <td>'popover-content'</td>
                    <td>Additional classes to apply to the popover content container.</td>
                </tr>
                <tr>
                    <td>triggerSlot</td>
                    <td>slot</td>
                    <td>-</td>
                    <td>Slot for the trigger element that will show/hide the popover.</td>
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
            <li>Position popovers where they won't obstruct important content.</li>
            <li>Consider mobile users when implementing click-triggered popovers.</li>
            <li>Provide clear visual indicators for elements that trigger popovers.</li>
        </ul>
    </x-card>
</x-main>
