<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view ('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);
        //Send Email
        Mail::raw('Sa marche !!!', function ($message){       
            $message->to(request('email'))
                    ->subject('Test envoi mail');
        });

        return redirect('/contact');

    }
}
