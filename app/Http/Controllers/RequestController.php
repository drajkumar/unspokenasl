<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Pagemodule;
use App\Models\Pageintro;

class RequestController extends Controller
{
    public function requestservices()
    {
        $pageintro = Pageintro::where('page_name', 'request')->first();
        $pagemodules = Pagemodule::where('page_name', 'request-module')->first();
        //dd($pageintro);
        return view('frontend.request.request-services', compact('pageintro', 'pagemodules'));
    }

    public function contactus()
    {
        $contactus = Contactus::find(1);
        $pageintro = Pagemodule::where('page_name', 'contactus')->first();
        return view('frontend.request.contactus', compact('contactus', 'pageintro'));
    }
}
