<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function getMail()
    {
        $contacts = explode(',', env('LISTE_MAIL'));
        return $contacts;
    }


   public static function generateToken()
   {
       $salt = "le sel c'est super";
       $hash = hash('ripemd160', $_POST['email'] . $salt);
       
       
       foreach (Contact::getMail() as $value) {
           if (hash('ripemd160', $value . $salt) === $hash) {
               return $hash;
           }
       }
   }

   public static function matchToken($token){

    $salt = "le sel c'est super";
    
    
    foreach (Contact::getMail() as $contact) {
        
         if($token == hash('ripemd160', $contact . $salt)){
             return $contact;
         }
    }

   }
}
