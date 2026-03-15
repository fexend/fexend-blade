<?php
use function Laravel\Folio\name;
name('component.stepper');
?>

<x-main>
    <x-slot name="title">Stepper Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Stepper" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Stepper Component</h2></x-slot>
        <p>The stepper guides users through a multi-step process. It supports horizontal navigation with dynamic state and a vertical order-tracking variant.</p>
    </x-card>

    <!-- Horizontal Stepper -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Horizontal Stepper with Navigation</h2></x-slot>
        <div class="mb-6" x-data="{ step: 2 }">
            <div class="stepper mb-8" role="list">
                <div class="stepper-item" :class="step > 1 ? 'completed' : (step === 1 ? 'active' : '')" role="listitem">
                    <div class="flex flex-col items-center">
                        <div class="stepper-circle">
                            <svg x-show="step > 1" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span x-show="step <= 1">1</span>
                        </div>
                        <div class="stepper-label">Account</div>
                        <div class="stepper-description">Basic info</div>
                    </div>
                    <div class="stepper-line" :class="step > 1 ? 'bg-primary dark:bg-primary-dark' : ''"></div>
                </div>
                <div class="stepper-item" :class="step > 2 ? 'completed' : (step === 2 ? 'active' : '')" role="listitem">
                    <div class="flex flex-col items-center">
                        <div class="stepper-circle">
                            <svg x-show="step > 2" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span x-show="step <= 2">2</span>
                        </div>
                        <div class="stepper-label">Profile</div>
                        <div class="stepper-description">Personal details</div>
                    </div>
                    <div class="stepper-line" :class="step > 2 ? 'bg-primary dark:bg-primary-dark' : ''"></div>
                </div>
                <div class="stepper-item" :class="step > 3 ? 'completed' : (step === 3 ? 'active' : '')" role="listitem">
                    <div class="flex flex-col items-center">
                        <div class="stepper-circle">
                            <svg x-show="step > 3" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span x-show="step <= 3">3</span>
                        </div>
                        <div class="stepper-label">Review</div>
                        <div class="stepper-description">Confirm details</div>
                    </div>
                    <div class="stepper-line" :class="step > 3 ? 'bg-primary dark:bg-primary-dark' : ''"></div>
                </div>
                <div class="stepper-item" :class="step >= 4 ? 'completed' : ''" role="listitem">
                    <div class="flex flex-col items-center">
                        <div class="stepper-circle">
                            <svg x-show="step >= 4" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span x-show="step < 4">4</span>
                        </div>
                        <div class="stepper-label">Done</div>
                        <div class="stepper-description">Complete</div>
                    </div>
                </div>
            </div>
            <div class="min-h-[80px] py-4 text-slate-600 dark:text-slate-400">
                <div x-show="step === 1"><p>Step 1 — Set up your account credentials.</p></div>
                <div x-show="step === 2"><p>Step 2 — Fill in your personal profile information.</p></div>
                <div x-show="step === 3"><p>Step 3 — Review your information before submitting.</p></div>
                <div x-show="step >= 4"><p class="text-success dark:text-success-dark font-semibold">All done! Your account has been created successfully.</p></div>
            </div>
            <div class="flex gap-3">
                <button class="button button-dark-outline" @click="step = Math.max(1, step - 1)" :disabled="step <= 1">Previous</button>
                <button class="button button-primary" @click="step = Math.min(4, step + 1)" :disabled="step >= 4">
                    <span x-text="step >= 3 ? 'Finish' : 'Next'"></span>
                </button>
            </div>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;div x-data="{ step: 1 }"&gt;
    &lt;div class="stepper" role="list"&gt;
        &lt;div class="stepper-item" :class="step &gt; 1 ? 'completed' : (step === 1 ? 'active' : '')"&gt;
            &lt;div class="stepper-circle"&gt;1&lt;/div&gt;
            &lt;div class="stepper-label"&gt;Account&lt;/div&gt;
            &lt;div class="stepper-line"&gt;&lt;/div&gt;
        &lt;/div&gt;
        ...
    &lt;/div&gt;
    &lt;button @click="step++"&gt;Next&lt;/button&gt;
&lt;/div&gt;
        </code></pre>
    </x-card>

    <!-- Vertical Stepper -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Vertical Stepper</h2></x-slot>
        <div class="mb-6 max-w-sm">
            <div class="stepper stepper-vertical relative">
                <div class="stepper-item completed">
                    <div class="stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></div>
                    <div class="stepper-content"><div class="stepper-label">Order Placed</div><div class="stepper-description">Jan 10, 2:00 PM</div></div>
                </div>
                <div class="stepper-line bg-primary dark:bg-primary-dark"></div>
                <div class="stepper-item completed">
                    <div class="stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></div>
                    <div class="stepper-content"><div class="stepper-label">Processing</div><div class="stepper-description">Jan 10, 3:30 PM</div></div>
                </div>
                <div class="stepper-line"></div>
                <div class="stepper-item active">
                    <div class="stepper-circle">3</div>
                    <div class="stepper-content"><div class="stepper-label">Shipped</div><div class="stepper-description">In progress</div></div>
                </div>
                <div class="stepper-line"></div>
                <div class="stepper-item">
                    <div class="stepper-circle">4</div>
                    <div class="stepper-content"><div class="stepper-label">Delivered</div><div class="stepper-description">Estimated Jan 13</div></div>
                </div>
            </div>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;div class="stepper stepper-vertical"&gt;
    &lt;div class="stepper-item completed"&gt;
        &lt;div class="stepper-circle"&gt;&lt;!-- checkmark svg --&gt;&lt;/div&gt;
        &lt;div class="stepper-content"&gt;
            &lt;div class="stepper-label"&gt;Order Placed&lt;/div&gt;
            &lt;div class="stepper-description"&gt;Jan 10, 2:00 PM&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="stepper-line bg-primary"&gt;&lt;/div&gt;
    ...
&lt;/div&gt;
        </code></pre>
    </x-card>

    <!-- CSS Classes Reference -->
    <x-card class="mb-4">
        <x-table title="CSS Classes Reference">
            <x-slot name="thead">
                <tr><th>Class</th><th>Applied to</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>stepper</td><td>wrapper</td><td>Horizontal stepper container</td></tr>
                <tr><td>stepper-vertical</td><td>wrapper</td><td>Vertical orientation variant</td></tr>
                <tr><td>stepper-item</td><td>step div</td><td>Individual step wrapper</td></tr>
                <tr><td>stepper-item.active</td><td>step div</td><td>Current step state</td></tr>
                <tr><td>stepper-item.completed</td><td>step div</td><td>Completed step state</td></tr>
                <tr><td>stepper-circle</td><td>circle div</td><td>Step number/check circle</td></tr>
                <tr><td>stepper-label</td><td>label div</td><td>Step title</td></tr>
                <tr><td>stepper-description</td><td>desc div</td><td>Step subtitle</td></tr>
                <tr><td>stepper-line</td><td>connector div</td><td>Horizontal/vertical connector line</td></tr>
                <tr><td>stepper-content</td><td>content div</td><td>Vertical stepper text area</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Use the horizontal stepper for form wizards (registration, checkout).</li>
            <li>Use the vertical stepper for process tracking (order status, onboarding progress).</li>
            <li>Clearly show completed, active, and pending states for orientation.</li>
        </ul>
    </x-card>
</x-main>
