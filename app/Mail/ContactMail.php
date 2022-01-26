<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $name;
    public $email;
    public $message;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->message = $data['message'];
    }

    public function build(): self
    {
        return $this->from('webserver@mazedlx.net')
            ->to('mazedlx@gmail.com')
            ->markdown('mail.contact-mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message,
            ]);
    }
}
