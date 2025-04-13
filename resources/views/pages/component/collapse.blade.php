<?php
use function Laravel\Folio\name;
name('component.collapse');
?>

<x-main>
    <x-slot name="title">Collapse Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Collapse" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Collapse Component</h2>
        </x-slot>
        <p>The collapse component allows you to toggle the visibility of content. It's commonly used for creating accordions, expandable sections, and FAQ lists.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="space-y-4 mb-6">
            <x-collapse title="Basic Collapse">
                <p>This is the content of a basic collapse component. You can put any content here.</p>
            </x-collapse>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-collapse title="Basic Collapse"&gt;
    &lt;p&gt;This is the content of a basic collapse component. You can put any content here.&lt;/p&gt;
&lt;/x-collapse&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <!-- Bordered Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Bordered Variant</h3>
            </x-slot>

            <div class="space-y-4 mb-6">
                <x-collapse title="Bordered Collapse" variant="bordered">
                    <p>This collapse has a border around it.</p>
                </x-collapse>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-collapse title="Bordered Collapse" variant="bordered"&gt;
    &lt;p&gt;This collapse has a border around it.&lt;/p&gt;
&lt;/x-collapse&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Full Bordered Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Full Bordered Variant</h3>
            </x-slot>

            <div class="space-y-4 mb-6">
                <x-collapse title="Full Bordered Collapse" variant="full-bordered">
                    <p>This collapse has borders around both header and content.</p>
                </x-collapse>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-collapse title="Full Bordered Collapse" variant="full-bordered"&gt;
    &lt;p&gt;This collapse has borders around both header and content.&lt;/p&gt;
&lt;/x-collapse&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Separated Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Separated Variant</h3>
            </x-slot>

            <div class="space-y-4 mb-6">
                <x-collapse title="Separated Collapse" variant="separated">
                    <p>This collapse has space between items when used in a group.</p>
                </x-collapse>
                <x-collapse title="Another Separated Collapse" variant="separated">
                    <p>Another separated collapse item.</p>
                </x-collapse>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-collapse title="Separated Collapse" variant="separated"&gt;
    &lt;p&gt;This collapse has space between items when used in a group.&lt;/p&gt;
&lt;/x-collapse&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <!-- FAQ Example -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">FAQ Example</h3>
            </x-slot>

            <div class="space-y-2 mb-6">
                <x-collapse title="What is a collapse component?" variant="bordered">
                    <p>A collapse component is used to show and hide content in a toggle manner.</p>
                </x-collapse>
                <x-collapse title="How do I use it?" variant="bordered">
                    <p>Simply use the x-collapse component with a title and content.</p>
                </x-collapse>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-collapse title="What is a collapse component?" bordered&gt;
    &lt;p&gt;A collapse component is used to show and hide content in a toggle manner.&lt;/p&gt;
&lt;/x-collapse&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Collapse Component Props">
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
                    <td>title</td>
                    <td>string</td>
                    <td>'Collapse Item'</td>
                    <td>The header text of the collapse component.</td>
                </tr>
                <tr>
                    <td>open</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the collapse is expanded by default.</td>
                </tr>
                <tr>
                    <td>variant</td>
                    <td>string</td>
                    <td>'default'</td>
                    <td>The style variant of the collapse. Options: 'default', 'bordered', 'full-bordered', 'separated'.</td>
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
            <li>Use clear and concise titles that describe the hidden content.</li>
            <li>Group related content together in collapse components.</li>
            <li>Consider using the bordered variant for better visual separation.</li>
            <li>Use the separated variant when you have multiple collapse items that need clear distinction.</li>
            <li>Avoid nesting too many collapse components as it can complicate the user experience.</li>
            <li>Keep the content within collapse components focused and relevant to the title.</li>
        </ul>
    </x-card>
</x-main>
