<div class="card">
    <div class="card-header">
        <h2 class="card-title">Dropdown</h2>
    </div>
    <div class="card-body">
        <div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative">
            <button class="button button-primary button-group" @click="dropdownOpen = !dropdownOpen">
                Actions
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-caret-down transition-transform duration-200" x-bind:class="{ 'rotate-180': dropdownOpen }">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 10l6 6l6 -6h-12" />
                </svg>
            </button>

            <div x-show="dropdownOpen" x-transition class="dropdown" role="menu">
                <div class="drop-shadow-2xl">
                    <a href="#" class="dropdown-item" role="menuitem">
                        View on Storefront
                    </a>

                    <a href="#" class="dropdown-item" role="menuitem">
                        View Warehouse Info
                    </a>

                    <a href="#" class="dropdown-item" role="menuitem">
                        Duplicate Product
                    </a>

                    <a href="#" class="dropdown-item" role="menuitem">
                        Unpublish Product
                    </a>

                    <form method="POST" action="#" class="dropdown-item">
                        <button type="submit" class="button button-group button-danger-outline" role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>

                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <h2 class="card-title">Dropdown</h2>
    </div>
    <div class="card-body">
        <div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative">
            <button class="button button-primary-outline" @click="dropdownOpen = !dropdownOpen">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-caret-down transition-transform duration-200" x-bind:class="{ 'rotate-180': dropdownOpen }">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 10l6 6l6 -6h-12" />
                </svg>
            </button>

            <div x-show="dropdownOpen" x-transition class="dropdown" role="menu">
                <div class="drop-shadow-2xl">
                    <a href="#" class="dropdown-item" role="menuitem">
                        View on Storefront
                    </a>

                    <a href="#" class="dropdown-item" role="menuitem">
                        View Warehouse Info
                    </a>

                    <a href="#" class="dropdown-item" role="menuitem">
                        Duplicate Product
                    </a>

                    <a href="#" class="dropdown-item" role="menuitem">
                        Unpublish Product
                    </a>

                    <form method="POST" action="#" class="dropdown-item">
                        <button type="submit" class="button button-group button-danger-outline" role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>

                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
