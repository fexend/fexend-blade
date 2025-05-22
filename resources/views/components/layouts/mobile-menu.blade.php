<!-- Mobile Bottom Menu -->
<div x-show="isMobile" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="mobile-menu flex justify-center lg:hidden">
    <button @click="mobileMenuOpen = !mobileMenuOpen" class="button button-primary button-rounded flex items-center space-x-2 px-4 py-2 rounded-lg">
        <!-- Tabler menu icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
            <path stroke="none" d="M0 0h24h24H0z" fill="none" />
            <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
            <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
            <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
            <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
        </svg>
        <span class="text-sm font-medium">Menu</span>
    </button>
</div>

<!-- Mobile Menu Popup -->
<div x-show="isMobile && mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-8" @click.away="mobileMenuOpen = false" class="mobile-menu-popup block lg:hidden">
    <div class="space-y-4 py-2">
        <!-- Settings -->
        <a href="{{ route('settings.index') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
            </svg>
            <span>Settings</span>
        </a>

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M10 12h4v4h-4z" />
            </svg>
            <span>Dashboard</span>
        </a>

        <!-- Master -->
        <a href="{{ route('master.index') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-ease-in-out-control-points">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M17 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0z" />
                <path d="M17 20h-2" />
                <path d="M7 4a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z" />
                <path d="M7 4h2" />
                <path d="M14 4h-2" />
                <path d="M12 20h-2" />
                <path d="M3 20c8 0 10 -16 18 -16" />
            </svg>
            <span>Master</span>
        </a>

        <!-- Element -->
        <a href="{{ route('element.index') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-html">
                <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                <path d="M2 21v-6" />
                <path d="M5 15v6" />
                <path d="M2 18h3" />
                <path d="M20 15v6h2" />
                <path d="M13 21v-6l2 3l2 -3v6" />
                <path d="M7.5 15h3" />
                <path d="M9 15v6" />
            </svg>
            <span>Element</span>
        </a>

        <!-- Component -->
        <a href="{{ route('component.index') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-components">
                <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                <path d="M3 12l3 3l3 -3l-3 -3z" />
                <path d="M15 12l3 3l3 -3l-3 -3z" />
                <path d="M9 6l3 3l3 -3l-3 -3z" />
                <path d="M9 18l3 3l3 -3l-3 -3z" />
            </svg>
            <span>Component</span>
        </a>

        <!-- Pages -->
        <a href="{{ route('pages.index') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-article">
                <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                <path d="M7 8h10" />
                <path d="M7 12h10" />
                <path d="M7 16h10" />
            </svg>
            <span>Pages</span>
        </a>

        <!-- Divider -->
        <div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>

        <!-- Logout -->
        <form action="{{ route('logout') }}" method="POST" class="px-2">
            @csrf
            <button type="submit" class="flex w-full items-center space-x-3 px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div>
