<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pagemodule;
use App\Models\Pageintro;

class JoinourteamController extends Controller
{
    public function joinus()
    {
        $pageintro = Pageintro::where('page_name', 'joinourteam')->first();
        $pagemodules = Pagemodule::where('page_name', 'interpreter-promise')->get();
        return view('frontend.joinus.joinus', compact('pageintro', 'pagemodules'));
    }

    public function application()
    {
        $pagemodules = Pagemodule::where('page_name', 'application')->first();
        return view('frontend.joinus.application', compact('pagemodules'));
    }





}
