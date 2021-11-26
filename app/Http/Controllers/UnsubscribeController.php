<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class UnsubscribeController extends Controller
{
    public function __invoke(Request $request, $token)
    {
        $subscriber = Subscriber::confirmed()->where('token', $token)->firstOrFail();

        $subscriber->unsubscribe();

        return \redirect(\route('bye'));
    }
}
