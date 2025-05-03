<?php

namespace App\View\Composers;

use App\Supports\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Compose
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function compose(View $view)
    {
        $userInformation = Auth::user();

        $user = \App\Models\User::where('id', $userInformation->id)->select([
            'id',
            'name',
            'email',
            'avatar',
        ])->first();

        if (is_null($user->avatar)) {
            $name = Str::replace(' ', '+', $user->name);
            $user->avatar = "https://ui-avatars.com/api/?name={$name}&background=615fff&color=fff";
        } else {
            $user->avatar = route("file.response", [
                'file' => Str::fileResponse($user->avatar),
            ]);
        }


        $view->with('userInformation', $user);
    }
}
