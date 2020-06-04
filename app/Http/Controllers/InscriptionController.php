<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{
    public function show()
    {
        //
    }

    public function store()
    {
        $email = env('MAIL_FROM_ADDRESS');

        request()->validate(['email' => 'required|email']);
        //Send Email
        Mail::html(
                    request('nom') . " " . request('prenom') . " voudrait être dans la White-Liste." .
                    "<br>".
                    "Vous pouvez trouver son permis pour vérification en pièce jointe. ".
                    "<br>".
                    "Vous pouvez prendre contact avec cette personne à cette adresse : ".
                    "<br>".
                    request('email')

        , function ($message) use($email) {     
            $message->to($email)
                    ->subject("Nouvelle demande d'ajout à la White-Liste")
                    ->attach(request('permis'), 
                        array(
                        'as' => 'permis.' . request('permis')->getClientOriginalExtension(), 
                        'mime' =>request('permis')->getMimeType()
                        ));
        });

        return redirect('/');

    }
    
}