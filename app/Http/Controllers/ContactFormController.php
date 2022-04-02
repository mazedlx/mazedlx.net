<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        if (null !== request('check_that')) {
            return redirect(route('posts.index'));
        }
        if (time() - request('timestamp') < 5) {
            return redirect(route('posts.index'));
        }

        Mail::send(new ContactMail(request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ])));

        return redirect(route('sent'));
    }
}
