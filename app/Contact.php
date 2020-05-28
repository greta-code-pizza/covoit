<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   const WHITELIST = array(
       'test@test.com',
       'plop@plop.com',
   );
}
