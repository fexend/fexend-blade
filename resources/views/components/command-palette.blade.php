@props([
    'id' => 'command-palette',
    'triggerText' => 'Open Command Palette',
    'triggerClass' => 'button button-primary',
    'showShortcut' => true,
    'commands' => [],
])

<div x-data="{
    open: false,
    query: '',
    activeIndex: 0,
    commands: {{ json_encode($commands) }},
}" @keydown.meta.k.window="open = true" @keydown.ctrl.k.window="open = true">

    @if (!isset($trigger))
        <button class="{{ $triggerClass }}" @click="open = true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            {{ $triggerText }}
        </button>
        @if ($showShortcut)
            <span class="command-palette-shortcut">⌘ K</span>
        @endif
    @else
        <div @click="open = true">{{ $trigger }}</div>
    @endif

    <div x-show="open" x-cloak @keydown.escape.window="open = false">
        <div class="command-palette-backdrop" @click="open = false"></div>
        <div class="command-palette" role="dialog" aria-modal="true" aria-label="Command palette">
            <div class="command-palette-input-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" class="command-palette-input-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" class="command-palette-input" placeholder="Search commands..." x-model="query" @keydown.arrow-down="activeIndex++" @keydown.arrow-up="activeIndex = Math.max(0, activeIndex - 1)" autofocus>
                <span class="command-palette-shortcut">ESC</span>
            </div>

            <div class="command-palette-results" role="listbox">
                @if (!empty($commands))
                    <template x-for="group in commands" :key="group.group">
                        <div class="command-palette-group" role="group" :aria-label="group.group">
                            <div class="command-palette-group-title" x-text="group.group"></div>
                            <template x-for="(item, i) in group.items.filter(it => !query || it.label.toLowerCase().includes(query.toLowerCase()))" :key="item.label">
                                <button class="command-palette-item" :class="{active: activeIndex === i}" @click="open = false" role="option">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="command-palette-item-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" :d="item.icon"/></svg>
                                    <span class="command-palette-item-label" x-text="item.label"></span>
                                    <span class="command-palette-item-shortcut" x-text="item.shortcut"></span>
                                </button>
                            </template>
                        </div>
                    </template>
                @else
                    {{ $slot }}
                @endif

                <div class="command-palette-empty" x-show="query && !commands.flatMap(g => g.items ?? []).some(i => i.label && i.label.toLowerCase().includes(query.toLowerCase()))">
                    No results found for "<span x-text="query"></span>"
                </div>
            </div>

            <div class="command-palette-footer">
                <div class="flex gap-3">
                    <span><span class="command-palette-shortcut">↑↓</span> Navigate</span>
                    <span><span class="command-palette-shortcut">↵</span> Select</span>
                    <span><span class="command-palette-shortcut">ESC</span> Close</span>
                </div>
            </div>
        </div>
    </div>
</div>
