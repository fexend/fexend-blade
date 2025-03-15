@props([
    'position' => 'left', // left, right, bottom
    'width' => 'max-w-xl',
    'height' => 'auto',
    'backdrop' => true,
    'backdropBlur' => false,
    'id' => 'drawer-' . uniqid(),
    'header' => null,
    'footer' => null,
    'closeButton' => true,
])

<div x-data="{
    open: false,
    position: '{{ $position }}',
    backdrop: {{ $backdrop ? 'true' : 'false' }},
    backdropBlur: {{ $backdropBlur ? 'true' : 'false' }}
}" id="{{ $id }}" @open-drawer.window="if ($event.detail.id === '{{ $id }}') open = true" @close-drawer.window="if ($event.detail.id === '{{ $id }}' || $event.detail.id === 'all') open = false" class="drawer-container">
    @if ($backdrop)
        <div x-show="open" x-transition.opacity :class="backdropBlur ? 'drawer-backdrop drawer-backdrop-blur' : 'drawer-backdrop'" @click="open = false"></div>
    @endif

    <div x-show="open" x-transition:enter="transform transition duration-300 ease-in-out" x-transition:enter-start="{{ $position === 'left' ? 'translate-x-[-100%]' : ($position === 'right' ? 'translate-x-[100%]' : 'translate-y-full') }}" x-transition:enter-end="{{ $position === 'bottom' ? 'translate-y-0' : 'translate-x-0' }}" x-transition:leave="transform transition duration-300 ease-in-out" x-transition:leave-start="{{ $position === 'bottom' ? 'translate-y-0' : 'translate-x-0' }}" x-transition:leave-end="{{ $position === 'left' ? 'translate-x-[-100%]' : ($position === 'right' ? 'translate-x-[100%]' : 'translate-y-full') }}" class="drawer drawer-{{ $position }} {{ $width }} {{ $height === 'auto' ? 'h-auto' : $height }} overflow-y-auto" :class="{ 'drawer-open': open }">
        @if ($header || $closeButton)
            <div class="drawer-header">
                @if ($header)
                    <div>{{ $header }}</div>
                @endif

                @if ($closeButton)
                    <button @click="open = false" class="button button-rounded button-primary drawer-close-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                @endif
            </div>
        @endif

        <div class="drawer-body">
            {{ $slot }}
        </div>

        @if ($footer)
            <div class="drawer-footer">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>
