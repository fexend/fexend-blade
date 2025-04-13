<?php
use function Laravel\Folio\name;
name('component.dropdown');
?>

<x-main>
    <x-slot name="title">Dropdown Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dropdown" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Dropdown Component</h2>
        </x-slot>
        <p>The dropdown component provides a toggleable menu that can contain links, buttons, and other interactive elements. It's commonly used for navigation, actions menus, and more complex user interactions.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6">
            <x-dropdown-menu>
                <x-dropdown-item href="#">View Profile</x-dropdown-item>
                <x-dropdown-item href="#">Settings</x-dropdown-item>
                <x-dropdown-item href="#" method="POST">Logout</x-dropdown-item>
            </x-dropdown-menu>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-dropdown-menu&gt;
    &lt;x-dropdown-item href="#"&gt;View Profile&lt;/x-dropdown-item&gt;
    &lt;x-dropdown-item href="#"&gt;Settings&lt;/x-dropdown-item&gt;
    &lt;x-dropdown-item href="#" method="POST"&gt;Logout&lt;/x-dropdown-item&gt;
&lt;/x-dropdown-menu&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <!-- Icon Only -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Icon Only</h3>
            </x-slot>

            <div class="mb-6">
                <x-dropdown-menu :icon-only="true" button-class="button button-primary-outline">
                    <x-dropdown-item href="#">Action 1</x-dropdown-item>
                    <x-dropdown-item href="#">Action 2</x-dropdown-item>
                </x-dropdown-menu>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-dropdown-menu :icon-only="true" button-class="button button-primary-outline"&gt;
    &lt;x-dropdown-item href="#"&gt;Action 1&lt;/x-dropdown-item&gt;
    &lt;x-dropdown-item href="#"&gt;Action 2&lt;/x-dropdown-item&gt;
&lt;/x-dropdown-menu&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Custom Button Text -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Custom Button Text</h3>
            </x-slot>

            <div class="mb-6">
                <x-dropdown-menu button-text="Options">
                    <x-dropdown-item href="#">Option 1</x-dropdown-item>
                    <x-dropdown-item href="#">Option 2</x-dropdown-item>
                </x-dropdown-menu>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-dropdown-menu button-text="Options"&gt;
    &lt;x-dropdown-item href="#"&gt;Option 1&lt;/x-dropdown-item&gt;
    &lt;x-dropdown-item href="#"&gt;Option 2&lt;/x-dropdown-item&gt;
&lt;/x-dropdown-menu&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <!-- Action Menu -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Action Menu</h3>
            </x-slot>

            <div class="mb-6">
                <x-dropdown-menu>
                    <x-dropdown-item href="#">View Details</x-dropdown-item>
                    <x-dropdown-item href="#">Edit</x-dropdown-item>
                    <x-dropdown-item href="#" method="DELETE">Delete</x-dropdown-item>
                </x-dropdown-menu>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-dropdown-menu&gt;
    &lt;x-dropdown-item href="#"&gt;View Details&lt;/x-dropdown-item&gt;
    &lt;x-dropdown-item href="#"&gt;Edit&lt;/x-dropdown-item&gt;
    &lt;x-dropdown-item href="#" method="DELETE"&gt;Delete&lt;/x-dropdown-item&gt;
&lt;/x-dropdown-menu&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Dropdown Menu Component Props">
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
                    <td>align</td>
                    <td>string</td>
                    <td>'right'</td>
                    <td>Alignment of the dropdown menu. Options: 'left', 'right'.</td>
                </tr>
                <tr>
                    <td>width</td>
                    <td>string</td>
                    <td>'48'</td>
                    <td>Width of the dropdown menu in tailwind units.</td>
                </tr>
                <tr>
                    <td>buttonClass</td>
                    <td>string</td>
                    <td>'button button-primary button-group'</td>
                    <td>CSS classes for the dropdown trigger button.</td>
                </tr>
                <tr>
                    <td>buttonText</td>
                    <td>string|null</td>
                    <td>'Actions'</td>
                    <td>Text to display on the dropdown button.</td>
                </tr>
                <tr>
                    <td>iconOnly</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to show only the dropdown icon without text.</td>
                </tr>
            </x-slot>
        </x-table>

        <x-table title="Dropdown Item Component Props" class="mt-4">
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
                    <td>The URL for the dropdown item.</td>
                </tr>
                <tr>
                    <td>method</td>
                    <td>string</td>
                    <td>'GET'</td>
                    <td>HTTP method for the action. Options: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE'.</td>
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
            <li>Use clear and concise labels for dropdown items.</li>
            <li>Group related actions together within the dropdown.</li>
            <li>Consider using icons alongside text to improve visual comprehension.</li>
            <li>Place destructive actions (like Delete) at the bottom of the dropdown.</li>
            <li>Use appropriate HTTP methods for different actions (GET for navigation, POST/DELETE for operations).</li>
            <li>Ensure dropdown menus are keyboard accessible.</li>
        </ul>
    </x-card>
</x-main>
