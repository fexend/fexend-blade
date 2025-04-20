<?php
use function Laravel\Folio\name;
name('component.divider');
?>

<x-main>
    <x-slot name="title">Divider Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Divider" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Divider Component</h2>
        </x-slot>
        <p>The divider component is used to create visual separation between content sections. It supports various styles including simple lines, text dividers with different positions, and gradient effects.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-divider />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-divider /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Text Divider Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Text Divider</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-divider text="Center Text" />
            <x-divider text="Left Text" position="left" />
            <x-divider text="Right Text" position="right" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-divider text="Center Text" /&gt;
&lt;x-divider text="Left Text" position="left" /&gt;
&lt;x-divider text="Right Text" position="right" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Gradient Divider -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Gradient Divider</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-divider text="Gradient Style" style="gradient" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-divider text="Gradient Style" style="gradient" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Divider Component Props">
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
                    <td>text</td>
                    <td>string|null</td>
                    <td>null</td>
                    <td>Optional text to display in the divider.</td>
                </tr>
                <tr>
                    <td>position</td>
                    <td>string</td>
                    <td>'center'</td>
                    <td>Position of the text. Options: 'center', 'left', 'right'.</td>
                </tr>
                <tr>
                    <td>style</td>
                    <td>string</td>
                    <td>'solid'</td>
                    <td>Style of the divider. Options: 'solid', 'gradient'.</td>
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
            <li>Use dividers to create clear visual separation between content sections.</li>
            <li>Keep divider text short and meaningful when using text dividers.</li>
            <li>Consider using gradient dividers for more decorative separation needs.</li>
            <li>Maintain consistent spacing around dividers for visual harmony.</li>
            <li>Use the appropriate text position based on your content layout and hierarchy.</li>
            <li>Ensure divider text has sufficient contrast with the background for readability.</li>
        </ul>
    </x-card>
</x-main>
