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
        return view ('creation-trajet');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);
        //Send Email
     
        if (in_array(request('email'), Contact::WHITELIST) === true) {
            Mail::raw('Le trajet de ' . request('ville') . ' au GRETA a été crée', function ($message) {
                $message->to(request('email'))
                        ->subject('Test création trajet');
            });

            return view('testToken');
        }else{
            return redirect('/erreur');
        }
    }
}

