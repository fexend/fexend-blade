<?php

namespace App\Models;

use App\Mail\Auth\ResetPasswordEmail;
use App\Observers\ResetPasswordObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Mail;

#[ObservedBy(ResetPasswordObserver::class)]
class ResetPassword extends Model
{
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id'
    ];

    public function sendResetPasswordNotification(): void
    {
        Mail::to($this->user->email)->send(new ResetPasswordEmail($this->token, $this->user));
    }

    /**
     * Get the user that owns the ResetPassword
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
