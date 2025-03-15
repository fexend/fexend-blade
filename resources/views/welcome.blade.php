<x-main title="Custom Dashboard">

    <x-breadcrumb>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard" active></x-breadcrumb-item>
    </x-breadcrumb>

    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <!-- filepath: /home/zulfi/development/fexend-blade/resources/views/components/collapse.blade.php -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Collapse</h2>
                </div>
                <div class="card-body">
                    <div class="w-full max-w-md">
                        <x-collapse title="Collapse Item 1">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>

                        <x-collapse title="Collapse Item 2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="card-title">Collapse Bordered</h2>
                </div>
                <div class="card-body">
                    <div class="w-full max-w-md">
                        <x-collapse title="Collapse Item 1" bordered>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>

                        <x-collapse title="Collapse Item 2" bordered>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="card-title">Collapse Full Bordered</h2>
                </div>
                <div class="card-body">
                    <div class="w-full max-w-md">
                        <x-collapse title="Collapse Item 1" fullBordered>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>

                        <x-collapse title="Collapse Item 2" fullBordered>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="card-title">Collapse Separated</h2>
                </div>
                <div class="card-body">
                    <div class="w-full max-w-md">
                        <x-collapse title="Collapse Item 1" fullBordered separated>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>

                        <x-collapse title="Collapse Item 2" fullBordered separated>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aliquam at porttitor sem. Aliquam erat volutpat. Donec
                                vehicula, arcu sit amet accumsan auctor, mi neque rutrum
                                erat, eu congue orci lorem eget lorem. Cras varius, eros
                            </p>
                        </x-collapse>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Simple Divider</h2>
                    </div>
                    <div class="card-body">
                        <p>Text above the divider</p>
                        <x-divider />
                        <p>Text below the divider</p>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="card-title">Center Text Divider</h2>
                    </div>
                    <div class="card-body">
                        <p>Text above the divider</p>
                        <x-divider text="Section Divider" position="center" />
                        <p>Text below the divider</p>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="card-title">Gradient Divider</h2>
                    </div>
                    <div class="card-body">
                        <p>Text above the divider</p>
                        <x-divider text="Gradient Divider" style="gradient" />
                        <p>Text below the divider</p>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="card-title">Left Text Divider</h2>
                    </div>
                    <div class="card-body">
                        <p>Text above the divider</p>
                        <x-divider text="Left Aligned" position="left" />
                        <p>Text below the divider</p>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="card-title">Right Text Divider</h2>
                    </div>
                    <div class="card-body">
                        <p>Text above the divider</p>
                        <x-divider text="Right Aligned" position="right" />
                        <p>Text below the divider</p>
                    </div>
                </div>

                <x-drawer id="left-drawer" position="left" width="max-w-md" backdrop-blur>
                    <x-slot:header>
                        My Drawer Header
                    </x-slot:header>

                    <p>Drawer content goes here</p>
                    <p>More content...</p>

                    <x-slot:footer>
                        <button class="button button-primary">Save</button>
                        <button @click="$dispatch('close-drawer', { id: 'left-drawer' })" class="button">Cancel</button>
                    </x-slot:footer>
                </x-drawer>

                <button @click="$dispatch('open-drawer', { id: 'left-drawer' })" class="button button-primary">
                    Open Left Drawer
                </button>

                <x-dropdown-menu>
                    <x-dropdown-item href="#">View on Storefront</x-dropdown-item>
                    <x-dropdown-item href="#">View Warehouse Info</x-dropdown-item>
                    <x-dropdown-item href="#">Duplicate Product</x-dropdown-item>
                    <x-dropdown-item href="#">Unpublish Product</x-dropdown-item>
                    <x-dropdown-item href="#" method="DELETE">
                        <div class="flex items-center text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash mr-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                            Delete
                        </div>
                    </x-dropdown-item>
                </x-dropdown-menu>

                <x-dropdown-menu buttonClass="button button-primary-outline" :iconOnly="true">
                    <x-dropdown-item href="#">View on Storefront</x-dropdown-item>
                    <x-dropdown-item href="#">View Warehouse Info</x-dropdown-item>
                </x-dropdown-menu>
            </div>
        </div>

    </div>
</x-main>
