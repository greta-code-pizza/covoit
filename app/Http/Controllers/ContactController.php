<?php

namespace App\Http\Controllers;

use App\Contact;
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
        if (in_array(request('email'), Contact::getMail()) === true) {
            // Mail::raw('Le trajet de ' . request('ville') . ' au GRETA a été crée', function ($message) {
            //     $message->to(request('email'))
            //             ->subject('Test création trajet');
            // });
            return redirect('/successMailing');
        }        
        else{
            return redirect('/erreur');   
        }        
    }
  }

