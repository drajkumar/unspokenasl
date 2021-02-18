<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Pagemodule;

class RequestController extends Controller
{
    public function requestservices()
    {
        return view('frontend.request.request-services');
    }

    public function contactus()
    {
        $contactus = Contactus::find(1);
        $pageintro = Pagemodule::where('page_name', 'contactus')->first();
        return view('frontend.request.contactus', compact('contactus', 'pageintro'));
    }
}
