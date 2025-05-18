@props(['type' => 'success', 'message' => null, 'alpineOpen' => false])

<div role="status" aria-live="polite" x-data="{
    show: {{ $alpineOpen ? 'true' : 'false' }},
    type: '{{ $type }}',
    message: '{{ $message }}',
    close() { this.show = false },
    init() {
        setTimeout(() => {
            if (this.show) this.close();
        }, 5000);

        // Listen for the show-toast event at the window level
        window.addEventListener('show-toast', (e) => {
            this.type = e.detail.type || 'success';
            this.message = e.detail.message;
            this.show = true;

            // Auto-close after 5 seconds
            setTimeout(() => this.close(), 5000);
        });
    }
}" x-show="show" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" @click.away="close()" class="fixed top-4 right-4 z-50 w-full max-w-md shadow-lg rounded-lg pointer-events-auto" :class="{
    'bg-success dark:bg-success-dark text-white': type === 'success',
    'bg-warning dark:bg-warning-dark text-white': type === 'warning',
    'bg-danger dark:bg-danger-dark text-white': type === 'error',
    'bg-info dark:bg-info-dark text-white': type === 'info'
}">
    <div class="flex items-center justify-between p-4">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <!-- Success Icon -->
                <svg x-show="type === 'success'" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>

                <!-- Warning Icon -->
                <svg x-show="type === 'warning'" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>

                <!-- Error Icon -->
                <svg x-show="type === 'error'" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>

                <!-- Info Icon -->
                <svg x-show="type === 'info'" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium" x-text="message"></p>
            </div>
        </div>
        <div class="flex-shrink-0 ml-4">
            <button @click="close()" class="inline-flex text-white hover:text-white/80 focus:outline-none" aria-label="Close toast">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
