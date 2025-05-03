<?php
use function Laravel\Folio\name;
name('element.forms.input-radio');
?>

<x-main title="Radio Input Component">
    <x-slot name="title">Radio Input Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Radio Input" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Radio Input Component</h2>
        </x-slot>
        <p>The radio input component provides a flexible and consistent way to capture single-selection choices from users. It supports multiple styles including basic radios, card options, and button-style selectors, with customizable variants to match your design system.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-radio-input name="basic_example" value="option1" id="basic_option1" checked>Option 1</x-radio-input>
            <x-radio-input name="basic_example" value="option2" id="basic_option2">Option 2</x-radio-input>
            <x-radio-input name="basic_example" value="option3" id="basic_option3">Option 3</x-radio-input>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-radio-input name="basic_example" value="option1" id="basic_option1" checked&gt;Option 1&lt;/x-radio-input&gt;
&lt;x-radio-input name="basic_example" value="option2" id="basic_option2"&gt;Option 2&lt;/x-radio-input&gt;
&lt;x-radio-input name="basic_example" value="option3" id="basic_option3"&gt;Option 3&lt;/x-radio-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Radio Styles Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Radio Styles</h2>
        </x-slot>

        <p class="mb-4">The radio input component supports three distinct styles:</p>

        <!-- Basic Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Basic Style (Default)</h3>
            </x-slot>

            <div class="mb-6">
                <x-radio-input name="style_basic" value="yes" id="style_basic_yes" style="basic" checked>Yes</x-radio-input>
                <x-radio-input name="style_basic" value="no" id="style_basic_no" style="basic">No</x-radio-input>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-radio-input name="style_basic" value="yes" id="style_basic_yes" style="basic" checked&gt;Yes&lt;/x-radio-input&gt;
&lt;x-radio-input name="style_basic" value="no" id="style_basic_no" style="basic"&gt;No&lt;/x-radio-input&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Card Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Card Style</h3>
            </x-slot>

            <div class="mb-6 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <x-radio-input name="style_card" value="basic" id="style_card_basic" style="card" checked>
                        <div class="font-medium">Basic Plan</div>
                        <div class="text-slate-500">$9.99/month</div>
                        <div class="mt-2 text-xs">Perfect for beginners</div>
                    </x-radio-input>

                    <x-radio-input name="style_card" value="pro" id="style_card_pro" style="card">
                        <div class="font-medium">Pro Plan</div>
                        <div class="text-slate-500">$19.99/month</div>
                        <div class="mt-2 text-xs">Most popular choice</div>
                    </x-radio-input>

                    <x-radio-input name="style_card" value="enterprise" id="style_card_enterprise" style="card">
                        <div class="font-medium">Enterprise Plan</div>
                        <div class="text-slate-500">$49.99/month</div>
                        <div class="mt-2 text-xs">For large organizations</div>
                    </x-radio-input>
                </div>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-radio-input name="style_card" value="basic" id="style_card_basic" style="card" checked&gt;
    &lt;div class="font-medium"&gt;Basic Plan&lt;/div&gt;
    &lt;div class="text-slate-500"&gt;$9.99/month&lt;/div&gt;
    &lt;div class="mt-2 text-xs"&gt;Perfect for beginners&lt;/div&gt;
&lt;/x-radio-input&gt;

&lt;x-radio-input name="style_card" value="pro" id="style_card_pro" style="card"&gt;
    &lt;div class="font-medium"&gt;Pro Plan&lt;/div&gt;
    &lt;div class="text-slate-500"&gt;$19.99/month&lt;/div&gt;
    &lt;div class="mt-2 text-xs"&gt;Most popular choice&lt;/div&gt;
&lt;/x-radio-input&gt;

&lt;x-radio-input name="style_card" value="enterprise" id="style_card_enterprise" style="card"&gt;
    &lt;div class="font-medium"&gt;Enterprise Plan&lt;/div&gt;
    &lt;div class="text-slate-500"&gt;$49.99/month&lt;/div&gt;
    &lt;div class="mt-2 text-xs"&gt;For large organizations&lt;/div&gt;
&lt;/x-radio-input&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Button Style -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Button Style</h3>
            </x-slot>

            <div class="mb-6">
                <div class="flex flex-wrap gap-2">
                    <x-radio-input name="style_button" value="small" id="style_button_small" style="button" checked>Small</x-radio-input>
                    <x-radio-input name="style_button" value="medium" id="style_button_medium" style="button">Medium</x-radio-input>
                    <x-radio-input name="style_button" value="large" id="style_button_large" style="button">Large</x-radio-input>
                </div>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-radio-input name="style_button" value="small" id="style_button_small" style="button" checked&gt;Small&lt;/x-radio-input&gt;
