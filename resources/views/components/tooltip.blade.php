<div x-data="{ tooltip: false }" class="relative inline-block">
    <div @mouseover="tooltip = true" @mouseleave="tooltip = false">
        {{ $slot }}
    </div>
    <div x-show="tooltip" x-transition class="absolute w-full min-w-64 z-50 left-1/2 transform -translate-x-1/2 mt-2 px-3 py-2 bg-slate-800 dark:bg-slate-700 text-white text-sm rounded shadow-lg">
        {{ $content ?? 'This is a tooltip text.' }}
    </div>
</div>
