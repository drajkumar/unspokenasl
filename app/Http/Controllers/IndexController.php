<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagemodule;
use App\Models\Clienttrust;


class IndexController extends Controller
{
    public function index()
    {

        $sliders = Pagemodule::where('page_name', 'slider')->orderBy('id', 'DESC')->get();
        $pagemodule = Pagemodule::where('page_name', 'home')->where('id', '!=', 15)->orderBy('id', 'DESC')->get();
        $pagemodule3 = Pagemodule::find(15);
        $cslider = Clienttrust::orderBy('id', 'DESC')->get();
        return view('frontend.index.index', compact('sliders', 'pagemodule', 'pagemodule3', 'cslider'));
    }
}
