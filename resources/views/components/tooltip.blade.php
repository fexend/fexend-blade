<div class="card">
    <div class="card-header">
        <h2 class="card-title">Tooltip</h2>
    </div>
    <div class="card-body">
        <div x-data="{ tooltip: false }" class="relative inline-block">
            <div @mouseover="tooltip = true" @mouseleave="tooltip = false">
                {{ $slot }}
            </div>
            <div x-show="tooltip" x-transition class="absolute w-full left-1/2 transform -translate-x-1/2 mt-2 whitespace-no-wrap px-2 py-1 bg-slate-400 dark:bg-slate-700 text-white text-xs rounded-md">
                {{ $content ?? 'This is a tooltip text.' }}
            </div>
        </div>
    </div>
</div>
