<?php
use function Laravel\Folio\name;
name('pages.500');
?>

<x-blank title="500 Internal Server Error">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="text-center max-w-lg">
            <div class="mb-8 flex justify-center">
                <div class="relative">
                    <div class="text-[8rem] font-black text-slate-100 dark:text-slate-800 leading-none select-none">500</div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-danger/10 dark:bg-danger-dark/10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-danger dark:text-danger-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-3">Internal server error</h1>
            <p class="text-slate-500 dark:text-slate-400 mb-8">
                Something went wrong on our end. Our team has been notified and is working to fix the issue. Please try again in a few minutes.
            </p>
            <div class="mb-8 p-4 rounded-lg bg-danger/5 dark:bg-danger-dark/5 border border-danger/20 dark:border-danger-dark/20">
                <p class="text-sm font-mono text-danger dark:text-danger-dark">Error code: 500 — Internal Server Error</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <button onclick="location.reload()" class="button button-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Try Again
                </button>
                <a href="{{ route('dashboard') }}" class="button button-secondary-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Go to Dashboard
                </a>
            </div>
        </div>
    </div>
</x-blank>
