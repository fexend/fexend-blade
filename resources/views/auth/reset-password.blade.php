<x-blank title="Reset Password">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-key w-32 h-32 md:w-48 md:h-48 text-primary dark:text-primary-dark mx-auto">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" />
                <path d="M15 9h.01" />
            </svg>

            <form action="{{ route('reset.password.post') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Reset Password</h2>
                        <p class="font-normal text-slate-300 dark:text-slate-700 text-sm">
                            Enter your new password
                        </p>
                    </div>
                    <div class="card-body">
                        <x-input type="password" name="password" label="Password" placeholder="Password"></x-input>
                        <x-input type="password" name="password_confirmation" label="Password Confirmation" placeholder="Password Confirmation"></x-input>
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <x-button type="submit" class="button-primary">
                                Sign up
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-blank>
