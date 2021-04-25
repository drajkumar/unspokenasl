<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagemodule;
use App\Models\Pageintro;

class RequestadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function requestIndex()
    {
        $pageintro = Pageintro::where('page_name', 'request')->first();
        return view('admin.request.requestindex', compact('pageintro'));
    }

    public function requestModule()
    {
        $pagemodules = Pagemodule::where('page_name', 'request-module')->first();
        return view('admin.request.requestmodule', compact('pagemodules'));
    }
}
