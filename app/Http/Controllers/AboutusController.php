<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagemodule;
use App\Models\Pageintro;
use App\Models\Principlesofpromise;

class AboutusController extends Controller
{
    public function aboutus()
    {
        $pageintro = Pagemodule::where('page_name', 'aboutus')->first();

        return view('frontend.aboutus.aboutus', compact('pageintro'));
    }


    public function whyus()
    {
        $pagemodules = Pagemodule::where('page_name', 'why-us')->get();
        $pageintro = Pageintro::where('page_name', 'why-us')->first();
        $pofps = Principlesofpromise::get();
        return view('frontend.aboutus.whyus', compact('pageintro', 'pagemodules', 'pofps'));
    }
}
