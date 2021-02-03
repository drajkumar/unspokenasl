<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pageintro;
use App\Models\Pagemodule;
use App\Models\Service;
use App\Models\Servicemodule;
use App\Models\Servicesetting;

class OurserviceController extends Controller
{
    public function ourservice()
    {
        $pageintro = Pageintro::where('page_name', 'our-services')->first();
        $pagemodules = Pagemodule::where('page_name', 'our-services')->orderBy('id', 'DESC')->get();
        $service = Service::orderBy('id', 'DESC')->get();
        
        return view('frontend.services.ourservice', compact('pageintro', 'pagemodules', 'service'));
    }

    public function agencies()
    {
        return view('frontend.services.whitelabeling');
    }

    public function faq()
    {
        return view('frontend.services.faq');
    }

    public function servicepagedynamic($id, $title){

        $service = Service::find($id);
      return view('frontend.services.pages', compact('service'));
    }



    public function medicalinterpreting()
    { 
          $service = Service::find(1);

        return view('frontend.services.medical-interpreting', compact('service'));
    }

    public function mentalhealthinterpreting()
    {
        $service = Service::find(2);
        return view('frontend.services.mental-health-interpreting', compact('service'));
    }

    public function legalinterpreting()
    {
        $service = Service::find(3);
        return view('frontend.services.legal-interpreting', compact('service'));
    }

    public function educationalinterpreting()
    {
        $service = Service::find(4);
        return view('frontend.services.educational-k-12-interpreting', compact('service'));
    }

    public function businessinterpreting()
    {
        $service = Service::find(5);
        return view('frontend.services.business-interpreting', compact('service'));
    }

    public function conferenceinterpreting()
    {
        $service = Service::find(6);
        return view('frontend.services.conference-interpreting', compact('service'));
    }

    public function workerscompensation()
    {
        $service = Service::find(7);
        return view('frontend.services.workers-compensation', compact('service'));
    }




}
