<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function __invoke(Request $request, string $token)
    {
        $subscriber = Subscriber::where('token', $token)->firstOrFail();
        $subscriber->confirm();

        return redirect(route('thank-you'));
    }
}
