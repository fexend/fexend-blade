<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Requests\Auth\SendResetLinkRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

final class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(SendResetLinkRequest $request)
    {
        $email = $request->input('email');

        $user = \App\Models\User::where('email', $email)->whereNotNull('email_verified_at')->first();
        if (!$user) {
            return redirect()->back()->with('success', 'We have emailed your password reset link!');
        }

        DB::beginTransaction();

        try {
            $resetPassword = new \App\Models\ResetPassword();
            $resetPassword->user_id = $user->id;
            $resetPassword->save();

            $resetPassword->sendResetPasswordNotification();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error sending reset password email: ' . $th->getMessage());

            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }

        Log::info('Reset password email sent to: ', [
            'email' => $user->email,
            'reset_password_id' => $resetPassword->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        DB::commit();

        return redirect()->back()->with('success', 'We have emailed your password reset link!');
    }

    public function showResetForm($token)
    {
        $resetPassword = \App\Models\ResetPassword::where('token', $token)->first();
        if (!$resetPassword) {
            return redirect()->route('login')->with('error', 'Invalid token.');
        }

        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $token = $request->input('token');
        $password = $request->input('password');

        $resetPassword = \App\Models\ResetPassword::where('token', $token)->first();
        if (!$resetPassword) {
            return redirect()->route('login')->with('error', 'Invalid token.');
        }

        DB::beginTransaction();

        try {
            $user = \App\Models\User::find($resetPassword->user_id);
            $user->password = $password;
            $user->save();

            $resetPassword->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error resetting password: ' . $th->getMessage());

            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }

        Log::info('Password reset successfully for user: ', [
            'email' => $user->email,
            'reset_password_id' => $resetPassword->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        DB::commit();

        return redirect()->route('login')->with('success', 'Your password has been reset successfully.');
    }
}
