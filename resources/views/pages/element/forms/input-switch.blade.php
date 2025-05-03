<!-- filepath: /home/zulfi/development/fexend-blade/resources/views/pages/element/forms/switch.blade.php -->
<?php
use function Laravel\Folio\name;
name('element.forms.input-switch');
?>

<x-main title="Switch Input Component">
    <x-slot name="title">Switch Input Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Switch Input" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Switch Input Component</h2>
        </x-slot>
        <p>The switch input component provides an intuitive and visually appealing way to toggle between two states. Commonly used for enabling/disabling features or settings, switches offer a more intuitive alternative to checkboxes for binary choices, with clear visual feedback about the current state.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-switch-input name="basic_switch" id="basic_switch">Enable notifications</x-switch-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-switch-input name="basic_switch" id="basic_switch"&gt;Enable notifications&lt;/x-switch-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Switch Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Switch Variants</h2>
        </x-slot>

        <p class="mb-4">The switch input component supports different color variants to match your design system:</p>

        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-switch-input name="variant_primary" id="variant_primary" variant="primary" checked>Primary (Default)</x-switch-input>
            <x-switch-input name="variant_secondary" id="variant_secondary" variant="secondary" checked>Secondary</x-switch-input>
            <x-switch-input name="variant_success" id="variant_success" variant="success" checked>Success</x-switch-input>
            <x-switch-input name="variant_danger" id="variant_danger" variant="danger" checked>Danger</x-switch-input>
            <x-switch-input name="variant_warning" id="variant_warning" variant="warning" checked>Warning</x-switch-input>
            <x-switch-input name="variant_info" id="variant_info" variant="info" checked>Info</x-switch-input>
            <x-switch-input name="variant_dark" id="variant_dark" variant="dark" checked>Dark</x-switch-input>
            <x-switch-input name="variant_light" id="variant_light" variant="light" checked>Light</x-switch-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-switch-input name="variant_primary" id="variant_primary" variant="primary" checked&gt;Primary (Default)&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_secondary" id="variant_secondary" variant="secondary" checked&gt;Secondary&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_success" id="variant_success" variant="success" checked&gt;Success&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_danger" id="variant_danger" variant="danger" checked&gt;Danger&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_warning" id="variant_warning" variant="warning" checked&gt;Warning&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_info" id="variant_info" variant="info" checked&gt;Info&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_dark" id="variant_dark" variant="dark" checked&gt;Dark&lt;/x-switch-input&gt;
&lt;x-switch-input name="variant_light" id="variant_light" variant="light" checked&gt;Light&lt;/x-switch-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Switch States Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Switch States</h2>
        </x-slot>

        <p class="mb-4">Switches can be in different states:</p>

        <div class="mb-6 space-y-4">
            <x-switch-input name="state_unchecked" id="state_unchecked">Unchecked (Off)</x-switch-input>
            <x-switch-input name="state_checked" id="state_checked" checked>Checked (On)</x-switch-input>
            <x-switch-input name="state_disabled" id="state_disabled" disabled>Disabled Unchecked</x-switch-input>
            <x-switch-input name="state_disabled_checked" id="state_disabled_checked" checked disabled>Disabled Checked</x-switch-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-switch-input name="state_unchecked" id="state_unchecked"&gt;Unchecked (Off)&lt;/x-switch-input&gt;
