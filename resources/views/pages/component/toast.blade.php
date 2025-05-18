<?php
use function Laravel\Folio\name;
name('component.toast');
?>

<x-main>
    <x-slot name="title">Toast Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Toast" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Toast Component</h2>
        </x-slot>
        <p>The toast component provides brief, non-blocking notifications to users about system events, actions, or updates. Toasts are useful for conveying information without disrupting the user's workflow.</p>
    </x-card>

    <!-- Basic Example Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Basic Example</h2>
        </x-slot>

        <div class="mb-6 space-x-4">
            <x-button class="button-primary" x-data x-on:click="$dispatch('show-toast', {message: 'This is a success toast message', type: 'success'})">
                Show Success Toast
            </x-button>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-primary" x-data x-on:click="$dispatch('show-toast', {message: 'This is a success toast message', type: 'success'})"&gt;
    Show Success Toast
&lt;/x-button&gt;

&lt;!-- Toast component will be triggered by the event --&gt;
&lt;x-toast message="" type="success" :alpine-open="false" /&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Toast Types Card -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Toast Types</h2>
        </x-slot>

        <p class="mb-4">The toast component supports different types to convey various levels of importance:</p>

        <div class="mb-6 space-x-2 flex flex-wrap gap-2">
            <x-button class="button-success" x-data x-on:click="$dispatch('show-toast', {message: 'Operation completed successfully!', type: 'success'})">
                Success Toast
            </x-button>
            <x-button class="button-warning" x-data x-on:click="$dispatch('show-toast', {message: 'Please proceed with caution', type: 'warning'})">
                Warning Toast
            </x-button>
            <x-button class="button-danger" x-data x-on:click="$dispatch('show-toast', {message: 'An error occurred during the process', type: 'error'})">
                Error Toast
            </x-button>
            <x-button class="button-info" x-data x-on:click="$dispatch('show-toast', {message: 'Here is some helpful information', type: 'info'})">
                Info Toast
            </x-button>
        </div>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-success" x-data x-on:click="$dispatch('show-toast', {message: 'Operation completed successfully!', type: 'success'})"&gt;
    Success Toast
&lt;/x-button&gt;

&lt;x-button class="button-warning" x-data x-on:click="$dispatch('show-toast', {message: 'Please proceed with caution', type: 'warning'})"&gt;
    Warning Toast
&lt;/x-button&gt;

&lt;x-button class="button-danger" x-data x-on:click="$dispatch('show-toast', {message: 'An error occurred during the process', type: 'error'})"&gt;
    Error Toast
&lt;/x-button&gt;

&lt;x-button class="button-info" x-data x-on:click="$dispatch('show-toast', {message: 'Here is some helpful information', type: 'info'})"&gt;
    Info Toast
&lt;/x-button&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Usage Examples -->
    <x-card class="mb-6">
        <x-slot name="header">
            <h2 class="card-title">Common Use Cases</h2>
        </x-slot>

        <p class="mb-4">Toasts can be used in various contexts:</p>

        <!-- Form Submission -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Form Submission</h3>
            </x-slot>

            <div class="mb-6">
                <form x-data @submit.prevent="$dispatch('show-toast', {message: 'Form submitted successfully!', type: 'success'})" class="space-y-4">
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="email@example.com">
                    </div>
                    <div>
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <x-button type="submit" class="button-primary">Submit Form</x-button>
                </form>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;form x-data @submit.prevent="$dispatch('show-toast', {message: 'Form submitted successfully!', type: 'success'})" class="space-y-4"&gt;
    &lt;!-- Form fields --&gt;
    &lt;x-button type="submit" class="button-primary"&gt;Submit Form&lt;/x-button&gt;
&lt;/form&gt;
                </code></pre>
            </div>
        </x-card>

        <!-- Action Confirmation -->
        <x-card class="mb-4">
            <x-slot name="header">
                <h3 class="card-title">Action Confirmation</h3>
            </x-slot>

            <div class="mb-6 space-x-2">
                <x-button class="button-danger flex" x-data @click="confirm('Are you sure you want to delete this item?') && $dispatch('show-toast', {message: 'Item deleted successfully', type: 'success'})">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7l16 0" />
                        <path d="M10 11l0 6" />
                        <path d="M14 11l0 6" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg> Delete Item
                </x-button>
            </div>

            <div class="rounded-md">
                <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-button class="button-danger flex" x-data @click="confirm('Are you sure you want to delete this item?') && $dispatch('show-toast', {message: 'Item deleted successfully', type: 'success'})"&gt;
    &lt;x-icon name="trash" /&gt; Delete Item
&lt;/x-button&gt;
                </code></pre>
            </div>
        </x-card>
    </x-card>

    <!-- Component API Card -->
    <x-card class="mb-4">
        <x-table title="Toast Component Props">
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
                    <td>'success'</td>
                    <td>The toast type: success, warning, error, or info</td>
                </tr>
                <tr>
                    <td>message</td>
                    <td>string</td>
                    <td>null</td>
                    <td>The message to display in the toast</td>
                </tr>
                <tr>
                    <td>alpineOpen</td>
                    <td>boolean</td>
                    <td>false</td>
                    <td>Whether the toast should be open by default</td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Implementation Card -->
    <x-card class="mb-4">
        <x-slot name="header">
            <h2 class="card-title">Global Implementation</h2>
        </x-slot>

        <p class="mb-4">To use toasts globally in your application, include the toast component in your layout file and then dispatch events from anywhere in your application:</p>

        <div class="rounded-md">
            <pre class="max-h-[500px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;!-- In your layout file --&gt;
&lt;x-toast /&gt;

&lt;!-- In your templates or components --&gt;
&lt;button x-data @click="$dispatch('show-toast', {
    message: 'Your message here',
    type: 'success' // or 'warning', 'error', 'info'
})"&gt;Show Toast&lt;/button&gt;
            </code></pre>
        </div>
    </x-card>

    <!-- Best Practices Card -->
    <x-card>
        <x-slot name="header">
            <h2 class="card-title">Best Practices</h2>
        </x-slot>

        <ul class="list-disc pl-6 space-y-2">
            <li>Keep toast messages concise and direct</li>
            <li>Use appropriate toast types based on the importance of the message</li>
            <li>Position toasts where they won't obstruct important content or actions</li>
            <li>Set reasonable auto-dismiss timeouts (the default is 5 seconds)</li>
            <li>Provide a way for users to manually dismiss toasts</li>
            <li>Use toasts sparingly to avoid overwhelming users</li>
            <li>Consider accessibility implications, ensuring all users can perceive toast notifications</li>
        </ul>
    </x-card>

    <!-- For demo purposes, include the toast component at the bottom of the page -->
    <x-toast message="" type="success" :alpine-open="false" />

    <!-- Debugging Section -->
    <x-card class="mt-6">
        <x-slot name="header">
            <h2 class="card-title">Debug Toast</h2>
        </x-slot>

        <script>
            function showToastDebug() {
                const event = new CustomEvent('show-toast', {
                    detail: {
                        message: 'This is a debug toast message',
                        type: 'success'
                    }
                });
                window.dispatchEvent(event);
                console.log('Debug toast event dispatched', event);
            }
        </script>

        <div class="p-4">
            <x-button class="button-primary" onclick="showToastDebug()">
                Show Debug Toast (JS)
            </x-button>

            <x-button class="button-success ml-2" x-data x-on:click="window.dispatchEvent(new CustomEvent('show-toast', {detail: {message: 'Direct Alpine dispatch', type: 'info'}}))">
                Show Debug Toast (Alpine)
            </x-button>
        </div>
    </x-card>
</x-main>
