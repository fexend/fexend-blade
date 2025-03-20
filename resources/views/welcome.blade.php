<x-main title="Custom Dashboard">

    <x-breadcrumb>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-menu-list title="Simple Menu" :items="[['label' => 'General', 'active' => true, 'url' => '#'], ['label' => 'Teams', 'url' => '#'], ['label' => 'Billing', 'url' => '#'], ['label' => 'Invoices', 'url' => '#'], ['label' => 'Account', 'url' => '#']]" />

    @php
        $items = [
            [
                'label' => 'General',
                'active' => true,
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>',
            ],
            [
                'label' => 'Teams',
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>',
            ],
        ];
    @endphp
    <x-menu-list title="Menu with Icons" :showIcons="true" :items="$items" />

    @php
        $items = [
            [
                'label' => 'General',
                'active' => true,
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>',
            ],
            [
                'label' => 'Billing',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>',
                'dropdown' => [['label' => 'Submenu 1', 'url' => '#'], ['label' => 'Submenu 2', 'url' => '#'], ['label' => 'Submenu 3', 'url' => '#']],
            ],
        ];
    @endphp

    <x-menu-list title="Menu with Dropdowns" :showIcons="true" :items="$items" />

    @php
        $items = [
            [
                'label' => 'Dashboard',
                'active' => true,
                'url' => '#',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 4h6v8h-6z" /><path d="M14 4h6v8h-6z" /><path d="M4 16h6v4h-6z" /><path d="M14 16h6v4h-6z" /></svg>',
            ],
            [
                'label' => 'Products',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 10l5 -6l5 6" /><path d="M21 10l-2 8a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2l-2 -8z" /><path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /></svg>',
                'dropdown' => [['label' => 'View All Products', 'url' => '#'], ['label' => 'Add Product', 'url' => '#'], ['label' => 'Categories', 'url' => '#'], ['label' => 'Inventory', 'url' => '#'], ['label' => 'Delete Product', 'url' => '#', 'method' => 'DELETE']],
            ],
            [
                'label' => 'Orders',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 12h6" /><path d="M9 16h6" /></svg>',
                'dropdown' => [['label' => 'Pending Orders', 'url' => '#'], ['label' => 'Completed Orders', 'url' => '#'], ['label' => 'Cancelled Orders', 'url' => '#']],
            ],
        ];
    @endphp
    <x-menu-list title="Menu with Custom Dropdowns" :showIcons="true" :items="$items" />

    <!-- Modal Examples Section -->
    <div class="card mt-6">
        <div class="card-header">
            <h2 class="card-title">Modal Examples</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                <!-- Basic Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Basic Modal</h3>
                    <x-modal id="basic-modal" title="Basic Modal Example" triggerButtonText="Open Basic Modal">
                        <p>This is a basic modal with default settings. It has a title, content area, and a footer with action buttons.</p>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Cancel</button>
                            <button class="button button-primary">Save Changes</button>
                        </x-slot>
                    </x-modal>
                </div>

                <!-- Success Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Success Modal</h3>
                    <x-modal id="success-modal" type="success" triggerButtonClass="button button-success" triggerButtonText="Show Success Modal">
                        <div class="text-center">
                            <h3 class="text-lg font-bold">Success!</h3>
                            <p class="mt-2">Your data has been saved successfully.</p>
                            <button @click="open = false" class="button button-success mt-6">Close</button>
                        </div>
                    </x-modal>
                </div>

                <!-- Error Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Error Modal</h3>
                    <x-modal id="error-modal" type="danger" triggerButtonClass="button button-danger" triggerButtonText="Show Error Modal">
                        <div class="text-center">
                            <h3 class="text-lg font-bold">Error!</h3>
                            <p class="mt-2">There was a problem processing your request.</p>
                            <button @click="open = false" class="button button-danger mt-6">Close</button>
                        </div>
                    </x-modal>
                </div>

                <!-- Positioned Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Custom Position</h3>
                    <x-modal id="position-modal" title="Top-Right Modal" position="top-right" triggerButtonText="Top-Right Modal">
                        <p>This modal appears in the top-right corner of the screen.</p>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Close</button>
                        </x-slot>
                    </x-modal>
                </div>

                <!-- Large Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Large Modal</h3>
                    <x-modal id="large-modal" title="Large Modal Example" size="lg" triggerButtonText="Open Large Modal">
                        <div class="space-y-4">
                            <p>This is a large modal with more content space.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pulvinar risus non risus hendrerit venenatis. Pellentesque sit amet hendrerit risus, sed porttitor quam.</p>
                            <p>Magna exercitation reprehenderit magna aute tempor cupidatat consequat elit dolor adipisicing. Mollit dolor eiusmod sunt ex incididunt cillum quis. Velit duis sit officia eiusmod Lorem aliqua enim laboris do dolor eiusmod.</p>
                        </div>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Close</button>
                            <button class="button button-primary">Continue</button>
                        </x-slot>
                    </x-modal>
                </div>

                <!-- Custom Trigger Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Custom Trigger</h3>
                    <x-modal id="custom-trigger-modal" title="Custom Trigger Modal">
                        <x-slot name="trigger">
                            <div class="flex items-center justify-center p-4 bg-primary-50 dark:bg-primary-900/20 rounded-lg cursor-pointer hover:bg-primary-100 dark:hover:bg-primary-900/30 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <path d="M15 3v18"></path>
                                    <rect x="1" y="7" width="18" height="14" rx="2"></rect>
                                </svg>
                                <span>Click anywhere on this custom element</span>
                            </div>
                        </x-slot>

                        <p>This modal uses a custom trigger element instead of the default button.</p>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Close</button>
                        </x-slot>
                    </x-modal>
                </div>

                <!-- Form Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Form in Modal</h3>
                    <x-modal id="form-modal" title="User Registration" size="md" triggerButtonText="Open Form Modal">
                        <form class="space-y-4">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" class="form-input" placeholder="John Doe">
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-input" placeholder="john@example.com">
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-input">
                            </div>
                        </form>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Cancel</button>
                            <button class="button button-primary">Register</button>
                        </x-slot>
                    </x-modal>
                </div>

                <!-- Confirmation Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Confirmation Modal</h3>
                    <x-modal id="confirmation-modal" title="Confirm Deletion" triggerButtonClass="button button-danger" triggerButtonText="Delete Item">
                        <div class="text-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto text-danger">
                                <path d="M12 9v4"></path>
                                <path d="M12 16h.01"></path>
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            </svg>
                            <p class="mt-4 text-lg">Are you sure you want to delete this item?</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">This action cannot be undone.</p>
                        </div>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Cancel</button>
                            <button class="button button-danger">Delete</button>
                        </x-slot>
                    </x-modal>
                </div>

                <!-- Blur Backdrop Modal -->
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3">Blur Backdrop</h3>
                    <x-modal id="blur-modal" title="Modal with Blur Effect" :blur="true" triggerButtonText="Modal with Blur">
                        <p>This modal has a blurred backdrop effect that helps create visual hierarchy.</p>

                        <x-slot name="footer">
                            <button @click="open = false" class="button button-secondary">Close</button>
                        </x-slot>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-main>
