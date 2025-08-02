@props([
    'placement' => 'top',
    'trigger' => 'hover',
    'delay' => 100,
    'content' => null,
    'class' => '',
])

@php
    $classes = 'absolute z-10 px-3 py-2 text-sm text-white bg-slate-800 dark:bg-slate-700 rounded-lg shadow-lg max-w-xs';
    $classes .= ' ' . $class; // Merge additional classes if provided
@endphp

<div x-data="{
    tooltip: false,
    popperInstance: null,
    init() {
        this.$nextTick(() => {
            if (typeof Popper !== 'undefined') {
                this.setupPopper();
            }
        });
    },
    setupPopper() {
        const trigger = this.$refs.trigger;
        const tooltip = this.$refs.tooltip;

        this.popperInstance = Popper.createPopper(trigger, tooltip, {
            placement: '{{ $placement }}',
            modifiers: [{
                    name: 'offset',
                    options: {
                        offset: [0, 8],
                    },
                },
                {
                    name: 'flip',
                    options: {
                        fallbackPlacements: ['top', 'bottom', 'left', 'right'],
                    },
                },
                {
                    name: 'preventOverflow',
                    options: {
                        padding: 8,
                    },
                },
            ],
        });
    },
    showTooltip() {
        this.tooltip = true;
        this.$nextTick(() => {
            if (this.popperInstance) {
                this.popperInstance.update();
            }
        });
    },
    hideTooltip() {
        this.tooltip = false;
    },
    destroy() {
        if (this.popperInstance) {
            this.popperInstance.destroy();
        }
    }
}" x-on:destroy="destroy()" class="relative inline-block">
    <div x-ref="trigger" @if ($trigger === 'hover') @mouseenter="setTimeout(() => showTooltip(), {{ $delay }})"
            @mouseleave="hideTooltip()"
        @elseif($trigger === 'click')
            @click="tooltip ? hideTooltip() : showTooltip()" @endif class="cursor-help">
        {{ $slot }}
    </div>

    <div x-ref="tooltip" x-show="tooltip" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="{{ $classes }}" style="display: none;" role="tooltip">
        {{ $content ?? $attributes->get('title', 'Tooltip content') }}
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</div>
