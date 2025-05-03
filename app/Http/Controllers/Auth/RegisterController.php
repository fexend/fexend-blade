<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResendEmailVerificationRequest;
use App\Jobs\Auth\SendEmailVerification;
use App\Supports\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

final class RegisterController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function registerPost(RegisterRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = \App\Models\User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error creating user', [
                'error' => $th->getMessage(),
                'request' => $request->all(),
            ]);

            return back()
                ->withErrors([
                    'email' => 'Something went wrong while creating your account. Please try again. or contact support.',
                ])->onlyInput('email', 'name');
        }

        try {
            $emailVerification = \App\Models\EmailVerification::create([
                'user_id' => $user->id,
            ]);

            SendEmailVerification::dispatch($user, $emailVerification->token)->delay(5);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error creating email verification', [
                'error' => $th->getMessage(),
                'request' => $request->all(),
            ]);

            return back()
                ->withErrors([
                    'email' => 'Something went wrong while creating your account. Please try again. or contact support.',
                ])->onlyInput('email', 'name');
        }

        Log::info('User registered', [
            'email' => $user->email,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        DB::commit();

        return redirect()
            ->route('register')
            ->with('success', 'Account created successfully. Please check your email for verification link.');
    }

    public function verifyEmail(string $token)
    {
        DB::beginTransaction();

        try {
            $emailVerification = \App\Models\EmailVerification::where('token', $token)->first();

            if (!$emailVerification) {
                return redirect()
                    ->route('register')
                    ->with('error', 'Invalid email verification token.');
            }

            if (Carbon::parse($emailVerification->expires_at)->lte(Carbon::nowWithAppTimezone())) {
                return redirect()
                    ->route('register')
                    ->with('error', 'Email verification token has expired. Please request a new one.');
            }

            $user = $emailVerification->user;
            if ($user->email_verified_at) {
                return redirect()
                    ->route('register')
                    ->with('error', 'Email already verified.');
            }

            $user->email_verified_at = Carbon::nowWithAppTimezone();
            $user->save();

            Log::info('Email verified successfully', [
                'user_id' => $user->id,
                'email' => $user->email,
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);

            DB::commit();
            return redirect()
                ->route('login')
                ->with('success', 'Email verified successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error verifying email', [
                'error' => $th->getMessage(),
                'token' => $token,
            ]);

            return redirect()
                ->route('register')
                ->with('error', 'Something went wrong while verifying your email. Please try again or contact support.');
        }
    }

    public function resendVerificationEmail()
    {
        return view("auth.resend-verification-email");
    }

    public function resendVerificationEmailPost(ResendEmailVerificationRequest $request)
    {
        $user = \App\Models\User::where('email', $request->email)->first();

        if (!$user) {
            return back()
                ->with('success', 'A new verification email has been sent. Please check your inbox.');
        }

        if ($user->email_verified_at) {
            return back()
                ->with('error', 'Email already verified.');
        }

        try {
            $emailVerification = \App\Models\EmailVerification::where('user_id', $user->id)->first();

            if ($emailVerification) {
                $emailVerification->delete();
            }

            $newEmailVerification = \App\Models\EmailVerification::create([
                'user_id' => $user->id,
            ]);

            SendEmailVerification::dispatch($user, $newEmailVerification->token)->delay(5);
        } catch (\Throwable $th) {
            Log::error('Error resending email verification', [
                'error' => $th->getMessage(),
                'request' => $request->all(),
            ]);

            return back()
                ->withErrors([
                    'email' => 'Something went wrong while resending the verification email. Please try again or contact support.',
                ])->onlyInput('email');
        }

        return redirect()
            ->route('register')
            ->with('success', 'A new verification email has been sent. Please check your inbox.');
    }
}
