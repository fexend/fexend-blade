<?php

namespace App\Supports;

use Illuminate\Support\Facades\Auth;

class AvatarSupport
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get current user avatar url
     *
     * @return string
     */
    public static function getUserAvatar(): string
    {
        return Auth::user()->avatar ? route('response-file', Str::replace('/', '$', Auth::user()->avatar)) : 'https://ui-avatars.com/api/?name=' . Str::slug(Auth::user()->name, '-') . '&background=14b8a6';
    }
}
