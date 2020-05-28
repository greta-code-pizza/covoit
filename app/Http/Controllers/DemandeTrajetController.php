<?php

namespace App\Http\Controllers;

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
        request()->validate(['email' => 'required|email']);
        //Send Email
        Mail::raw('Votre demande de participation au trajet a été transmis au conducteur', function ($message){       
            $message->to(request('email'))
                    ->subject('Test Demande Trajet');
        });

        return "Votre participation à été prise en compte .".
        "<br>".
        "<a href='/'>Retour à l'accueil</a>";

    }
    // public function storeTestToken()
    // {
    //     request()->validate(['email' => 'required|email']);
    //     //Send Email
    //     Mail::html(
    //         request('nom') . " " . request('prenom') . " est interressé pour faire le chemin avec vous" .
    //         "<br>".
    //         "Vous pouvez prendre contact avec cette personne à l'adresse suivante : ".
    //         "<br>".
    //         request('email')
        
        
    //     , function ($message){       
    //         $message->to(request('email'))
    //                 ->subject('test token');
    //     });

    //     return redirect('/');

    // }
}
