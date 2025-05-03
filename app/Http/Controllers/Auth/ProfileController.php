<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Profile\UpdatePasswordRequest;
use App\Http\Requests\Auth\Profile\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

final class ProfileController extends Controller
{
    /**
     * Instantiate a new ProfileController instance.
     */
    public function __construct()
    {
        // body
    }

    public function index()
    {
        return view('auth.profile.index');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();

        DB::beginTransaction();

        try {
            $user = User::find($user->id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error updating user profile: ' . $th->getMessage(), [
                'user_id' => $user->id,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);

            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }

        DB::commit();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = Auth::user();

        DB::beginTransaction();

        try {
            $user = User::find($user->id);
            $user->password = bcrypt($request->input('password'));
            $user->save();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Error updating user password: ' . $th->getMessage(), [
                'user_id' => $user->id,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);

            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }

        DB::commit();

        return redirect()->route('profile')->with('success', 'Password updated successfully.');
    }
}
