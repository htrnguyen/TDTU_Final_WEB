<?php

namespace App\Listeners;

use App\Events\UserRegisteredSuccessfully;
use App\Mail\VerificationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendRegisterVerificationEmail
{
    /**
     * Handle the event.
     */
    public function handle(UserRegisteredSuccessfully $event): void
    {
        $user = $event->user;

        dispatch(function () use ($user) {
            Mail::to($user->email)->send(new VerificationEmail($user));
        })->afterResponse(); 
    }
}
