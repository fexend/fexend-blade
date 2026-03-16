<x-blank title="Verify Email">
    <div class="min-h-screen flex items-center justify-center px-4 py-12"
        x-data="{ resent: false }"
    >
        <div class="w-full max-w-md text-center">

            <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-2xl font-bold text-primary dark:text-primary-dark mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                Fexend
            </a>

            <div class="card text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 dark:bg-primary-dark/10 text-primary dark:text-primary-dark mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>

                <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">Verify your email</h1>
                <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
                    We sent a verification link to
                    <span class="font-medium text-slate-700 dark:text-slate-300">{{ Auth::user()->email }}</span>.
                    Click the link in the email to activate your account.
                </p>

                <div class="mt-6">
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">Or enter the 6-digit code from the email:</p>
                    <div
                        class="flex justify-center gap-2"
                        x-data="{
                            code: ['', '', '', '', '', ''],
                            focusNext(idx) {
                                if (idx < 5) {
                                    const next = document.getElementById('otp-' + (idx + 1));
                                    if (next) next.focus();
                                }
                            },
                            focusPrev(idx) {
                                if (idx > 0) {
                                    const prev = document.getElementById('otp-' + (idx - 1));
                                    if (prev) prev.focus();
                                }
                            },
                            onInput(idx, event) {
                                const val = event.target.value.replace(/\D/g, '').slice(-1);
                                this.code[idx] = val;
                                if (val) this.focusNext(idx);
                            },
                            onKeydown(idx, event) {
                                if (event.key === 'Backspace' && !this.code[idx]) this.focusPrev(idx);
                            },
                            onPaste(event) {
                                event.preventDefault();
                                const digits = (event.clipboardData.getData('text') || '').replace(/\D/g, '').slice(0, 6).split('');
                                digits.forEach((d, i) => { this.code[i] = d; });
                                const last = digits.length - 1;
                                const el = document.getElementById('otp-' + (last < 5 ? last : 5));
                                if (el) el.focus();
                            }
                        }"
                    >
                        <template x-for="(digit, idx) in code" :key="idx">
                            <input
                                :id="'otp-' + idx"
                                type="text"
                                inputmode="numeric"
                                maxlength="1"
                                class="input w-11 text-center text-lg font-semibold px-0"
                                :value="digit"
                                @input="onInput(idx, $event)"
                                @keydown="onKeydown(idx, $event)"
                                @paste.once="onPaste($event)"
                                autocomplete="one-time-code"
                            />
                        </template>
                    </div>
                    <button class="button button-primary mt-4 w-full">Verify code</button>
                </div>

                <div class="mt-6 pt-5 border-t border-slate-200 dark:border-slate-700">
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        Didn't receive the email?
                    </p>
                    <button
                        type="button"
                        class="mt-2 text-sm text-primary dark:text-primary-dark hover:underline font-medium"
                        x-show="!resent"
                        @click="resent = true"
                    >Resend verification email</button>
                    <div x-show="resent" x-cloak class="flex items-center justify-center gap-1.5 mt-2 text-sm text-success dark:text-success-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Verification email resent!
                    </div>
                </div>
            </div>

            <p class="mt-6 text-sm text-slate-500 dark:text-slate-400">
                Wrong account?
                <a href="{{ route('login') }}" class="text-primary dark:text-primary-dark font-medium hover:underline">Sign in with a different email</a>
            </p>

        </div>
    </div>
</x-blank>
