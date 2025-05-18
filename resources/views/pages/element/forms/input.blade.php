<?php
use function Laravel\Folio\name;
name('element.forms.input');
?>

<x-main title="Input Component">
    <x-slot name="title">Input Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="Input" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Input Component</h2>
        </x-slot>
        <p>The input component provides a flexible and consistent way to capture user input through form fields. It supports various input types, labeling, error handling, icon integration, and more to enhance your forms.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-y-4">
            <x-input name="username" label="Username" placeholder="Enter your username" class="form-input" />
            <x-input-password name="password" label="Password" placeholder="Password...." required></x-input-password>
            <x-input name="email" type="email" label="Email" placeholder="Enter your email" required class="form-input" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input name="username" label="Username" placeholder="Enter your username" class="form-input" /&gt;
&lt;x-input-password name="password" label="Password" placeholder="Password...." required /&gt;
&lt;x-input name="email" type="email" label="Email" placeholder="Enter your email" required class="form-input" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Input Types Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Input Types</h2>
        </x-slot>

        <p class="mb-4">The input component supports various HTML input types:</p>

        <div class="mb-6 space-y-4">
            <x-input name="text-example" type="text" label="Text Input" placeholder="Basic text input" class="form-input" />
            <x-input name="number-example" type="number" label="Number Input" class="form-input" />
            <x-input name="date-example" type="date" label="Date Input" class="form-input" />
            <x-input-password name="password" label="Password" placeholder="Password...." required></x-input-password>
            <x-input name="email-example" type="email" label="Email Input" class="form-input" />
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input name="text-example" type="text" label="Text Input" placeholder="Basic text input" class="form-input" /&gt;
&lt;x-input name="number-example" type="number" label="Number Input" class="form-input" /&gt;
&lt;x-input name="date-example" type="date" label="Date Input" class="form-input" /&gt;
&lt;x-input-password name="password" label="Password" placeholder="Password...." required /&gt;
&lt;x-input name="email-example" type="email" label="Email Input" class="form-input" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Input with Icons Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Input with Icons</h2>
        </x-slot>

        <p class="mb-4">You can add icons to your input fields in either left or right positions:</p>

        <!-- Right Icon (Default) -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Right Icon (Default)</h3>
            </x-slot>

            <div class="mb-6">
                <x-input name="search" label="Search" icon placeholder="Search..." class="form-input">
                    <x-slot name="iconContent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </x-slot>
                </x-input>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input name="search" label="Search" icon placeholder="Search..." class="form-input"&gt;
    &lt;x-slot name="iconContent"&gt;
        &lt;i class="ti ti-search"&gt;&lt;/i&gt;
    &lt;/x-slot&gt;
&lt;/x-input&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Left Icon -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Left Icon</h3>
            </x-slot>

            <div class="mb-6">
                <x-input name="user" label="Username" icon="user" iconPosition="left" placeholder="Enter username" class="form-input">
                    <x-slot name="iconContent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-at">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
                        </svg>
                    </x-slot>
                </x-input>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-input name="user" label="Username" icon="user" iconPosition="left" placeholder="Enter username" class="form-input"&gt;
    &lt;x-slot name="iconContent"&gt;
        &lt;i class="ti ti-user"&gt;&lt;/i&gt;
    &lt;/x-slot&gt;
&lt;/x-input&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Validation & Errors -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Validation & Error States</h2>
        </x-slot>

        <p class="mb-4">The input component automatically displays validation errors:</p>

        <div class="mb-6">
            <x-input name="example_field_with_error" label="Field with Error" class="form-input" />
            <span class="form-error">This field is required.</span>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;!-- In a real scenario, errors would be populated from validation --&gt;
