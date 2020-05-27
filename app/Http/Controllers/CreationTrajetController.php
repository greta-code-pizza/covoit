<?php

namespace App\Http\Controllers;

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
        $mail = array(
            'boby@gmail.com',
            'test@test.com'
    );
        if (in_array(request('email'), $mail) === true) {
            Mail::raw('Le trajet de ' . request('ville') . ' au GRETA a été crée', function ($message) {
                $message->to(request('email'))
                        ->subject('Test création trajet');
            });

            return redirect('/creation-trajet?token=' . TokenController::generateToken());
        }
    }
}
