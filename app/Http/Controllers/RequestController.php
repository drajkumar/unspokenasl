<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function requestservices()
    {
        return view('frontend.request.request-services');
    }

    public function contactus()
    {
        return view('frontend.request.contactus');
    }
}
