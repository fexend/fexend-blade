@props([
    'position' => 'top-right', // top-right, top-left, top-center, bottom-right, bottom-left, bottom-center
])

<div role="status" aria-live="polite" class="toast-container toast-container-{{ $position }}" x-data="{
    toasts: [],
    addToast(type, title, message, duration = 5000) {
        const id = Date.now();
        this.toasts.push({ id, type, title, message });
        setTimeout(() => this.removeToast(id), duration);
    },
    removeToast(id) {
        this.toasts = this.toasts.filter(t => t.id !== id);
    },
    init() {
        window.addEventListener('show-toast', (e) => {
            this.addToast(
                e.detail.type || 'primary',
                e.detail.title || '',
                e.detail.message || '',
                e.detail.duration || 5000
            );
        });
    }
}">
    <template x-for="toast in toasts" :key="toast.id">
        <div class="toast toast-slide-in-right" :class="'toast-' + toast.type"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-x-8"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform translate-x-8">
            <div class="toast-header">
                <span x-text="toast.title"></span>
                <button class="toast-close" @click="removeToast(toast.id)" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="toast-body" x-text="toast.message"></div>
            <div class="toast-progress toast-progress-animated" style="animation-duration: 5s;"></div>
        </div>
    </template>
</div>
