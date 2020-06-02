<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   const WHITELIST = array(
       'test@test.com',
       'plop@plop.com',
       'passager.covoit@gmail.com',
       'conducteur.covoit@gmail.com',
       'test1@test.com'
       
   );

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

   public static function matchToken($token){

    $salt = "le sel c'est super";
    
    
    foreach (Contact::WHITELIST as $contact) {
        
         if($token == hash('ripemd160', $contact . $salt)){
             return $contact;
         }
    }

   }
}