&lt;x-switch-input name="state_checked" id="state_checked" checked&gt;Checked (On)&lt;/x-switch-input&gt;
&lt;x-switch-input name="state_disabled" id="state_disabled" disabled&gt;Disabled Unchecked&lt;/x-switch-input&gt;
&lt;x-switch-input name="state_disabled_checked" id="state_disabled_checked" checked disabled&gt;Disabled Checked&lt;/x-switch-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">Switch inputs are commonly used for:</p>

        <!-- Settings Panel -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Settings Panel</h3>
            </x-slot>

            <div class="mb-6">
                <div class="space-y-4">
                    <div class="p-4 border rounded-lg dark:border-slate-700">
                        <h4 class="text-lg font-medium mb-4">Notification Settings</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Email Notifications</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Receive updates via email</p>
                                </div>
                                <x-switch-input name="email_notifications" id="email_notifications" checked></x-switch-input>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Push Notifications</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Receive alerts on your device</p>
                                </div>
                                <x-switch-input name="push_notifications" id="push_notifications"></x-switch-input>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">SMS Notifications</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Receive text messages</p>
                                </div>
                                <x-switch-input name="sms_notifications" id="sms_notifications" variant="danger"></x-switch-input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;div class="p-4 border rounded-lg dark:border-slate-700"&gt;
    &lt;h4 class="text-lg font-medium mb-4"&gt;Notification Settings&lt;/h4&gt;
    &lt;div class="space-y-4"&gt;
        &lt;div class="flex justify-between items-center"&gt;
            &lt;div&gt;
                &lt;p class="font-medium"&gt;Email Notifications&lt;/p&gt;
                &lt;p class="text-sm text-slate-500 dark:text-slate-400"&gt;Receive updates via email&lt;/p&gt;
            &lt;/div&gt;
            &lt;x-switch-input name="email_notifications" id="email_notifications" checked&gt;&lt;/x-switch-input&gt;
        &lt;/div&gt;
        &lt;div class="flex justify-between items-center"&gt;
            &lt;div&gt;
                &lt;p class="font-medium"&gt;Push Notifications&lt;/p&gt;
                &lt;p class="text-sm text-slate-500 dark:text-slate-400"&gt;Receive alerts on your device&lt;/p&gt;
            &lt;/div&gt;
            &lt;x-switch-input name="push_notifications" id="push_notifications"&gt;&lt;/x-switch-input&gt;
        &lt;/div&gt;
        &lt;div class="flex justify-between items-center"&gt;
            &lt;div&gt;
                &lt;p class="font-medium"&gt;SMS Notifications&lt;/p&gt;
                &lt;p class="text-sm text-slate-500 dark:text-slate-400"&gt;Receive text messages&lt;/p&gt;
            &lt;/div&gt;
            &lt;x-switch-input name="sms_notifications" id="sms_notifications" variant="danger"&gt;&lt;/x-switch-input&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Feature Toggles -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Feature Toggles</h3>
            </x-slot>

            <div class="mb-6">
                <div class="space-y-4">
                    <div class="p-4 border rounded-lg dark:border-slate-700">
                        <h4 class="text-lg font-medium mb-4">Feature Management</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Dark Mode</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Enable dark theme for the interface</p>
                                </div>
                                <x-switch-input name="dark_mode" id="dark_mode" variant="dark" checked></x-switch-input>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Beta Features</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Enable experimental features</p>
                                </div>
                                <x-switch-input name="beta_features" id="beta_features" variant="warning"></x-switch-input>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Two-Factor Authentication</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Improve account security</p>
                                </div>
                                <x-switch-input name="two_factor" id="two_factor" variant="success" checked></x-switch-input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Switch Input Component Props">
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
                    <td>name</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The name attribute for the switch input field.</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The ID attribute for the switch input, used for label association.</td>
                </tr>
                <tr>
                    <td>variant</td>
                    <td>string</td>
                    <td>'primary'</td>
                    <td>The color variant (primary, secondary, success, danger, warning, info, dark, light).</td>
                </tr>
                <tr>
                    <td>checked</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the switch input is initially checked/on.</td>
                </tr>
                <tr>
                    <td>disabled</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the switch input is disabled.</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Additional CSS classes to apply to the switch input.</td>
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
            <li>Use switch inputs for binary choices (on/off, yes/no) rather than multiple options.</li>
            <li>Position the switch to the right of its label for consistent and intuitive user experience.</li>
            <li>Use clear, concise labels that describe what the switch controls.</li>
            <li>Consider adding helper text beneath complex options to explain their purpose.</li>
            <li>Choose appropriate color variants that align with the meaning of the option (e.g., success for enabling positive features, danger for potentially destructive actions).</li>
            <li>Apply immediate visual feedback when a switch is toggled, if possible.</li>
            <li>Group related switches together in logical sections.</li>
            <li>Consider the default state carefully - don't enable features by default that might surprise users.</li>
            <li>For important settings, consider showing a confirmation dialog when toggled.</li>
            <li>Ensure switches have sufficient touch target size for mobile users.</li>
            <li>If a setting requires a page reload or has a delayed effect, communicate this to the user.</li>
            <li>Disabled switches should clearly indicate why they're disabled (with helper text or tooltips).</li>
        </ul>
    </x-card>
</x-main>
