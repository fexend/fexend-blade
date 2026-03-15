@props([
    'filters' => [],
    'label' => null,
    'searchPlaceholder' => 'Search...',
    'showSearch' => true,
    'showCount' => true,
    'showClear' => true,
])

<div x-data="{
    search: '',
    filters: {{ json_encode($filters) }},
    activeFilters: [],
    toggleFilter(f) {
        if (this.activeFilters.includes(f)) {
            this.activeFilters = this.activeFilters.filter(a => a !== f);
        } else {
            this.activeFilters.push(f);
        }
    },
    clearAll() { this.activeFilters = []; this.search = ''; }
}" {{ $attributes }}>
    <div class="data-filter">
        @if ($showSearch)
            <div class="data-filter-search">
                <svg xmlns="http://www.w3.org/2000/svg" class="data-filter-search-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" class="data-filter-search-input" placeholder="{{ $searchPlaceholder }}" x-model="search">
            </div>
            <div class="data-filter-divider"></div>
        @endif

        @if ($label)
            <span class="data-filter-label">{{ $label }}</span>
        @endif

        @if (!empty($filters))
            <div class="data-filter-group flex-wrap">
                <template x-for="f in filters" :key="f">
                    <button class="data-filter-chip" :class="{active: activeFilters.includes(f)}" @click="toggleFilter(f)" :aria-pressed="activeFilters.includes(f)" x-text="f"></button>
                </template>
            </div>
        @else
            {{ $slot }}
        @endif

        <div class="data-filter-actions">
            @if ($showCount)
                <span class="data-filter-count" x-text="activeFilters.length + ' active'"></span>
            @endif
            @if ($showClear)
                <button class="data-filter-clear" @click="clearAll()" x-show="activeFilters.length > 0 || search">Clear all</button>
            @endif
        </div>
    </div>
</div>
