<x-blank title="Reset Password">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-2xl font-bold text-primary dark:text-primary-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Fexend
                </a>
                <h1 class="mt-4 text-2xl font-semibold text-slate-900 dark:text-slate-100">Set new password</h1>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Must be at least 8 characters and include an uppercase, number, and special character.</p>
            </div>

            <div class="card">
                <form
                    action="{{ route('reset.password.post') }}"
                    method="POST"
                    class="space-y-5"
                    x-data="{
                        showNew: false,
                        showConfirm: false,
                        focused: false,
                        newPass: '',
                        confirmPass: '',
                        get hasLength()  { return this.newPass.length >= 8; },
                        get hasUpper()   { return /[A-Z]/.test(this.newPass); },
                        get hasLower()   { return /[a-z]/.test(this.newPass); },
                        get hasNumber()  { return /[0-9]/.test(this.newPass); },
                        get hasSpecial() { return /[^A-Za-z0-9]/.test(this.newPass); },
                        get match()      { return this.newPass && this.newPass === this.confirmPass; }
                    }"
                >
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label class="label label-required" for="new-password">New password</label>
                        <div class="input-password">
                            <input
                                id="new-password"
                                :type="showNew ? 'text' : 'password'"
                                name="password"
                                class="input"
                                placeholder="New password"
                                x-model="newPass"
                                @focus="focused = true"
                                @blur="focused = false"
                                autocomplete="new-password"
                                required
                            />
                            <button type="button" class="input-password-toggle" @click="showNew = !showNew" :aria-label="showNew ? 'Hide password' : 'Show password'">
                                <svg x-show="!showNew" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg x-show="showNew" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                                </svg>
                            </button>
                            <div
                                class="input-password-criteria"
                                x-show="focused"
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

                    <div class="form-group">
                        <label class="label label-required" for="confirm-password">Confirm new password</label>
                        <div class="input-password">
                            <input
                                id="confirm-password"
                                :type="showConfirm ? 'text' : 'password'"
                                name="password_confirmation"
                                class="input"
                                :class="confirmPass.length > 0 ? (match ? 'input-valid' : 'input-error') : ''"
                                placeholder="Repeat password"
                                x-model="confirmPass"
                                autocomplete="new-password"
                                required
                            />
                            <button type="button" class="input-password-toggle" @click="showConfirm = !showConfirm" :aria-label="showConfirm ? 'Hide password' : 'Show password'">
                                <svg x-show="!showConfirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg x-show="showConfirm" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                                </svg>
                            </button>
                        </div>
                        <span
                            class="form-feedback form-feedback-error"
                            x-show="confirmPass.length > 0 && !match"
                            x-cloak
                        >Passwords do not match.</span>
                        <span
                            class="form-feedback form-feedback-valid"
                            x-show="confirmPass.length > 0 && match"
                            x-cloak
                        >Passwords match!</span>
                    </div>

                    <button type="submit" class="button button-primary w-full" :disabled="!match">Reset password</button>

                </form>
            </div>

            <p class="text-center mt-6 text-sm text-slate-500 dark:text-slate-400">
                <a href="{{ route('login') }}" class="text-primary dark:text-primary-dark font-medium hover:underline">Back to login</a>
            </p>

        </div>
    </div>
</x-blank>
