<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $isSidebarOpen = $attributes->get('isSidebarOpen', false);
        $title = $attributes->get('title', 'Dashboard');
        $pageDescription = $attributes->get('pageDescription', 'Fexend Dashboard description');
    @endphp

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? '' }} | {{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <script>
        // Initialize dark mode before Alpine loads
        if (
            localStorage.getItem("darkMode") === "true" ||
            (!localStorage.getItem("darkMode") &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--color-background);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s ease-out;
        }

        .dark #loading-screen {
            background-color: var(--color-background-dark);
        }
    </style>

    @isset($head)
        {{ $head }}
    @endisset

    @isset($styles)
        {{ $styles }}
    @endisset
</head>

<body x-data="{
    darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches),
    toggleDarkMode() {
        this.darkMode = !this.darkMode;
        localStorage.setItem('darkMode', this.darkMode);
        document.documentElement.classList.toggle('dark', this.darkMode);
    }
}" x-init="setTimeout(() => {
    document.getElementById('loading-screen').style.opacity = '0';
    setTimeout(() => {
        document.getElementById('loading-screen').style.display = 'none';
    }, 300);
}, 500);">

    <x-layouts.loading></x-layouts.loading>

    <main>
        {{ $slot }}
    </main>

    <div class="fixed bottom-4 right-4">
        <button @click="toggleDarkMode()" class="navbar-button">
            <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="12" cy="12" r="4" />
                <path d="M3 12h1M20 12h1M12 3v1M12 20v1M5.64 5.64l.707 .707M17.657 17.657l.707 .707M5.64 18.36l.707 -.707M17.657 6.343l.707 -.707" />
            </svg>
            <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moon w-6 h-6 dark:text-gray-200">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
            </svg>
        </button>
    </div>

    @if (session('success'))
        <x-flash-message type="success" message="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-flash-message type="warning" message="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-flash-message type="error" message="{{ session('error') }}" />
    @endif

    @isset($scripts)
        {{ $scripts }}
    @endisset
</body>

</html>
