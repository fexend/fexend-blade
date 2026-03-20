<x-blank title="Resend Verification Email">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">

            <div class="flex justify-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-32 h-32 md:w-48 md:h-48 text-primary dark:text-primary-dark">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" />
                    <path d="M15 9h.01" />
                </svg>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Resend Verification Email</h2>
                    <p class="text-sm text-slate-400 dark:text-slate-500 font-normal mt-1">
                        Resend the verification email to your registered email address.
                    </p>
                </div>
                <form action="{{ route('resend.verification.email.post') }}" method="POST" class="card-body space-y-4">
                    @csrf
                    <div class="form-group">
                        <label class="label label-required" for="email">Email</label>
                        <input id="email" type="email" name="email" class="input" placeholder="Email Address...." required />
                    </div>
                </form>
                <div class="card-footer space-y-3">
                    <div class="form-group">
                        <button type="submit" class="button button-primary w-full">Resend Email</button>
                    </div>
                    <div class="text-center text-sm">
                        <a href="{{ route('register') }}" class="text-primary dark:text-primary-dark hover:underline">Sign Up</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-blank>
