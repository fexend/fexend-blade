@if ($errors->any())
    <div x-data="{
        show: true,
        type: 'error',
        message: '{{ $errors->first() }}',
        close() { this.show = false },
        init() {
            setTimeout(() => this.close(), 5000);
        }
    }" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" @click.away="close()" class="fixed top-4 right-4 z-50 w-full max-w-md shadow-lg rounded-lg pointer-events-auto bg-danger dark:bg-danger-dark text-white">
        <div class="flex items-center justify-between p-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!-- Error Icon -->
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium" x-text="message"></p>
                </div>
            </div>
            <div class="flex-shrink-0 ml-4">
                <button @click="close()" class="inline-flex text-white hover:text-white/80 focus:outline-none">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endif
