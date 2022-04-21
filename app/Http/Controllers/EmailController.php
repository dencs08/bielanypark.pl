<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('kontakt');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
        ];

        Mail::send('email.email-template', $data, function($message) use ($data) {
          $message->to(env('MAIL_RECEIVER'))
          ->subject("Nowa wiadomość ze strony bielanypark")
          ->from(env('MAIL_USERNAME'), "Bielanypark")
          ->sender(env('MAIL_USERNAME'), "Bielanypark");
        });

        Mail::send('email.email-template-user-confirm', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject("Dziękujemy za kontakt!")
          ->from(env('MAIL_USERNAME'), "Bielanypark")
          ->sender(env('MAIL_USERNAME'), "Bielanypark");
        });

        return view('email.email-sent');
    }
}