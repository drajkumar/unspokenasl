<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagemodule;

class AboutusController extends Controller
{
    public function aboutus()
    {
        $pageintro = Pagemodule::where('page_name', 'aboutus')->first();
        return view('frontend.aboutus.aboutus', compact('pageintro'));
    }


    public function whyus()
    {
        return view('frontend.aboutus.whyus');
    }
}