&lt;x-radio-input name="style_button" value="medium" id="style_button_medium" style="button"&gt;Medium&lt;/x-radio-input&gt;
&lt;x-radio-input name="style_button" value="large" id="style_button_large" style="button"&gt;Large&lt;/x-radio-input&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Button Variants Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Button Variants</h2>
        </x-slot>

        <p class="mb-4">Button-style radio inputs support different color variants:</p>

        <div class="mb-6 space-y-4">
            <div class="flex flex-wrap gap-2">
                <x-radio-input name="variant" value="primary" id="variant_primary" style="button" variant="primary" checked>Primary</x-radio-input>
                <x-radio-input name="variant" value="secondary" id="variant_secondary" style="button" variant="secondary">Secondary</x-radio-input>
                <x-radio-input name="variant" value="success" id="variant_success" style="button" variant="success">Success</x-radio-input>
                <x-radio-input name="variant" value="danger" id="variant_danger" style="button" variant="danger">Danger</x-radio-input>
                <x-radio-input name="variant" value="warning" id="variant_warning" style="button" variant="warning">Warning</x-radio-input>
                <x-radio-input name="variant" value="info" id="variant_info" style="button" variant="info">Info</x-radio-input>
                <x-radio-input name="variant" value="dark" id="variant_dark" style="button" variant="dark">Dark</x-radio-input>
                <x-radio-input name="variant" value="light" id="variant_light" style="button" variant="light">Light</x-radio-input>
            </div>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-radio-input name="variant" value="primary" id="variant_primary" style="button" variant="primary" checked&gt;Primary&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="secondary" id="variant_secondary" style="button" variant="secondary"&gt;Secondary&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="success" id="variant_success" style="button" variant="success"&gt;Success&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="danger" id="variant_danger" style="button" variant="danger"&gt;Danger&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="warning" id="variant_warning" style="button" variant="warning"&gt;Warning&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="info" id="variant_info" style="button" variant="info"&gt;Info&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="dark" id="variant_dark" style="button" variant="dark"&gt;Dark&lt;/x-radio-input&gt;
&lt;x-radio-input name="variant" value="light" id="variant_light" style="button" variant="light"&gt;Light&lt;/x-radio-input&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">Radio input components can be used in various contexts:</p>

        <!-- Survey Form -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Survey Form</h3>
            </x-slot>

            <div class="mb-6">
                <form class="space-y-6">
                    <div>
                        <h4 class="text-base font-medium mb-3">How satisfied are you with our service?</h4>
                        <div class="space-y-2">
                            <x-radio-input name="satisfaction" value="5" id="satisfaction_5">Very satisfied</x-radio-input>
                            <x-radio-input name="satisfaction" value="4" id="satisfaction_4">Satisfied</x-radio-input>
                            <x-radio-input name="satisfaction" value="3" id="satisfaction_3">Neutral</x-radio-input>
                            <x-radio-input name="satisfaction" value="2" id="satisfaction_2">Dissatisfied</x-radio-input>
                            <x-radio-input name="satisfaction" value="1" id="satisfaction_1">Very dissatisfied</x-radio-input>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-base font-medium mb-3">Would you recommend our product to others?</h4>
                        <div class="flex flex-wrap gap-2">
                            <x-radio-input name="recommend" value="yes" id="recommend_yes" style="button" variant="success">Yes, definitely</x-radio-input>
                            <x-radio-input name="recommend" value="maybe" id="recommend_maybe" style="button" variant="warning">Maybe</x-radio-input>
                            <x-radio-input name="recommend" value="no" id="recommend_no" style="button" variant="danger">No</x-radio-input>
                        </div>
                    </div>

                    <x-button class="button-primary">Submit Survey</x-button>
                </form>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;form class="space-y-6"&gt;
    &lt;div&gt;
        &lt;h4 class="text-base font-medium mb-3"&gt;How satisfied are you with our service?&lt;/h4&gt;
        &lt;div class="space-y-2"&gt;
            &lt;x-radio-input name="satisfaction" value="5" id="satisfaction_5"&gt;Very satisfied&lt;/x-radio-input&gt;
            &lt;x-radio-input name="satisfaction" value="4" id="satisfaction_4"&gt;Satisfied&lt;/x-radio-input&gt;
            &lt;x-radio-input name="satisfaction" value="3" id="satisfaction_3"&gt;Neutral&lt;/x-radio-input&gt;
            &lt;x-radio-input name="satisfaction" value="2" id="satisfaction_2"&gt;Dissatisfied&lt;/x-radio-input&gt;
            &lt;x-radio-input name="satisfaction" value="1" id="satisfaction_1"&gt;Very dissatisfied&lt;/x-radio-input&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;h4 class="text-base font-medium mb-3"&gt;Would you recommend our product to others?&lt;/h4&gt;
        &lt;div class="flex flex-wrap gap-2"&gt;
            &lt;x-radio-input name="recommend" value="yes" id="recommend_yes" style="button" variant="success"&gt;Yes, definitely&lt;/x-radio-input&gt;
            &lt;x-radio-input name="recommend" value="maybe" id="recommend_maybe" style="button" variant="warning"&gt;Maybe&lt;/x-radio-input&gt;
            &lt;x-radio-input name="recommend" value="no" id="recommend_no" style="button" variant="danger"&gt;No&lt;/x-radio-input&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;x-button class="button-primary"&gt;Submit Survey&lt;/x-button&gt;
