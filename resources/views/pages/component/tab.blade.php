<?php
use function Laravel\Folio\name;
name('component.tab');
?>

<x-main>
    <x-slot name="title">Tab Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Tab" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Tab Component</h2>
        </x-slot>
        <p>The tab component provides an organized way to switch between different views or sections of content. It supports multiple styles and can include icons for better visual hierarchy.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6">
            @php
                $tabs = [['id' => 'tab1', 'label' => 'Profile'], ['id' => 'tab2', 'label' => 'Dashboard'], ['id' => 'tab3', 'label' => 'Settings']];
            @endphp
            <x-tab :tabs="$tabs">
                <x-slot name="tab-tab1">
                    <p>This is the profile content.</p>
                </x-slot>
                <x-slot name="tab-tab2">
                    <p>This is the dashboard content.</p>
                </x-slot>
                <x-slot name="tab-tab3">
                    <p>This is the settings content.</p>
                </x-slot>
            </x-tab>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tab :tabs="[
    ['id' => 'tab1', 'label' => 'Profile'],
    ['id' => 'tab2', 'label' => 'Dashboard'],
    ['id' => 'tab3', 'label' => 'Settings'],
]"&gt;
    &lt;x-slot name="tab-tab1"&gt;
        &lt;p&gt;This is the profile content.&lt;/p&gt;
    &lt;/x-slot&gt;
    &lt;x-slot name="tab-tab2"&gt;
        &lt;p&gt;This is the dashboard content.&lt;/p&gt;
    &lt;/x-slot&gt;
    &lt;x-slot name="tab-tab3"&gt;
        &lt;p&gt;This is the settings content.&lt;/p&gt;
    &lt;/x-slot&gt;
&lt;/x-tab&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Variants</h2>
        </x-slot>

        <!-- Button Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Button Style</h3>
            </x-slot>

            <div class="mb-6">
                @php
                    $tabs = [['id' => 'btn1', 'label' => 'Tab 1'], ['id' => 'btn2', 'label' => 'Tab 2']];
                @endphp
                <x-tab type="button" :tabs="$tabs">

                </x-tab>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tab type="button" :tabs="[
    ['id' => 'btn1', 'label' => 'Tab 1'],
    ['id' => 'btn2', 'label' => 'Tab 2'],
]"&gt;&lt;/x-tab&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Underline Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Underline Style</h3>
            </x-slot>

            <div class="mb-6">
                @php
                    $tabs = [['id' => 'under1', 'label' => 'Tab 1'], ['id' => 'under2', 'label' => 'Tab 2']];
                @endphp
                <x-tab type="underline" :tabs="$tabs">
                </x-tab>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tab type="underline" :tabs="[
    ['id' => 'under1', 'label' => 'Tab 1'],
    ['id' => 'under2', 'label' => 'Tab 2'],
]"&gt;&lt;/x-tab&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Underline with Icon -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Underline with Icon</h3>
            </x-slot>

            <div class="mb-6">
                @php
                    $tabs = [
                        ['id' => 'icon1', 'label' => 'Profile', 'icon' => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>'],
                        ['id' => 'icon2', 'label' => 'Settings', 'icon' => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>'],
                    ];
                @endphp
                <x-tab type="underline-with-icon" :tabs="$tabs">
                    <x-slot name="tab-icon1">
                        <p>This is the profile content.</p>
                    </x-slot>
                    <x-slot name="tab-icon2">
                        <p>This is the settings content.</p>
                    </x-slot>
                </x-tab>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-tab type="underline-with-icon" :tabs="[
    ['id' => 'icon1', 'label' => 'Profile', 'icon' => '&lt;i class="fas fa-user"&gt;&lt;/i&gt;'],
    ['id' => 'icon2', 'label' => 'Settings', 'icon' => '&lt;i class="fas fa-cog"&gt;&lt;/i&gt;'],
]"&gt;&lt;/x-tab&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Tab Component Props">
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
                    <td>type</td>
                    <td>string</td>
                    <td>'button'</td>
                    <td>The style of tabs. Options: 'button', 'underline', 'underline-with-icon'.</td>
                </tr>
                <tr>
                    <td>tabs</td>
                    <td>array</td>
                    <td>[]</td>
                    <td>Array of tab objects containing 'id', 'label', and optional 'icon' properties.</td>
                </tr>
                <tr>
                    <td>defaultActive</td>
                    <td>string</td>
                    <td>first tab id</td>
                    <td>The ID of the tab that should be active by default.</td>
                </tr>
                <tr>
                    <td>maxWidth</td>
                    <td>string</td>
                    <td>'max-w-2xl'</td>
                    <td>Maximum width class for the tab container.</td>
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
            <li>Use clear and concise labels for tab names.</li>
            <li>Keep the number of tabs minimal to avoid overwhelming users.</li>
            <li>Consider using icons with labels to improve visual recognition.</li>
            <li>Ensure tab content is relevant and well-organized.</li>
            <li>Use consistent tab styles throughout your application.</li>
            <li>Consider the appropriate tab style based on your UI design.</li>
        </ul>
    </x-card>
</x-main>
