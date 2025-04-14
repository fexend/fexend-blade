<?php
use function Laravel\Folio\name;
name('element.forms.checkbox');
?>
<x-main>
    <x-slot name="title">Checkbox Input</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Checkbox" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Checkbox Input Component</h2>
        </x-slot>
        <p>The checkbox input component provides various styles of checkboxes for user input. It supports basic checkboxes, divider style, and card style variants with different color options.</p>
    </x-card>

    <!-- Basic Example -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-checkbox-input name="basic1" id="basic1">
                Basic checkbox
            </x-checkbox-input>

            <x-checkbox-input name="basic2" id="basic2" checked>
                Checked checkbox
            </x-checkbox-input>

            <x-checkbox-input name="basic3" id="basic3" disabled>
                Disabled checkbox
            </x-checkbox-input>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-checkbox-input name="basic1" id="basic1"&gt;
    Basic checkbox
&lt;/x-checkbox-input&gt;

&lt;x-checkbox-input name="basic2" id="basic2" checked&gt;
    Checked checkbox
&lt;/x-checkbox-input&gt;

&lt;x-checkbox-input name="basic3" id="basic3" disabled&gt;
    Disabled checkbox
&lt;/x-checkbox-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Styles -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Checkbox Styles</h2>
        </x-slot>

        <!-- Basic Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Basic Style</h3>
            </x-slot>

            <div class="mb-6 space-y-4">
                <x-checkbox-input name="style1" id="style1" style="basic">
                    Basic style checkbox
                </x-checkbox-input>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-checkbox-input name="style1" id="style1" style="basic"&gt;
    Basic style checkbox
&lt;/x-checkbox-input&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Divider Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Divider Style</h3>
            </x-slot>

            <div class="mb-6 space-y-4">
                <x-checkbox-input name="style2" id="style2" style="divider">
                    <p>Divider style checkbox</p>
                    <span>Additional description text</span>
                </x-checkbox-input>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-checkbox-input name="style2" id="style2" style="divider"&gt;
    &lt;p&gt;Divider style checkbox&lt;/p&gt;
    &lt;span&gt;Additional description text&lt;/span&gt;
&lt;/x-checkbox-input&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Card Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Card Style</h3>
            </x-slot>

            <div class="mb-6 space-y-4">
                <x-checkbox-input name="style3" id="style3" style="card">
                    <p>Card style checkbox</p>
                    <span>Click to select this option</span>
                </x-checkbox-input>
            </div>

            <div class="rounded-md">
                <pre><code class="language-blade">
&lt;x-checkbox-input name="style3" id="style3" style="card"&gt;
    &lt;p&gt;Card style checkbox&lt;/p&gt;
    &lt;span&gt;Click to select this option&lt;/span&gt;
&lt;/x-checkbox-input&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Variants -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Card Style Variants</h2>
        </x-slot>

        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-checkbox-input name="variant1" id="variant1" style="card" variant="primary">
                <p>Primary Variant</p>
                <span>Primary colored card checkbox</span>
            </x-checkbox-input>

            <x-checkbox-input name="variant2" id="variant2" style="card" variant="secondary">
                <p>Secondary Variant</p>
                <span>Secondary colored card checkbox</span>
            </x-checkbox-input>

            <x-checkbox-input name="variant3" id="variant3" style="card" variant="success">
                <p>Success Variant</p>
                <span>Success colored card checkbox</span>
            </x-checkbox-input>

            <x-checkbox-input name="variant4" id="variant4" style="card" variant="danger">
                <p>Danger Variant</p>
                <span>Danger colored card checkbox</span>
            </x-checkbox-input>
        </div>

        <div class="rounded-md">
            <pre><code class="language-blade">
&lt;x-checkbox-input name="variant1" style="card" variant="primary"&gt;
    &lt;p&gt;Primary Variant&lt;/p&gt;
    &lt;span&gt;Primary colored card checkbox&lt;/span&gt;
&lt;/x-checkbox-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Component API -->
    <x-card class="mb-4">
        <x-table title="Checkbox Input Component Props">
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
                    <td>required</td>
                    <td>The name attribute for the checkbox input.</td>
                </tr>
                <tr>
                    <td>style</td>
                    <td>string</td>
                    <td>'basic'</td>
                    <td>The style of the checkbox. Options: 'basic', 'divider', 'card'.</td>
                </tr>
                <tr>
                    <td>variant</td>
                    <td>string</td>
                    <td>'primary'</td>
                    <td>The color variant for card style. Options: 'primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark', 'light'.</td>
                </tr>
                <tr>
                    <td>checked</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the checkbox is checked by default.</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The ID attribute for the checkbox input. Falls back to name if not provided.</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Always provide a meaningful label for checkboxes to improve accessibility.</li>
            <li>Use the basic style for simple yes/no options.</li>
            <li>Use the divider style when additional description text is needed.</li>
            <li>Use card style for more prominent, feature selection scenarios.</li>
            <li>Group related checkboxes together using appropriate containers.</li>
            <li>Ensure sufficient spacing between checkbox options for better usability.</li>
            <li>Use color variants that match your application's design system.</li>
        </ul>
    </x-card>
</x-main>
