<?php

namespace App\Listeners;

use App\Events\UserForgotPassword;
use App\Mail\ResetPassword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendResetPasswordEmail
{
    public function handle(UserForgotPassword $event): void
    {
        $user = $event->user;

        dispatch(function () use ($user) {
            Mail::to($user->email)->send(new ResetPassword($user));
        })->afterResponse();
    }
}
