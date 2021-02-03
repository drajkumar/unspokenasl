<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutus()
    {
        return view('frontend.aboutus.aboutus');
    }


    public function whyus()
    {
        return view('frontend.aboutus.whyus');
    }
}
