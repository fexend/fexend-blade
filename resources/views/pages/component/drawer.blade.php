<?php
use function Laravel\Folio\name;
name('component.drawer');
?>

<x-main>
    <x-slot name="title">Drawer Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Drawer" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Drawer Component</h2>
        </x-slot>
        <p>The drawer component provides a sliding panel that can appear from different edges of the screen. It's commonly used for navigation menus, filters, or supplementary content that doesn't need to be visible at all times.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-2">
            <x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-basic' })">
                Open Drawer
            </x-button>

            <x-drawer id="drawer-basic">
                <x-slot name="header">Basic Drawer</x-slot>
                <p class="p-4">This is a basic drawer example with default settings.</p>
            </x-drawer>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-basic' })"&gt;
    Open Drawer
&lt;/x-button&gt;

&lt;x-drawer id="drawer-basic"&gt;
    &lt;x-slot name="header"&gt;Basic Drawer&lt;/x-slot&gt;
    &lt;p class="p-4"&gt;This is a basic drawer example with default settings.&lt;/p&gt;
&lt;/x-drawer&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Positions Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Drawer Positions</h2>
        </x-slot>

        <div class="mb-6 space-x-2">
            <x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-left' })">
                Left Drawer
            </x-button>

            <x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-right' })">
                Right Drawer
            </x-button>

            <x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-bottom' })">
                Bottom Drawer
            </x-button>

            <x-drawer id="drawer-left" position="left">
                <x-slot name="header">Left Drawer</x-slot>
                <p class="p-4">Drawer from the left side</p>
            </x-drawer>

            <x-drawer id="drawer-right" position="right">
                <x-slot name="header">Right Drawer</x-slot>
                <p class="p-4">Drawer from the right side</p>
            </x-drawer>

            <x-drawer id="drawer-bottom" position="bottom" width="w-full">
                <x-slot name="header">Bottom Drawer</x-slot>
                <p class="p-4">Drawer from the bottom</p>
            </x-drawer>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-drawer id="drawer-example" position="left"&gt;
    &lt;x-slot name="header"&gt;Left Drawer&lt;/x-slot&gt;
    &lt;p class="p-4"&gt;Drawer content&lt;/p&gt;
&lt;/x-drawer&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Backdrop Options Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Backdrop Options</h2>
        </x-slot>

        <div class="mb-6 space-x-2">
            <x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-no-backdrop' })">
                No Backdrop
            </x-button>

            <x-button x-data @click="$dispatch('open-drawer', { id: 'drawer-blur' })">
                Blur Backdrop
            </x-button>

            <x-drawer id="drawer-no-backdrop" :backdrop="false">
                <x-slot name="header">No Backdrop</x-slot>
                <p class="p-4">Drawer without backdrop</p>
            </x-drawer>

            <x-drawer id="drawer-blur" :backdropBlur="true">
                <x-slot name="header">Blur Backdrop</x-slot>
                <p class="p-4">Drawer with blurred backdrop</p>
            </x-drawer>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-drawer id="drawer-example" :backdrop="false"&gt;
    &lt;!-- For no backdrop --&gt;
&lt;/x-drawer&gt;

&lt;x-drawer id="drawer-example" :backdropBlur="true"&gt;
    &lt;!-- For blurred backdrop --&gt;
&lt;/x-drawer&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Drawer Component Props">
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
                    <td>position</td>
                    <td>string</td>
                    <td>'left'</td>
                    <td>The position of the drawer. Options: 'left', 'right', 'bottom'</td>
                </tr>
                <tr>
                    <td>width</td>
                    <td>string</td>
                    <td>'max-w-xl'</td>
                    <td>The width of the drawer using Tailwind classes</td>
                </tr>
                <tr>
                    <td>height</td>
                    <td>string</td>
                    <td>'auto'</td>
                    <td>The height of the drawer</td>
                </tr>
                <tr>
                    <td>backdrop</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Whether to show the backdrop overlay</td>
                </tr>
                <tr>
                    <td>backdropBlur</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether to apply blur effect to the backdrop</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>string</td>
                    <td>auto-generated</td>
                    <td>Unique identifier for the drawer</td>
                </tr>
                <tr>
                    <td>closeButton</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Whether to show the close button in header</td>
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
            <li>Use drawers for secondary content that doesn't need to be always visible</li>
            <li>Choose appropriate positions based on the content type and user expectations</li>
            <li>Consider using the backdrop to maintain focus on the drawer content</li>
            <li>Implement proper close handling for better user experience</li>
            <li>Use appropriate widths based on the content being displayed</li>
            <li>Include clear close actions and allow backdrop clicks to dismiss</li>
        </ul>
    </x-card>
</x-main>
