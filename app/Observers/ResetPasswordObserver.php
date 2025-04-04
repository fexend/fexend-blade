<?php

namespace App\Observers;

use App\Models\ResetPassword;
use App\Supports\Carbon;
use App\Supports\Str;

class ResetPasswordObserver
{
    /**
     * Handle the ResetPassword "creating" event.
     */
    public function creating(ResetPassword $resetPassword): void
    {
        $resetPassword->token = Str::random(150);
        $resetPassword->expires_at = Carbon::nowWithAppTimezone()->addMinutes(60);
    }

    /**
     * Handle the ResetPassword "created" event.
     */
    public function created(ResetPassword $resetPassword): void
    {
        //
    }

    /**
     * Handle the ResetPassword "updated" event.
     */
    public function updated(ResetPassword $resetPassword): void
    {
        //
    }

    /**
     * Handle the ResetPassword "deleted" event.
     */
    public function deleted(ResetPassword $resetPassword): void
    {
        //
    }

    /**
     * Handle the ResetPassword "restored" event.
     */
    public function restored(ResetPassword $resetPassword): void
    {
        //
    }

    /**
     * Handle the ResetPassword "force deleted" event.
     */
    public function forceDeleted(ResetPassword $resetPassword): void
    {
        //
    }
}
