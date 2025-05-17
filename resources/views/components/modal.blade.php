@props([
    'id' => 'modal-' . uniqid(),
    'title' => null,
    'position' => 'center',
    'size' => 'md',
    'type' => 'default',
    'blur' => false,
    'closeOnClickOutside' => true,
    'showCloseButton' => true,
    'triggerButtonClass' => 'button button-primary',
    'triggerButtonText' => 'Open Modal',
])

@php
    $size = [
        'sm' => 'modal-sm',
        'md' => 'modal-md',
        'lg' => 'modal-lg',
        'xl' => 'modal-xl',
        '2xl' => 'modal-2xl',
        '3xl' => 'modal-3xl',
        '4xl' => 'modal-4xl',
        '5xl' => 'modal-5xl',
        '6xl' => 'modal-6xl',
        '7xl' => 'modal-7xl',
        'full' => 'modal-full',
    ][$size];
@endphp

<div x-data="{
    open: false,
    position: '{{ $position }}',
    init() {
        this.$watch('open', value => {
            if (value) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        });

        document.addEventListener('open-modal', event => {
            if (event.detail === '{{ $id }}') {
                this.open = true;
            }
        });

        document.addEventListener('close-modal', event => {
            if (event.detail === '{{ $id }}') {
                this.open = false;
            }
        });
    }
}" @keydown.window.escape="open = false" id="{{ $id }}-container">

    @if (!isset($trigger))
        {{-- <button @click="open = true" class="{{ $triggerButtonClass }}">
            {{ $triggerButtonText }}
        </button> --}}
    @else
        <div @click="open = true">
            {{ $trigger }}
        </div>
    @endif

    <!-- Modal Backdrop -->
    <div x-show="open" class="modal-backdrop {{ $blur ? 'blur' : '' }}" @if ($closeOnClickOutside) @click="open = false" @endif x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    </div>

    <!-- Modal Container -->
    <div x-show="open" @if ($closeOnClickOutside) @click.self="open = false" @endif :class="{
        'modal-container': true,
        'modal-top-left': position === 'top-left',
        'modal-top-center': position === 'top-center',
        'modal-top-right': position === 'top-right',
        'modal-mid-left': position === 'mid-left',
        'modal-mid-right': position === 'mid-right',
        'modal-bottom-left': position === 'bottom-left',
        'modal-bottom-center': position === 'bottom-center',
        'modal-bottom-right': position === 'bottom-right',
    }" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-4" role="dialog" aria-modal="true" aria-labelledby="{{ $id }}-title">

        <!-- Modal -->
        <div class="modal {{ $type === 'success' ? 'modal-success' : '' }} {{ $type === 'error' || $type === 'danger' ? 'modal-danger' : '' }} {{ $size }}" @click.stop>
            @if ($title || $showCloseButton)
                <!-- Modal Header -->
                <div class="modal-header">
                    @if ($title)
                        <h2 class="text-lg font-semibold" id="{{ $id }}-title">{{ $title }}</h2>
                    @endif

                    @if ($showCloseButton)
                        <button @click="open = false" class="modal-close-button" aria-label="Close modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>
                    @endif
                </div>
            @endif

            <!-- Modal Body -->
            <div class="modal-body">
                @if ($type === 'success')
                    <div class="flex items-center justify-center w-full text-success dark:text-success-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checks w-32 h-32 lg:w-64 lg:h-64">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 12l5 5l10 -10" />
                            <path d="M2 12l5 5m5 -5l5 -5" />
                        </svg>
                    </div>
                @elseif($type === 'error' || $type === 'danger')
                    <div class="flex items-center justify-center w-full text-danger dark:text-danger-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-exclamation-circle w-32 h-32 lg:w-64 lg:h-64">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 9v4" />
                            <path d="M12 16v.01" />
                        </svg>
                    </div>
                @endif

                {{ $slot }}
            </div>

            @isset($footer)
                <!-- Modal Footer -->
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
