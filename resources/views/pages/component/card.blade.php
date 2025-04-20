<?php
use function Laravel\Folio\name;
name('component.card');
?>

<x-main>
    <x-slot name="title">Card Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Card" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Card Component</h2>
        </x-slot>
        <p>The card component provides a flexible container for displaying content with optional header and footer sections. Cards can be used to group related information and create structured layouts.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 grid gap-4">
            <x-card>
                <x-slot name="header">Card Header</x-slot>
                This is the card body content.
                <x-slot name="footer">Card Footer</x-slot>
            </x-card>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-card&gt;
    &lt;x-slot name="header"&gt;Card Header&lt;/x-slot&gt;
    This is the card body content.
    &lt;x-slot name="footer"&gt;Card Footer&lt;/x-slot&gt;
&lt;/x-card&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <div class="mb-6 grid gap-4">
            <x-card variant="primary">
                <x-slot name="header">Primary Card</x-slot>
                Primary variant card content
            </x-card>

            <x-card variant="secondary">
                <x-slot name="header">Secondary Card</x-slot>
                Secondary variant card content
            </x-card>

            <x-card variant="success">
                <x-slot name="header">Success Card</x-slot>
                Success variant card content
            </x-card>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-card variant="primary"&gt;
    &lt;x-slot name="header"&gt;Primary Card&lt;/x-slot&gt;
    Primary variant card content
&lt;/x-card&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Sizes Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Card Sizes</h2>
        </x-slot>

        <div class="mb-6 grid gap-4">
            <x-card size="sm">
                <x-slot name="header">Small Card</x-slot>
                Small sized card content
            </x-card>

            <x-card>
                <x-slot name="header">Default Card</x-slot>
                Default sized card content
            </x-card>

            <x-card size="lg">
                <x-slot name="header">Large Card</x-slot>
                Large sized card content
            </x-card>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-card size="sm"&gt;...&lt;/x-card&gt;
&lt;x-card&gt;...&lt;/x-card&gt;
&lt;x-card size="lg"&gt;...&lt;/x-card&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Loading State -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Loading State</h2>
        </x-slot>

        <div class="mb-6">
            <x-card loading>
                <x-slot name="header">Loading Card</x-slot>
                This card is in a loading state
            </x-card>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-card loading&gt;
    &lt;x-slot name="header"&gt;Loading Card&lt;/x-slot&gt;
    This card is in a loading state
&lt;/x-card&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Hover Effect -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Hover Effect</h2>
        </x-slot>

        <div class="mb-6">
            <x-card hover>
                <x-slot name="header">Hover Card</x-slot>
                Hover over this card to see the effect
            </x-card>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-card hover&gt;
    &lt;x-slot name="header"&gt;Hover Card&lt;/x-slot&gt;
    Hover over this card to see the effect
&lt;/x-card&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Card Component Props">
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
                    <td>variant</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Card style variant. Options: 'primary', 'secondary', 'info', 'success', 'warning', 'danger'</td>
                </tr>
                <tr>
                    <td>size</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Card size. Options: 'sm', 'lg'</td>
                </tr>
                <tr>
                    <td>loading</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to show the card in a loading state</td>
                </tr>
                <tr>
                    <td>hover</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to show hover effects on the card</td>
                </tr>
                <tr>
                    <td>margin</td>
                    <td>string</td>
                    <td>'mt-4'</td>
                    <td>Margin utility class to apply to the card</td>
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
            <li>Use cards to group related content and create clear visual hierarchies</li>
            <li>Include headers to provide context for the card content</li>
            <li>Choose appropriate variants to match the content's purpose or importance</li>
            <li>Consider using loading states for dynamic content</li>
            <li>Use consistent spacing and sizing within card groups</li>
            <li>Add hover effects for interactive cards</li>
        </ul>
    </x-card>
</x-main>
