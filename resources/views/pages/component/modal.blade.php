<?php
use function Laravel\Folio\name;
name('component.modal');
?>

<x-main>
    <x-slot name="title">Modal Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Modal" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Modal Component</h2>
        </x-slot>
        <p>The modal component provides a flexible way to display content in a popup dialog. It supports various sizes, positions, and types, making it suitable for different use cases like confirmations, forms, or custom content display.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6">
            <x-modal title="Basic Modal">
                <p>This is a basic modal example with default settings.</p>
            </x-modal>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-modal title="Basic Modal"&gt;
    &lt;p&gt;This is a basic modal example with default settings.&lt;/p&gt;
&lt;/x-modal&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Sizes Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Modal Sizes</h2>
        </x-slot>

        <div class="mb-6 space-x-2 flex flex-wrap gap-2">
            <x-modal title="Small Modal" size="sm" triggerButtonText="Small Modal">
                <p>This is a small modal.</p>
            </x-modal>
            <x-modal title="Medium Modal" size="md" triggerButtonText="Medium Modal">
                <p>This is a medium modal (default).</p>
            </x-modal>
            <x-modal title="Large Modal" size="lg" triggerButtonText="Large Modal">
                <p>This is a large modal.</p>
            </x-modal>
            <x-modal title="Full Screen" size="full" triggerButtonText="Full Screen">
                <p>This is a full screen modal.</p>
            </x-modal>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-modal title="Small Modal" size="sm"&gt;
    &lt;p&gt;This is a small modal.&lt;/p&gt;
&lt;/x-modal&gt;

&lt;x-modal title="Large Modal" size="lg"&gt;
    &lt;p&gt;This is a large modal.&lt;/p&gt;
&lt;/x-modal&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Positions Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Modal Positions</h2>
        </x-slot>

        <div class="mb-6 space-x-2 flex flex-wrap gap-2">
            <x-modal title="Top Center Modal" position="top-center" triggerButtonText="Top Center">
                <p>Modal at top center position.</p>
            </x-modal>
            <x-modal title="Center Modal" position="center" triggerButtonText="Center">
                <p>Modal at center position (default).</p>
            </x-modal>
            <x-modal title="Bottom Right Modal" position="bottom-right" triggerButtonText="Bottom Right">
                <p>Modal at bottom right position.</p>
            </x-modal>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-modal title="Top Center Modal" position="top-center"&gt;
    &lt;p&gt;Modal at top center position.&lt;/p&gt;
&lt;/x-modal&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Types Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Modal Types</h2>
        </x-slot>

        <div class="mb-6 space-x-2 flex flex-wrap gap-2">
            <x-modal title="Success Modal" type="success" triggerButtonText="Success Modal">
                <p>Operation completed successfully!</p>
            </x-modal>
            <x-modal title="Error Modal" type="error" triggerButtonText="Error Modal">
                <p>An error occurred during the operation.</p>
            </x-modal>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-modal title="Success Modal" type="success"&gt;
    &lt;p&gt;Operation completed successfully!&lt;/p&gt;
&lt;/x-modal&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Custom Trigger Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Custom Trigger</h2>
        </x-slot>

        <div class="mb-6">
            <x-modal id="js-triggered-modal" title="JavaScript Triggered Modal">
                <p>This modal can be triggered by JavaScript.</p>
            </x-modal>

            <x-button class="mb-4" id="js-modal-trigger">Trigger Modal with JavaScript</x-button>

            <script>
                document.getElementById('js-modal-trigger').addEventListener('click', function() {
                    document.dispatchEvent(new CustomEvent('open-modal', {
                        detail: 'js-triggered-modal'
                    }));
                });
            </script>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-modal id="js-triggered-modal" title="JavaScript Triggered Modal"&gt;
    &lt;p&gt;This modal can be triggered by JavaScript.&lt;/p&gt;
&lt;/x-modal&gt;

&lt;button id="js-modal-trigger"&gt;Trigger Modal with JavaScript&lt;/button&gt;

&lt;script&gt;
    document.getElementById('js-modal-trigger').addEventListener('click', function() {
        document.dispatchEvent(new CustomEvent('open-modal', {
            detail: 'js-triggered-modal'
        }));
    });
&lt;/script&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Data Table Integration Example -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Data Table Action Integration</h2>
        </x-slot>

        <p class="mb-4">You can use dropdown items with custom IDs to trigger modals:</p>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-php whitespace-pre">
// In your controller:
$configs = [
    [
        'name' => 'delete',
        'route' => route('items.destroy', $item->id),
        'uses_modal' => true,
        'id' => 'delete-item-' . $item->id,  // Adding custom ID
    ],
    [
        'name' => 'custom-action',
        'route' => '#',
        'id' => 'custom-action-' . $item->id,  // Adding custom ID
    ],
];
            </code></pre>
        </div>

        <p class="mt-4">You can also trigger the modal directly with JavaScript:</p>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-javascript whitespace-pre">
// Using the custom ID with jQuery
$('#custom-action-123').click(function(e) {
    e.preventDefault();
    document.dispatchEvent(new CustomEvent('open-modal', { detail: 'your-modal-id' }));
});

// Or with vanilla JavaScript
document.getElementById('custom-action-123').addEventListener('click', function(e) {
    e.preventDefault();
    document.dispatchEvent(new CustomEvent('open-modal', { detail: 'your-modal-id' }));
});
            </code></pre>
        </div>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Modal Component Props">
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
                    <td>id</td>
                    <td>string</td>
                    <td>auto-generated</td>
                    <td>Unique identifier for the modal</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Modal header title</td>
                </tr>
                <tr>
                    <td>position</td>
                    <td>string</td>
                    <td>'center'</td>
                    <td>Modal position (center, top-center, top-left, top-right, center-left, center-right, bottom-left, bottom-center, bottom-right.)</td>
                </tr>
                <tr>
                    <td>size</td>
                    <td>string</td>
                    <td>'md'</td>
                    <td>Modal size (sm, md, lg, xl, 2xl, full)</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>string</td>
                    <td>'default'</td>
                    <td>Modal type (default, success, error)</td>
                </tr>
                <tr>
                    <td>blur</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to blur the background</td>
                </tr>
                <tr>
                    <td>closeOnClickOutside</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Close modal when clicking outside</td>
                </tr>
                <tr>
                    <td>showCloseButton</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Show the close button in header</td>
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
            <li>Use clear and descriptive titles for your modals</li>
            <li>Keep modal content focused and concise</li>
            <li>Use appropriate modal sizes based on content</li>
            <li>Consider using success/error types for feedback messages</li>
            <li>Provide clear action buttons in the footer when needed</li>
            <li>Ensure keyboard accessibility (Esc to close)</li>
            <li>Use appropriate positioning based on context</li>
        </ul>
    </x-card>
</x-main>
