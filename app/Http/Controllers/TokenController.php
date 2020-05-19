<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    public function generateToken()
    {
        $var = Str::uuid()->toString();
        $var = str_replace('-','',$var);
        dd($var);
    }
}
