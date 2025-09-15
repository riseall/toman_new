<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    public $user;

    public function __construct($url, $user)
    {
        $this->url = $url;
        $this->user = $user;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('Reset Password Akun Anda')
            ->view('auth.notification-reset')
            ->with([
                'url' => $this->url,
                'user' => $this->user,
            ]);
    }
}
