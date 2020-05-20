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

        $mail = array(
            'boby@gmail.com'=>'648a6c6eb3ff4ce7b3016b4f29458c6b',
            'test@test.com'=> '1234'

    );
        if(key_exists(request('email'),$mail) === true){
            return redirect('/contact/?token=' . TokenController::generateToken());
        }
        
        
    }
}
