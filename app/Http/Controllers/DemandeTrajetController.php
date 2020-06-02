<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemandeTrajetController extends Controller
{
    public function show()
    {
        return view ('demande-trajet');
    }

    public function store()
    {
        $email = Contact::matchToken(request('token'));

        request()->validate(['email' => 'required|email']);
        //Send Email
        Mail::html(
                    request('nom') . " " . request('prenom') . " est interressé pour faire le chemin avec vous" .
                    "<br>".
                    "Vous pouvez prendre contact avec cette personne à l'adresse suivante : ".
                    "<br>".
                    request('email')

        , function ($message) use($email) {     
            $message->to($email)
                    ->subject('Nouvelle demande de trajet');
        });

        return redirect('/successParticipation');

    }
    
}
