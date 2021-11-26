<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmSubscription;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SubscribeController extends Controller
{
    public function __invoke(Request $request)
    {
        request()->validate([
            'email' => [
                'required',
                'email',
                'unique:subscribers',
            ],
        ]);

        $email = \request('email');
        $token = Str::random(40);

        Subscriber::create([
            'email' => $email,
            'token' => $token,
        ]);

        Mail::to($email)
            ->send(new ConfirmSubscription($email, $token));

        return \redirect(\route('subscribed'));
    }
}
