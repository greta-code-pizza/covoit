<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    public static function generateToken()
    {
        $var = Str::uuid()->toString();
        $var = str_replace('-', '', $var);
        $salt = "le sel cest super";
        $hash = hash('ripemd160', $_POST['email'] . $salt);
        
        
        foreach (Contact::WHITELIST as $value) {
            if (hash('ripemd160', $value . $salt) === $hash) {
                return $hash;
            }else{
                echo "Nous n'avons aucune correspondance pour votre token ";
            }
        }
    }
}