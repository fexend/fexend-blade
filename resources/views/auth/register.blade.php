<x-blank title="Register">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-2xl font-bold text-primary dark:text-primary-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Fexend
                </a>
                <h1 class="mt-4 text-2xl font-semibold text-slate-900 dark:text-slate-100">Create an account</h1>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Start your free trial today</p>
            </div>

            <div class="card">
                <form action="{{ route('register.post') }}" method="POST" class="space-y-5">
                    @csrf

                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group">
                            <label class="label label-required" for="first-name">First name</label>
                            <input id="first-name" type="text" name="first_name" class="input" placeholder="John" autocomplete="given-name" required />
                        </div>
                        <div class="form-group">
                            <label class="label label-required" for="last-name">Last name</label>
                            <input id="last-name" type="text" name="last_name" class="input" placeholder="Doe" autocomplete="family-name" required />
                        </div>
                    </div>

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

                    <div
                        class="form-group"
                        x-data="{
                            show: false,
                            focused: false,
                            value: '',
                            get hasLength()  { return this.value.length >= 8; },
                            get hasUpper()   { return /[A-Z]/.test(this.value); },
                            get hasLower()   { return /[a-z]/.test(this.value); },
                            get hasNumber()  { return /[0-9]/.test(this.value); },
                            get hasSpecial() { return /[^A-Za-z0-9]/.test(this.value); }
                        }"
                    >
                        <label class="label label-required" for="password">Password</label>
                        <div class="input-password">
                            <input
                                id="password"
                                :type="show ? 'text' : 'password'"
                                name="password"
                                class="input"
                                placeholder="Create a strong password"
                                x-model="value"
                                @focus="focused = true"
                                @blur="focused = false"
                                autocomplete="new-password"
                                required
                            />
                            <button type="button" class="input-password-toggle" @click="show = !show" :aria-label="show ? 'Hide password' : 'Show password'">
                                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                                </svg>
                            </button>
                            <div
                                class="input-password-criteria"
                                x-show="focused || value.length > 0"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 -translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-1"
                                x-cloak
                            >
                                <div class="criteria-item" :class="hasLength ? 'criteria-item-met' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path x-show="hasLength" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                        <path x-show="!hasLength" stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 100 18A9 9 0 0012 3z"/>
                                    </svg>
                                    <span>At least 8 characters</span>
                                </div>
                                <div class="criteria-item" :class="hasUpper ? 'criteria-item-met' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path x-show="hasUpper" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                        <path x-show="!hasUpper" stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 100 18A9 9 0 0012 3z"/>
                                    </svg>
                                    <span>One uppercase letter</span>
                                </div>
                                <div class="criteria-item" :class="hasLower ? 'criteria-item-met' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path x-show="hasLower" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                        <path x-show="!hasLower" stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 100 18A9 9 0 0012 3z"/>
                                    </svg>
                                    <span>One lowercase letter</span>
                                </div>
                                <div class="criteria-item" :class="hasNumber ? 'criteria-item-met' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path x-show="hasNumber" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                        <path x-show="!hasNumber" stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 100 18A9 9 0 0012 3z"/>
                                    </svg>
                                    <span>One number</span>
                                </div>
                                <div class="criteria-item" :class="hasSpecial ? 'criteria-item-met' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path x-show="hasSpecial" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                        <path x-show="!hasSpecial" stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 100 18A9 9 0 0012 3z"/>
                                    </svg>
                                    <span>One special character</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start gap-2">
                        <input id="terms" type="checkbox" class="checkbox mt-0.5" required />
                        <label for="terms" class="label cursor-pointer select-none text-sm">
                            I agree to the
                            <a href="#" class="text-primary dark:text-primary-dark hover:underline">Terms of Service</a>
                            and
                            <a href="#" class="text-primary dark:text-primary-dark hover:underline">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="button button-primary w-full">Create account</button>

                </form>
            </div>

            <p class="text-center mt-6 text-sm text-slate-500 dark:text-slate-400">
                Already have an account?
                <a href="{{ route('login') }}" class="text-primary dark:text-primary-dark font-medium hover:underline">Sign in</a>
            </p>

        </div>
    </div>
</x-blank>