&lt;x-input name="example_field" label="Field with Error" class="form-input" /&gt;
@error('example_field')
&lt;span class="form-error"&gt;{{ $message }}&lt;/span&gt;
@enderror
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">Input components can be used in various contexts:</p>

        <!-- Login Form -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Login Form</h3>
            </x-slot>

            <div class="mb-6">
                <form class="space-y-4">
                    <x-input name="login_email" type="email" label="Email" required placeholder="Enter your email" class="form-input" icon>
                        <x-slot name="iconContent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                        </x-slot>
                    </x-input>

                    <!-- Password input with Alpine.js toggle functionality -->
                    <div x-data="{ showPassword: false }">
                        <x-input name="login_password" x-bind:type="showPassword ? 'text' : 'password'" label="Password" required placeholder="Enter your password" class="form-input" icon>
                            <x-slot name="iconContent">
                                <div class="cursor-pointer" @click="showPassword = !showPassword">
                                    <!-- Show when password is hidden -->
                                    <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                    <!-- Show when password is visible -->
                                    <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                        <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                        <path d="M3 3l18 18" />
                                    </svg>
                                </div>
                            </x-slot>
                        </x-input>
                    </div>

                    <x-button class="button-primary">Login</x-button>
                </form>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;!-- Password input with Alpine.js toggle functionality --&gt;
&lt;div x-data="{ showPassword: false }"&gt;
    &lt;x-input
        name="login_password"
        x-bind:type="showPassword ? 'text' : 'password'"
        label="Password"
        required
        placeholder="Enter your password"
        class="form-input"
        icon&gt;
        &lt;x-slot name="iconContent"&gt;
            &lt;div class="cursor-pointer" @click="showPassword = !showPassword"&gt;
                &lt;!-- Show when password is hidden --&gt;
                &lt;svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye"&gt;
                    &lt;path stroke="none" d="M0 0h24v24H0z" fill="none"/&gt;
                    &lt;path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /&gt;
                    &lt;path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /&gt;
                &lt;/svg&gt;
                &lt;!-- Show when password is visible --&gt;
                &lt;svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off"&gt;
                    &lt;path stroke="none" d="M0 0h24v24H0z" fill="none"/&gt;
                    &lt;path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /&gt;
                    &lt;path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /&gt;
                    &lt;path d="M3 3l18 18" /&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
        &lt;/x-slot&gt;
    &lt;/x-input&gt;
&lt;/div&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Search Form -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Search Form</h3>
            </x-slot>

            <div class="mb-6">
                <form class="flex items-center">
                    <x-input name="search_query" placeholder="Search..." class="form-input rounded-r-none">
                        <x-slot name="iconContent">
                            <i class="ti ti-search"></i>
                        </x-slot>
                    </x-input>
                    <button type="submit" class="button button-primary h-fit">Search</button>
                </form>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;form class="flex items-center"&gt;
    &lt;x-input name="search_query" placeholder="Search..." class="form-input rounded-r-none"&gt;
        &lt;x-slot name="iconContent"&gt;
            &lt;i class="ti ti-search"&gt;&lt;/i&gt;
        &lt;/x-slot&gt;
    &lt;/x-input&gt;
    &lt;button type="submit" class="button button-primary h-fit"&gt;Search&lt;/button&gt;
&lt;/form&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Input Component Props">
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
                    <td>The name attribute for the input field, also used for error messages.</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>string</td>
                    <td>'text'</td>
                    <td>The HTML input type (text, password, email, number, date, etc.).</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The label text to display above the input.</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Marks the field as required and adds a visual indicator.</td>
                </tr>
                <tr>
                    <td>icon</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Enables icon display with the input.</td>
                </tr>
                <tr>
                    <td>iconPosition</td>
                    <td>string</td>
                    <td>'right'</td>
                    <td>Position of the icon - 'left' or 'right'.</td>
                </tr>
                <tr>
                    <td>data-flatpickr</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Enables Flatpickr date picker integration.</td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>string</td>
                    <td>null</td>
                    <td>Additional CSS classes to apply to the input.</td>
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
            <li>Always provide clear, concise labels for input fields.</li>
            <li>Use appropriate input types for different kinds of data (email, number, password, etc.).</li>
            <li>Include placeholder text when it helps clarify the expected input format.</li>
            <li>Use icons purposefully to enhance understanding, not just for decoration.</li>
            <li>Clearly indicate required fields with the required attribute.</li>
            <li>Display validation errors close to the relevant input field.</li>
            <li>Consider using Flatpickr for date fields to improve the user experience.</li>
            <li>Group related inputs together for better form organization.</li>
            <li>Maintain consistent styling across all form inputs in your application.</li>
        </ul>
    </x-card>
</x-main>
