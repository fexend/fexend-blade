<?php
use function Laravel\Folio\name;
name('component.accordion');
?>

<x-main>
    <x-slot name="title">Accordion Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Accordion" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Accordion Component</h2>
        </x-slot>
        <p>The accordion component allows you to toggle the display of content in a collapsible format, helping to organize and present information in a compact way.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6">
            <x-accordion>
                <x-accordion-item id="1" title="Accordion Item 1">
                    <p>This is the content for the first accordion item. Click on the header to toggle visibility.</p>
                </x-accordion-item>

                <x-accordion-item id="2" title="Accordion Item 2">
                    <p>This is the content for the second accordion item. Only one item can be open at a time by default.</p>
                </x-accordion-item>

                <x-accordion-item id="3" title="Accordion Item 3">
                    <p>This is the content for the third accordion item.</p>
                </x-accordion-item>
            </x-accordion>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-accordion&gt;
    &lt;x-accordion-item id="1" title="Accordion Item 1"&gt;
        &lt;p&gt;This is the content for the first accordion item.&lt;/p&gt;
    &lt;/x-accordion-item&gt;
    
    &lt;x-accordion-item id="2" title="Accordion Item 2"&gt;
        &lt;p&gt;This is the content for the second accordion item.&lt;/p&gt;
    &lt;/x-accordion-item&gt;
    
    &lt;x-accordion-item id="3" title="Accordion Item 3"&gt;
        &lt;p&gt;This is the content for the third accordion item.&lt;/p&gt;
    &lt;/x-accordion-item&gt;
&lt;/x-accordion&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <p class="mb-4">The accordion component comes with several style variants.</p>

        <!-- Bordered Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Bordered Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-accordion>
                    <x-accordion-item id="4" title="Bordered Accordion Item" variant="bordered">
                        <p>This is a bordered accordion item.</p>
                    </x-accordion-item>
                </x-accordion>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-accordion-item id="4" title="Bordered Accordion Item" variant="bordered"&gt;
    &lt;p&gt;This is a bordered accordion item.&lt;/p&gt;
&lt;/x-accordion-item&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Full Bordered Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Full Bordered Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-accordion>
                    <x-accordion-item id="5" title="Full Bordered Accordion Item" variant="full-bordered">
                        <p>This is a full bordered accordion item.</p>
                    </x-accordion-item>
                </x-accordion>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-accordion-item id="5" title="Full Bordered Accordion Item" variant="full-bordered"&gt;
    &lt;p&gt;This is a full bordered accordion item.&lt;/p&gt;
&lt;/x-accordion-item&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Separated Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Separated Variant</h3>
            </x-slot>

            <div class="mb-6">
                <x-accordion>
                    <x-accordion-item id="6" title="Separated Accordion Item 1" variant="separated">
                        <p>This is the first separated accordion item.</p>
                    </x-accordion-item>

                    <x-accordion-item id="7" title="Separated Accordion Item 2" variant="separated">
                        <p>This is the second separated accordion item.</p>
                    </x-accordion-item>
                </x-accordion>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-accordion&gt;
    &lt;x-accordion-item id="6" title="Separated Accordion Item 1" variant="separated"&gt;
        &lt;p&gt;This is the first separated accordion item.&lt;/p&gt;
    &lt;/x-accordion-item&gt;
    
    &lt;x-accordion-item id="7" title="Separated Accordion Item 2" variant="separated"&gt;
        &lt;p&gt;This is the second separated accordion item.&lt;/p&gt;
    &lt;/x-accordion-item&gt;
&lt;/x-accordion&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <!-- Accordion Component Props -->
    <x-card class="mb-4">
        <x-table title="Accordion Component Props">
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
                    <td>'default'</td>
                    <td>Style variant for the accordion wrapper. Options: 'default', 'bordered', 'full-bordered', 'separated'.</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string</td>
                    <td>'Accordion'</td>
                    <td>Title for the accordion component (rarely used).</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Accordion Item Component Props -->
    <x-card>

        <x-table title="Accordion Item Component Props">
            <x-slot name="thead">
                <tr>
                    <th>Prop</th>
                    <th>Type</th>
                    <th>Required</th>
                    <th>Default</th>
                    <th>Description</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>id</td>
                    <td>number|string</td>
                    <td>Yes</td>
                    <td>-</td>
                    <td>Unique identifier for the accordion item.</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string</td>
                    <td>Yes</td>
                    <td>-</td>
                    <td>The title displayed in the accordion header.</td>
                </tr>
                <tr>
                    <td>variant</td>
                    <td>string</td>
                    <td>No</td>
                    <td>'default'</td>
                    <td>Style variant. Options: 'default', 'bordered', 'full-bordered', 'separated'.</td>
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
            <li>Use unique IDs for each accordion item within the same accordion group.</li>
            <li>Use accordions to organize related content and reduce visual clutter.</li>
            <li>Keep the accordion titles clear and concise.</li>
            <li>Choose an appropriate variant based on the visual hierarchy needed.</li>
        </ul>
    </x-card>
</x-main>
