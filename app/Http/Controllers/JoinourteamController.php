<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinourteamController extends Controller
{
    public function joinus()
    {
        return view('frontend.joinus.joinus');
    }

    public function application()
    {
        return view('frontend.joinus.application');
    }





}
