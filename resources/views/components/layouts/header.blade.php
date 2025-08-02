<!-- Navbar -->
<header class="navbar-layout">
    <nav>
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <button @click="sidebarOpen = !sidebarOpen" class="navbar-button">
                        <!-- Tabler menu icon -->
                        <svg x-show="!sidebarOpen" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 w-6 h-6 dark:text-gray-200" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="4" y1="12" x2="20" y2="12" />
                            <line x1="4" y1="18" x2="20" y2="18" />
                        </svg>
                        <svg x-show="sidebarOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                    <span class="nav-title"><a href="/src">Fexend Dashboard</a></span>
                </div>

                <div class="flex items-center gap-4">
                    <!-- Notifications with Dropdown -->
                    <div class="relative" x-data="{
                        notificationOpen: false,
                        activeTab: 'unread',
                    }">
                        <button class="navbar-button relative" @click="notificationOpen = !notificationOpen">
                            <!-- Tabler bell icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell w-6 h-6 dark:text-gray-200" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a1 1 0 0 0 .293 .707l1 1a1 1 0 0 1 -.707 1.707h-14a1 1 0 0 1 -.707 -1.707l1 -1a1 1 0 0 0 .293 -.707v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17h6" />
                            </svg>
                            <span class="navbar-notification-badge"></span>
                        </button>
                        <div x-show="notificationOpen" @click.away="notificationOpen = false" x-transition class="fixed md:absolute right-0 px-4 md:mx-0 mt-2 w-full md:w-80">
                            <div class="bg-foreground dark:bg-foreground-dark rounded-lg shadow-lg z-10 border border-gray-200 dark:border-gray-700">
                                <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                                    <div>
                                        <button @click="activeTab = 'unread'" :class="{ 'font-bold': activeTab==='unread' }" class="mr-4">
                                            Unread
                                        </button>
                                        <button @click="activeTab = 'read'" :class="{ 'font-bold': activeTab==='read' }">
                                            Read
                                        </button>
                                    </div>
                                </div>
                                <div class="max-h-64 overflow-y-auto p-4">
                                    <template x-if="activeTab==='unread'">
                                        <div>
                                            <div class="text-sm mb-2">
                                                <button class="hover:underline">
                                                    Mark all as read
                                                </button>
                                            </div>
                                            <ul>
                                                <li class="p-2 text-gray-500">
                                                    No unread notifications.
                                                </li>
                                            </ul>
                                        </div>
                                    </template>
                                    <template x-if="activeTab==='read'">
                                        <div>
                                            <div class="text-sm mb-2">
                                                <button class="mr-2 hover:underline">Clear</button>
                                            </div>
                                            <ul>
                                                <li class="p-2 text-gray-500">
                                                    No read notifications.
                                                </li>
                                            </ul>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark Mode Toggle -->
                    <button @click="toggleDarkMode()" class="navbar-button">
                        <!-- Tabler sun icon for light mode -->
                        <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="4" />
                            <path d="M3 12h1M20 12h1M12 3v1M12 20v1M5.64 5.64l.707 .707M17.657 17.657l.707 .707M5.64 18.36l.707 -.707M17.657 6.343l.707 -.707" />
                        </svg>
                        <!-- Tabler moon icon for dark mode -->
                        <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moon w-6 h-6 dark:text-gray-200">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                        </svg>
                    </button>

                    <!-- Profile Dropdown -->
                    <div x-data="{ profileOpen: false }" class="relative">
                        <button @click="profileOpen = !profileOpen" class="navbar-button">
                            <img src="{{ $userInformation->avatar }}" alt="User avatar" class="w-8 h-8 rounded-full" />
                        </button>
                        <div x-show="profileOpen" @click.away="profileOpen = false" x-transition class="absolute right-0 mt-2 w-40 bg-foreground dark:bg-foreground-dark rounded-lg shadow-lg z-10 border border-gray-200 dark:border-gray-700">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm">Profile</a>
                            <a href="/src/settings/index.html" class="block px-4 py-2 text-sm">Settings</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar -->