&lt;/form&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Product Options -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Product Options</h3>
            </x-slot>

            <div class="mb-6">
                <form>
                    <div class="mb-4">
                        <h4 class="text-base font-medium mb-3">Choose a size:</h4>
                        <div class="flex flex-wrap gap-2">
                            <x-radio-input name="size" value="s" id="size_s" style="button">S</x-radio-input>
                            <x-radio-input name="size" value="m" id="size_m" style="button" checked>M</x-radio-input>
                            <x-radio-input name="size" value="l" id="size_l" style="button">L</x-radio-input>
                            <x-radio-input name="size" value="xl" id="size_xl" style="button">XL</x-radio-input>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-base font-medium mb-3">Choose a color:</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <x-radio-input name="color" value="red" id="color_red" style="card">
                                <div class="flex items-center">
                                    <div class="w-6 h-6 rounded-full bg-red-500 mr-2"></div>
                                    <span>Red</span>
                                </div>
                            </x-radio-input>

                            <x-radio-input name="color" value="blue" id="color_blue" style="card" checked>
                                <div class="flex items-center">
                                    <div class="w-6 h-6 rounded-full bg-blue-500 mr-2"></div>
                                    <span>Blue</span>
                                </div>
                            </x-radio-input>

                            <x-radio-input name="color" value="green" id="color_green" style="card">
                                <div class="flex items-center">
                                    <div class="w-6 h-6 rounded-full bg-green-500 mr-2"></div>
                                    <span>Green</span>
                                </div>
                            </x-radio-input>

                            <x-radio-input name="color" value="black" id="color_black" style="card">
                                <div class="flex items-center">
                                    <div class="w-6 h-6 rounded-full bg-black mr-2"></div>
                                    <span>Black</span>
                                </div>
                            </x-radio-input>
                        </div>
                    </div>

                    <x-button class="button-primary">Add to Cart</x-button>
                </form>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Radio Input Component Props">
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
                    <td>The name attribute for the radio input field, used for grouping radios together.</td>
                </tr>
                <tr>
                    <td>value</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The value attribute for the radio input, sent when form is submitted.</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The ID attribute for the radio input, used for label association.</td>
                </tr>
                <tr>
                    <td>style</td>
                    <td>string</td>
                    <td>'basic'</td>
                    <td>The visual style of radio - 'basic', 'card', or 'button'.</td>
                </tr>
                <tr>
                    <td>variant</td>
                    <td>string</td>
                    <td>'primary'</td>
                    <td>The color variant for button-style radios (primary, secondary, success, etc).</td>
                </tr>
                <tr>
                    <td>checked</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the radio input is initially checked.</td>
                </tr>
                <tr>
                    <td>disabled</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the radio input is disabled.</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Additional CSS classes to apply to the radio input.</td>
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
            <li>Use radio inputs when users must select exactly one option from a list.</li>
            <li>Always group related radio inputs with the same name attribute.</li>
            <li>Provide a default selected option when possible to avoid a null state.</li>
            <li>Use descriptive labels that clearly indicate what each option represents.</li>
            <li>Consider the card style for options that require more description or visual elements.</li>
            <li>Use button style for more compact interfaces or when options are simple choices.</li>
            <li>Apply color variants purposefully - use semantic colors that convey meaning.</li>
            <li>Ensure radio inputs have sufficient spacing between them for easy selection.</li>
            <li>Keep the number of options manageable - if there are many options, consider a select dropdown instead.</li>
            <li>Always include a visible label for each radio input for accessibility.</li>
            <li>Use appropriate ID attributes to ensure proper label association.</li>
        </ul>
    </x-card>
</x-main>
