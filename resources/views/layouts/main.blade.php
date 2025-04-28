<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $isSidebarOpen = $attributes->get('isSidebarOpen', false);
        $title = $attributes->get('title', 'Dashboard');
        $pageDescription = $attributes->get('pageDescription', 'Fexend Dashboard description');
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="author" content="Fexend">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="theme-color" content="#615fff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? '' }} | Fexend Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        if (
            localStorage.getItem("darkMode") === "true" ||
            (!localStorage.getItem("darkMode") &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        }
    </script>

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

    {{-- <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <link rel="alternate icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="mask-icon" href="{{ asset('images/favicon.svg') }}" color="#615fff">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.svg') }}"> --}}

</head>

<body x-data="{
    darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches),
    sidebarOpen: {{ $isSidebarOpen ? 'true' : 'false' }},
    mobileMenuOpen: false,
    isMobile: window.innerWidth < 768,
    toggleDarkMode() {
        this.darkMode = !this.darkMode;
        localStorage.setItem('darkMode', this.darkMode);
        if (this.darkMode) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }
}" x-init="window.addEventListener('resize', () => {
    if (window.innerWidth < 1024) sidebarOpen = false;
    isMobile = window.innerWidth < 768;
    if (!isMobile) mobileMenuOpen = false;
});
setTimeout(() => {
    document.getElementById('loading-screen').style.opacity = '0';
    setTimeout(() => {
        document.getElementById('loading-screen').style.display = 'none';
    }, 300);
}, 500);">

    <x-layouts.loading></x-layouts.loading>

    <main class="main-content">

        <x-layouts.header></x-layouts.header>

        <x-layouts.sidebar :sidebarMenuIcon="$attributes->get('sidebarMenuIcon', true)"></x-layouts.sidebar>

        @if ($attributes->get('sidebarMenuIcon', true))
            <!-- Main content -->
            <div class="main-container" :class="{
                'md:ml-80': sidebarOpen,
                'md:ml-16': !sidebarOpen,
                'ml-0': true
            }">
                {{ $slot }}
            </div>
        @else
            <!-- Main content -->
            <div class="main-container" :class="{
                'md:ml-64': sidebarOpen,
                'md:ml-0': !sidebarOpen,
                'ml-0': true
            }">
                {{ $slot }}
            </div>
        @endif

        <x-layouts.mobile-menu></x-layouts.mobile-menu>
    </main>

    @if (session('success'))
        <x-flash-message type="success" message="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-flash-message type="warning" message="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-flash-message type="error" message="{{ session('errorpa') }}" />
    @endif

    @isset($scripts)
        {{ $scripts }}
    @endisset

    <script>
        function dropZone() {
            return {
                dragover: false,
                files: [],
                handleFileSelect(event) {
                    const files = event.target.files;
                    this.addFiles(files);
                },
                dropFile(event) {
                    this.dragover = false;
                    const files = event.dataTransfer.files;
                    this.addFiles(files);
                },
                addFiles(files) {
                    for (let file of files) {
                        if (!this.files.find((f) => f.name === file.name)) {
                            this.files.push(file);
                        }
                    }
                },
                removeFile(file) {
                    this.files = this.files.filter((f) => f !== file);
                },
            };
        }
    </script>

</body>

</html>
