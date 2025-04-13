<!-- Sidebar -->
<aside>

    {{-- @dd($sidebarContent); --}}

    @if ($attributes->get('sidebarMenuIcon', true))
        <!-- Icon Sidebar - Hidden on mobile, visible on tablet and up -->
        <div class="sidebar-icon z-20">
            <div>
                <div class="inline-flex h-16 w-16 items-center justify-center">
                    <a href="/src/settings/index.html" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false" class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-primary dark:hover:bg-primary-dark dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                            <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                        <span x-show="tooltip" x-transition class="absolute left-full ml-2 top-1/2 transform -translate-y-1/2 w-max bg-slate-800 text-white rounded py-1 px-2 whitespace-nowrap z-[100] font-normal">Settings</span>
                    </a>
                </div>

                <div class="border-t border-gray-100 dark:border-gray-700">
                    <div class="px-2">
                        <ul class="space-y-1 border-t border-gray-100 dark:border-gray-700 pt-4">
                            <li>
                                <a href="{{ route('dashboard') }}" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false" class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-primary dark:hover:bg-primary-dark dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                    <!-- Dashboard -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M10 12h4v4h-4z" />
                                    </svg>
                                    <span x-show="tooltip" x-transition class="absolute left-full ml-2 top-1/2 transform -translate-y-1/2 w-max bg-slate-800 text-white rounded py-1 px-2 whitespace-nowrap z-[100] font-normal">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="/src/elements/index.html" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false" class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-primary dark:hover:bg-primary-dark dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                    <!-- Element -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-html">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
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
                                    <span x-show="tooltip" x-transition class="absolute left-full ml-2 top-1/2 transform -translate-y-1/2 w-max bg-slate-800 text-white rounded py-1 px-2 whitespace-nowrap z-[100] font-normal">Element</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('component.index') }}" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false" class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-primary dark:hover:bg-primary-dark dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                    <!-- Component Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-components">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12l3 3l3 -3l-3 -3z" />
                                        <path d="M15 12l3 3l3 -3l-3 -3z" />
                                        <path d="M9 6l3 3l3 -3l-3 -3z" />
                                        <path d="M9 18l3 3l3 -3l-3 -3z" />
                                    </svg>
                                    <span x-show="tooltip" x-transition class="absolute left-full ml-2 top-1/2 transform -translate-y-1/2 w-max bg-slate-800 text-white rounded py-1 px-2 whitespace-nowrap z-[100] font-normal">Component</span>
                                </a>
                            </li>

                            <li>
                                <a href="/src/pages/index.html" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false" class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-primary dark:hover:bg-primary-dark dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                    <!-- Pages Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-article">
                                        <path stroke="none" d="M0 0h24h24H0z" fill="none" />
                                        <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M7 8h10" />
                                        <path d="M7 12h10" />
                                        <path d="M7 16h10" />
                                    </svg>
                                    <span x-show="tooltip" x-transition class="absolute left-full ml-2 top-1/2 transform -translate-y-1/2 w-max bg-slate-800 text-white rounded py-1 px-2 whitespace-nowrap z-[100] font-normal">Pages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sticky inset-x-0 bottom-0 border-t border-gray-100 dark:border-gray-700 bg-foreground dark:bg-background-dark p-2">
                <!-- Logout -->
                <div class="relative" x-data="{ tooltip: false }">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="group relative flex w-full justify-center rounded-sm px-2 py-1.5 text-sm text-gray-500 hover:bg-primary dark:hover:bg-primary-dark dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300" @mouseover="tooltip = true" @mouseleave="tooltip = false">
                            <!-- Logout Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                        <span x-show="tooltip" x-transition class="absolute left-full ml-2 top-1/2 transform -translate-y-1/2 w-max bg-slate-800 text-white rounded py-1 px-2 whitespace-nowrap z-[100] font-normal">
                            Logout
                        </span>
                    </form>
                </div>
            </div>
        </div>
        <!-- Icon Sidebar - Hidden on mobile, visible on tablet and up -->
    @endif

    <!-- Expanded Sidebar - Mobile overlay, normal sidebar on larger screens -->
    <div class="relative z-10">
        <div x-cloak x-show="sidebarOpen" x-transition:enter="transform transition duration-300 ease-in-out" x-transition:enter-start="translate-x-[-100%]" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition duration-300 ease-in-out" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-[-100%]" class="sidebar-layout overflow-y-auto max-h-screen">
            <div class="px-4 py-6">
                <ul class="space-y-1" x-data="{ selected: null }">
                    @foreach ($sidebarContent['menus'] as $item)
                        @if (array_key_exists('sub_menus', $item))
                            <li x-data="{ open: {{ $item['route_active'] ? 'true' : 'false' }} }">
                                <button @click="open = !open" class="sidebar-dropdown-button">
                                    <span class="text-sm font-medium">{{ $item['title'] }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="sidebar-dropdown-icon" :class="{ 'open': open }" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <ul x-show="open" x-collapse class="sidebar-dropdown">
                                    @foreach ($item['sub_menus'] as $subItem)
                                        <li>
                                            <a href="{{ route($subItem['route']) }}" class="sidebar-nested-link {{ $subItem['route_active'] ? 'sidebar-nested-link-active' : '' }}">{{ $subItem['title'] }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            @else
                            <li>
                                <a href="{{ route($item['route']) }}" class="sidebar-link {{ $item['route_active'] ? 'sidebar-link-active' : '' }}">{{ $item['title'] }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Backdrop for mobile -->
        <div x-show="sidebarOpen" x-transition:enter="transition-all ease-linear duration-300" x-transition:enter-start="opacity-0 backdrop-blur-none" x-transition:enter-end="opacity-100 backdrop-blur-sm" x-transition:leave="transition-all ease-linear duration-300" x-transition:leave-start="opacity-100 backdrop-blur-sm" x-transition:leave-end="opacity-0 backdrop-blur-none" class="sidebar-backdrop" @click="sidebarOpen = false"></div>
    </div>
    <!-- Expanded Sidebar - Mobile overlay, normal sidebar on larger screens -->
</aside>
<!-- Sidebar -->
