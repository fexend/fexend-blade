<?php
use function Laravel\Folio\name;
name('pages.login');
?>

<x-blank title="Login">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-key w-32 h-32 md:w-48 md:h-48 text-primary dark:text-primary-dark mx-auto">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" />
                <path d="M15 9h.01" />
            </svg>

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Welcome Back</h2>
                        <p class="font-normal text-slate-300 dark:text-slate-700 text-sm">
                            Please login to continue
                        </p>
                    </div>
                    <div class="card-body">
                        <x-input name="email" label="Email" required placeholder="Email Address...."></x-input>
                        {{-- <x-input name="password" type="password" label="Password" required placeholder="Password...."></x-input> --}}
                        <div x-data="{ showPassword: false }">
                            <x-input name="password" x-bind:type="showPassword ? 'text' : 'password'" label="Password" required placeholder="Password...." icon>
                                <x-slot name="iconContent">
                                    <div class="cursor-pointer" @click="showPassword = !showPassword">
                                        <!-- Show when password is hidden -->
                                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                        </svg>
                                        <!-- Show when password is visible -->
                                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                            <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                            <path d="M3 3l18 18" />
                                        </svg>
                                    </div>
                                </x-slot>
                            </x-input>
                        </div>

                        <div class="flex flex-row justify-between mt-4">
                            <x-checkbox-input id="remember" name="remember">Remember</x-checkbox-input>
                            <div class="">
                                <a href="{{ route('forgot.password') }}" class="text-primary dark:text-primary-dark">Forgot Password?</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <x-button type="submit" class="button-primary">
                                Login
                            </x-button>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ route('register') }}" class="text-primary dark:text-primary-dark">Sign Up</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-blank>
