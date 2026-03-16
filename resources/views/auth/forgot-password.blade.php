<x-blank title="Forgot Password">
    <div class="min-h-screen flex items-center justify-center px-4 py-12"
        x-data="{ sent: false }"
    >
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-2xl font-bold text-primary dark:text-primary-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Fexend
                </a>
            </div>

            <div class="card" x-show="!sent">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-primary/10 dark:bg-primary-dark/10 text-primary dark:text-primary-dark mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                        </svg>
                    </div>
                    <h1 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Forgot your password?</h1>
                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Enter your email and we'll send you a reset link.</p>
                </div>

                <form action="{{ route('forgot.password.post') }}" method="POST" class="space-y-5" @submit.prevent="sent = true">
                    @csrf
                    <div class="form-group">
                        <label class="label label-required" for="email">Email address</label>
                        <div class="input-icon-left">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <input id="email" type="email" name="email" class="input" placeholder="you@example.com" autocomplete="email" required />
                        </div>
                    </div>
                    <button type="submit" class="button button-primary w-full">Send reset link</button>
                </form>
            </div>

            <div class="card text-center" x-show="sent" x-cloak>
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-success/10 dark:bg-success-dark/10 text-success dark:text-success-dark mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Check your inbox</h2>
                <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">
                    We've sent a password reset link to your email. It expires in 30 minutes.
                </p>
                <a href="{{ route('login') }}" class="button button-primary mt-6 inline-flex">Back to login</a>
            </div>

            <p class="text-center mt-6 text-sm text-slate-500 dark:text-slate-400">
                Remembered it?
                <a href="{{ route('login') }}" class="text-primary dark:text-primary-dark font-medium hover:underline">Sign in</a>
            </p>

        </div>
    </div>
</x-blank>
