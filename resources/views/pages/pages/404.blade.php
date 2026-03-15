<?php
use function Laravel\Folio\name;
name('pages.404');
?>

<x-blank title="404 Not Found">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="text-center max-w-lg">
            <div class="mb-8 flex justify-center">
                <div class="relative">
                    <div class="text-[8rem] font-black text-slate-100 dark:text-slate-800 leading-none select-none">404</div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 bg-primary/10 dark:bg-primary-dark/10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-primary dark:text-primary-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-3">Page not found</h1>
            <p class="text-slate-500 dark:text-slate-400 mb-8">
                Sorry, we couldn't find the page you're looking for. It may have been moved, deleted, or perhaps never existed.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="{{ route('dashboard') }}" class="button button-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Go to Dashboard
                </a>
                <button onclick="history.back()" class="button button-secondary-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Go Back
                </button>
            </div>
        </div>
    </div>
</x-blank>
