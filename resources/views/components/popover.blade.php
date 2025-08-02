@props([
    'trigger' => 'hover',
    'triggerButton' => '',
    'placement' => 'top',
    'offset' => '[0, 8]',
    'contentClass' => 'bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg',
    'arrowClass' => 'popover-arrow',
    'triggerClass' => '',
])

<div x-data="{
    open: false,
    popperInstance: null,

    init() {
        this.popperInstance = Popper.createPopper(this.$refs.trigger, this.$refs.popover, {
            placement: '{{ $placement }}',
            modifiers: [{
                    name: 'offset',
                    options: {
                        offset: {!! $offset !!},
                    },
                },
                {
                    name: 'arrow',
                    options: {
                        element: this.$refs.arrow,
                    },
                },
                {
                    name: 'preventOverflow',
                    options: {
                        boundary: 'viewport',
                    },
                },
            ],
        });
    },

    show() {
        this.open = true;
        this.$nextTick(() => {
            this.popperInstance.update();
        });
    },

    hide() {
        this.open = false;
    },

    toggle() {
        this.open ? this.hide() : this.show();
    },

    destroy() {
        if (this.popperInstance) {
            this.popperInstance.destroy();
        }
    }
}" class="popover-wrapper" {{ $attributes }}>
    <div x-ref="trigger" class="{{ $triggerClass }}" @if ($trigger == 'hover') x-on:mouseenter="show()"
            x-on:mouseleave="hide()"
        @else
            x-on:click="toggle()" @click.outside="hide()" @endif>
        {{ $triggerButton ?: 'Open Popover' }}
    </div>

    <div x-ref="popover" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="popover-content {{ $contentClass }}" style="display: none;" @if ($trigger === 'hover') x-on:mouseenter="show()"
            x-on:mouseleave="hide()" @endif>
        <div x-ref="arrow" class="popover-arrow {{ $arrowClass }}"></div>
        <div class="popover-body p-4">
            {{ $slot }}
        </div>
    </div>
</div>
