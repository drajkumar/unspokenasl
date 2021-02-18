<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pageintro;
use App\Models\Pagemodule;
use App\Models\Service;
use App\Models\Servicemodule;
use App\Models\Servicesetting;
use App\Models\Fquestion;

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
        $pagemodules = Pagemodule::where('page_name', 'agencies')->get();
        return view('frontend.services.whitelabeling', compact('pagemodules'));
    }

    public function faq()
    {
        $pageintro = Pagemodule::where('page_name', 'faq')->first();
        $fquestions = Fquestion::get();
        return view('frontend.services.faq', compact('pageintro', 'fquestions'));
    }

    public function servicepagedynamic($id, $title){

        $service = Service::find($id);
        if(empty($service)){
         return redirect('/');
        }else{
         return view('frontend.services.pages', compact('service')); 
        }
      
    }


}
