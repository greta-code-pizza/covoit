<?php
// Ce controller est obsolète ! 
// si un ajout est necessaire faites le dans le TrajetController

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CreationTrajetController extends Controller
{
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

            return redirect('/creation-trajet?token=' . TrajetController::verifyToken());
        }
    }
}
