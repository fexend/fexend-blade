<?php
use function Laravel\Folio\name;
name('component.breadcrumb');
?>

<x-main>
    <x-slot name="title">Breadcrumb Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Breadcrumb" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Breadcrumb Component</h2>
        </x-slot>
        <p>The breadcrumb component provides navigation that shows the user's current location in a hierarchical structure. It helps users understand where they are within the website's structure and allows easy navigation to higher levels.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6">
            <x-breadcrumb>
                <x-breadcrumb-item title="Home"></x-breadcrumb-item>
                <x-breadcrumb-item title="Library"></x-breadcrumb-item>
                <x-breadcrumb-item title="Data" active></x-breadcrumb-item>
            </x-breadcrumb>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-breadcrumb&gt;
    &lt;x-breadcrumb-item title="Home"&gt;&lt;/x-breadcrumb-item&gt;
    &lt;x-breadcrumb-item title="Library"&gt;&lt;/x-breadcrumb-item&gt;
    &lt;x-breadcrumb-item title="Data" active&gt;&lt;/x-breadcrumb-item&gt;
&lt;/x-breadcrumb&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- With Links Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">With Links</h2>
        </x-slot>

        <div class="mb-6">
            <x-breadcrumb>
                <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
                <x-breadcrumb-item :href="route('component.index')" title="Components"></x-breadcrumb-item>
                <x-breadcrumb-item title="Breadcrumb" active></x-breadcrumb-item>
            </x-breadcrumb>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-breadcrumb&gt;
    &lt;x-breadcrumb-item :href="route('dashboard')" title="Dashboard"&gt;&lt;/x-breadcrumb-item&gt;
    &lt;x-breadcrumb-item :href="route('component.index')" title="Components"&gt;&lt;/x-breadcrumb-item&gt;
    &lt;x-breadcrumb-item title="Breadcrumb" active&gt;&lt;/x-breadcrumb-item&gt;
&lt;/x-breadcrumb&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <!-- Basic Navigation -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Basic Navigation</h3>
            </x-slot>

            <div class="mb-6">
                <x-breadcrumb>
                    <x-breadcrumb-item title="Users"></x-breadcrumb-item>
                    <x-breadcrumb-item title="Profile" active></x-breadcrumb-item>
                </x-breadcrumb>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-breadcrumb&gt;
    &lt;x-breadcrumb-item title="Users"&gt;&lt;/x-breadcrumb-item&gt;
    &lt;x-breadcrumb-item title="Profile" active&gt;&lt;/x-breadcrumb-item&gt;
&lt;/x-breadcrumb&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Breadcrumb Component Props">
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
                    <td>config('app.name')</td>
                    <td>The title displayed at the start of the breadcrumb (visible on larger screens)</td>
                </tr>
            </x-slot>
        </x-table>

        <x-table title="Breadcrumb Item Component Props" class="mt-4">
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
                    <td>href</td>
                    <td>string</td>
                    <td>'#'</td>
                    <td>The URL that the breadcrumb item links to</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string</td>
                    <td>'Component'</td>
                    <td>The text to display for the breadcrumb item</td>
                </tr>
                <tr>
                    <td>active</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether this is the current/active item in the breadcrumb</td>
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
            <li>Always start with the home/dashboard page as the first item</li>
            <li>Use clear and concise labels for each breadcrumb item</li>
            <li>Show the current page as the last item and mark it as active</li>
            <li>Maintain a logical hierarchy that matches your site structure</li>
            <li>Keep breadcrumb trails to a reasonable length (ideally 2-5 items)</li>
            <li>Use consistent separators between items</li>
            <li>Ensure all non-active items are clickable links</li>
        </ul>
    </x-card>
</x-main>
