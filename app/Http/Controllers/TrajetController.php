<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrajetController extends Controller
{
    public static function generateToken()
    {
        $salt = "le sel c'est super";
        $hash = hash('ripemd160', $_POST['email'] . $salt);
        
        
        foreach (Contact::WHITELIST as $value) {
            if (hash('ripemd160', $value . $salt) === $hash) {
                return $hash;
            }
        }
    }

    public function show()
    {
        return view('creation-trajet');
    }
    public function store()
    {
        request()->validate(['email' => 'required|email']);
        //Send Email
        
        if (in_array(request('email'), Contact::WHITELIST) === true) {
            Mail::raw('Le trajet de ' . request('ville') . ' au GRETA a été crée', function ($message) {
                $message->to(request('email'))
                        ->subject('Un trajet à été crée');
               
                //Send mail to all member in the whitelist
                foreach (Contact::WHITELIST as $contact) {
                    Mail::html("<p>Un trajet de ". request('ville') ." au GRETA de Vannes a été crée par ". request('nom'). " " . request('prenom'). "</p>" .
                    "<p>Si vous êtes interessé par ce trajet, veuillez cliquer sur le lien ci-dessous</p>" .
                    "<br>" .
                    "<a href='http://covoit.test/demande-trajet/". TrajetController::generateToken()."'>". request('ville'). " au Greta de Vannes</a>"
                    , function ($message) use ($contact) {

                                $message->to($contact)
                                        ->subject('Alerte création de trajet');
                    });
                }
            });

            return "Votre trajet à bien été crée" . "<br>" . "<a href='/'>Retour à l'accueil</a>";
        } else {
            return redirect('/erreur');
        }
    }
}

