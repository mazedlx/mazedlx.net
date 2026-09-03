<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmSubscription extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $email;
    public $token;

    public function __construct(string $email, string $token)
    {
        $this->email = $email;
        $this->token = $token;
    }

    public function build()
    {
        return $this->from('mazedlx@gmail.com')
            ->subject('blog.mazedlx.net - confirm your subscription')
            ->markdown('mail.confirm-subscription');
    }
}
