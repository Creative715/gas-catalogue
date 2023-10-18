<?php

namespace App\Http\Controllers;

use App\Mail\PhoneRequest;
use App\Mail\QuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function phone(Request $request)
    {
        if ($request->method() == 'POST'){
            $body = "<h2>Ім'я: {$request->input('name')}</h2>";
            $body .= "<h2>Номер телефону: {$request->input('phone')}</h2>";
            Mail::to('info@wdesign.net.ua')->send(new PhoneRequest($body));
            return redirect('/send');
        }

        return view('app.send');
    }

    public function send(Request $request)
    {
        if ($request->method() == 'POST'){
            $question = "<h3>Ім'я: {$request->input('name')}</h3>";
            $question .= "<h3>Номер телефону: {$request->input('phone')}</h3>";
            $question .= "<h3>Email: {$request->input('email')}</h3>";
            $question .= "<p>Запитання:<br>" . nl2br($request->input('massage')) . "</p>";
            Mail::to('info@wdesign.net.ua')->send(new QuestionRequest($question));
            return redirect('/send');
        }

        return view('app.send');
    }
}
