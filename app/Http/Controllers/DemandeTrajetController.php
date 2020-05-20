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

        return redirect('/demande-trajet');

    }
}
