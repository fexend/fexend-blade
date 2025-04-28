<?php
use function Laravel\Folio\name;
name('element.button');
?>

<x-main>
    <x-slot name="title">Button Element</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Button" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Button Element</h2>
        </x-slot>
        <p>The button component provides interactive elements for user actions. Buttons can be customized with different sizes, colors, and styles to create a consistent and engaging user interface.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-2 flex flex-wrap gap-2">
            <x-button class="button-primary">Primary</x-button>
            <x-button class="button-secondary">Secondary</x-button>
            <x-button class="button-success">Success</x-button>
            <x-button class="button-danger">Danger</x-button>
            <x-button class="button-warning">Warning</x-button>
            <x-button class="button-info">Info</x-button>
            <x-button class="button-dark">Dark</x-button>
            <x-button class="button-white">White</x-button>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary"&gt;Primary&lt;/x-button&gt;
&lt;x-button class="button-secondary"&gt;Secondary&lt;/x-button&gt;
&lt;x-button class="button-success"&gt;Success&lt;/x-button&gt;
&lt;x-button class="button-danger"&gt;Danger&lt;/x-button&gt;
&lt;x-button class="button-warning"&gt;Warning&lt;/x-button&gt;
&lt;x-button class="button-info"&gt;Info&lt;/x-button&gt;
&lt;x-button class="button-dark"&gt;Dark&lt;/x-button&gt;
&lt;x-button class="button-white"&gt;White&lt;/x-button&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <p class="mb-4">The button component comes with several style variants.</p>

        <!-- Soft Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Soft Variant</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-button class="button-primary-soft">Primary</x-button>
                <x-button class="button-secondary-soft">Secondary</x-button>
                <x-button class="button-success-soft">Success</x-button>
                <x-button class="button-danger-soft">Danger</x-button>
                <x-button class="button-dark-soft">Dark</x-button>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary-soft"&gt;Primary&lt;/x-button&gt;
&lt;x-button class="button-secondary-soft"&gt;Secondary&lt;/x-button&gt;
&lt;x-button class="button-success-soft"&gt;Success&lt;/x-button&gt;
&lt;x-button class="button-danger-soft"&gt;Danger&lt;/x-button&gt;
&lt;x-button class="button-dark-soft"&gt;Dark&lt;/x-button&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Outline Variant -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Outline Variant</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-button class="button-primary-outline">Primary</x-button>
                <x-button class="button-secondary-outline">Secondary</x-button>
                <x-button class="button-success-outline">Success</x-button>
                <x-button class="button-danger-outline">Danger</x-button>
                <x-button class="button-dark-outline">Dark</x-button>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary-outline"&gt;Primary&lt;/x-button&gt;
&lt;x-button class="button-secondary-outline"&gt;Secondary&lt;/x-button&gt;
&lt;x-button class="button-success-outline"&gt;Success&lt;/x-button&gt;
&lt;x-button class="button-danger-outline"&gt;Danger&lt;/x-button&gt;
&lt;x-button class="button-dark-outline"&gt;Dark&lt;/x-button&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Size Variants -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Size Variants</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap items-center gap-2">
                <x-button class="button-primary button-sm">Small</x-button>
                <x-button class="button-primary">Default</x-button>
                <x-button class="button-primary button-lg">Large</x-button>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary button-sm"&gt;Small&lt;/x-button&gt;
&lt;x-button class="button-primary"&gt;Default&lt;/x-button&gt;
&lt;x-button class="button-primary button-lg"&gt;Large&lt;/x-button&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <!-- Icon Buttons -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Icon Buttons</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-button class="button-primary flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg> Add Item
                </x-button>
                <x-button class="button-danger flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7l16 0" />
                        <path d="M10 11l0 6" />
                        <path d="M14 11l0 6" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg> Delete
                </x-button>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary flex"&gt;
    &lt;x-icon name="plus" class="w-4 h-4 mr-2" /&gt; Add Item
&lt;/x-button&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Loading State -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Loading State</h3>
            </x-slot>

            <div class="mb-6 space-x-2 flex flex-wrap gap-2">
                <x-button class="button-primary" loading>Loading...</x-button>
                <x-button class="button-secondary" loading disabled>Processing</x-button>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary" loading&gt;Loading...&lt;/x-button&gt;
&lt;x-button class="button-secondary" loading disabled&gt;Processing&lt;/x-button&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Button CSS Classes">
            <x-slot name="thead">
                <tr>
                    <th>Class</th>
                    <th>Description</th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                <tr>
                    <td>button</td>
                    <td>Base button class</td>
                </tr>
                <tr>
                    <td>button-{color}</td>
                    <td>Color variants (primary, secondary, success, danger, warning, info, dark, white)</td>
                </tr>
                <tr>
                    <td>button-{color}-soft</td>
                    <td>Soft color variants</td>
                </tr>
                <tr>
                    <td>button-{color}-outline</td>
                    <td>Outline color variants</td>
                </tr>
                <tr>
                    <td>button-sm</td>
                    <td>Small size variant</td>
                </tr>
                <tr>
                    <td>button-lg</td>
                    <td>Large size variant</td>
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
            <li>Use clear and action-oriented text for button labels</li>
            <li>Choose button types that match the action's importance (e.g., primary for main actions)</li>
            <li>Maintain consistent button styling throughout your application</li>
            <li>Use appropriate loading states for asynchronous actions</li>
            <li>Include icons to enhance visual recognition when appropriate</li>
            <li>Ensure sufficient color contrast for accessibility</li>
            <li>Consider using soft or outline variants for secondary actions</li>
        </ul>
    </x-card>
</x-main>
