<?php

//Controleur---->

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class Reservation extends Controller
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
