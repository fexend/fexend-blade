@props([
    'trigger' => 'hover',
    'contentClass' => 'popover-content',
])

<div x-data="{ open: false }" class="popover" {{ $attributes }}>
    @if (isset($triggerSlot))
        <div @if ($trigger === 'hover') x-on:mouseover="open = true"
                x-on:mouseleave="open = false"
            @else
                x-on:click="open = !open" @endif>
            {{ $triggerSlot }}
        </div>
    @endif

    <div x-show="open" x-transition class="{{ $contentClass }}" @if ($trigger === 'hover') x-on:mouseleave="open = false" @endif>
        <div class="p-4">
            @if (isset($slot) && !empty($slot->toHtml()))
                {{ $slot }}
            @else
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    This is a popover content.
                </p>
            @endif
        </div>
    </div>
</div>
