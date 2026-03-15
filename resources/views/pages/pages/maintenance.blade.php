<?php
use function Laravel\Folio\name;
name('pages.maintenance');
?>

<x-blank title="Maintenance">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="text-center max-w-lg">
            <div class="mb-8 flex justify-center">
                <div class="w-24 h-24 bg-warning/10 dark:bg-warning-dark/10 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-warning dark:text-warning-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
            </div>
            <div class="mb-4 flex justify-center">
                <span class="badge badge-warning-soft">Under Maintenance</span>
            </div>
            <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-3">We'll be back soon</h1>
            <p class="text-slate-500 dark:text-slate-400 mb-8">
                We're currently performing scheduled maintenance to improve your experience. We appreciate your patience and will be back online shortly.
            </p>
            <div class="mb-8 p-4 rounded-lg bg-warning/5 dark:bg-warning-dark/5 border border-warning/20 dark:border-warning-dark/20">
                <div class="flex items-center justify-center gap-2 text-sm text-warning dark:text-warning-dark font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Estimated downtime: 2 hours
                </div>
            </div>
            <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">
                Need help right now? Contact our support team.
            </p>
            <div class="flex justify-center gap-3">
                <a href="#" class="button button-warning-outline button-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Email Support
                </a>
                <a href="#" class="button button-secondary-outline button-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Status Page
                </a>
            </div>
        </div>
    </div>
</x-blank>
