@props([
    'align' => 'right',
    'width' => '48',
    'buttonClass' => 'button button-primary button-group',
    'buttonText' => 'Actions',
    'iconOnly' => false,
])

<div x-data="{
    open: false,
    popperInstance: null,
    toggle() {
        this.open = !this.open;
        if (this.open && this.popperInstance) {
            this.popperInstance.update();
        }
    },
    close() {
        this.open = false;
    },
    handleTouch(event) {
        // Prevent default touch behavior that might interfere
        event.stopPropagation();
        this.toggle();
    }
}" x-init="$refs.button && $refs.dropdown && $nextTick(() => {
    this.popperInstance = Popper.createPopper($refs.button, $refs.dropdown, {
        placement: '{{ $align === 'left' ? 'bottom-start' : 'bottom-end' }}',
        strategy: 'fixed',
        modifiers: [{
                name: 'offset',
                options: {
                    offset: [0, 8],
                },
            },
            {
                name: 'preventOverflow',
                options: {
                    boundary: 'clippingParents',
                    padding: 8,
                },
            },
            {
                name: 'flip',
                options: {
                    fallbackPlacements: ['top-start', 'top-end', 'bottom-start', 'bottom-end'],
                },
            },
            {
                name: 'computeStyles',
                options: {
                    adaptive: true,
                    gpuAcceleration: false,
                },
            }
        ],
    });
});" @click.outside="close()" @keydown.escape="close()" @touchstart.outside="close()" class="relative inline-block text-left">
    <!-- Trigger Button -->
    <button x-ref="button" @click="toggle()" type="button" class="{{ $buttonClass }}" :class="{ 'bg-gray-100': open }" aria-expanded="false" aria-haspopup="true">
        @if (!$iconOnly)
            <span>{{ $buttonText }}</span>
        @endif

        <svg class="@if (!$iconOnly) ml-2 @endif h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div x-ref="dropdown" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="dropdown w-{{ $width }}" style="display: none;" role="menu" aria-orientation="vertical" @touchstart.stop>
        <div class="py-1" role="none">
            {{ $slot }}
        </div>
    </div>
</div>
