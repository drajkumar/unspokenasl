<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Pagemodule;
use App\Models\Sociallink;

class ContactusadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contactusview()
    {
        $contactus = Contactus::find(1);
        $pageintro = Pagemodule::where('page_name', 'contactus')->first();
        return view('admin.request.contactus', compact('contactus', 'pageintro'));
    }

    public function editcontactmodule(Request $request)
    {
        $request->validate([
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
        ]);

        $id = $request->contactmid;
        $image = $request->image;
        $oldimg = $request->oldimg;

        $prouniq = uniqid();
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('images/pagemodule'), $serverimgname);
        $data = [
            'image' => $serverimgname
        ];
        Pagemodule::where('id', $id)->update($data);
        unlink('images/pagemodule/'.$oldimg);
        return redirect('/admin/contactus')->with('conimgsuccess', 'Contact page image Successfully Updated!');
    }

    public function storecontactinfo(Request $request)
    {
       $request->validate([
            'hours' => 'required|max:150',
            'needservice' => 'required',
            'email' => 'required|max:150',
            'phone' => 'required|max:20',
            'address' => 'required',
            'map' => 'required',
        ]);

        $id = $request->contactid;

        $data = [
           'office_hour' => $request->hours,
           'need_service' => $request->needservice,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'map' => $request->map,
        ];

         Contactus::where('id', $id)->update($data);

         return redirect('/admin/contactus')->with('contactsuccess', "Contact Us information succesfully updated");
    }

    public function sociallink()
    {
        $sociallink = Sociallink::find(1);
        return view('admin.request.sociallink', compact('sociallink'));
    }

    public function updatedsociallink(Request $request)
    {
        $request->validate([
            'linkedin' => 'required|max:200',
            'twitter' => 'required|max:200',
            'facebook' => 'required|max:200',
            
        ]);

        $id = $request->linkid;

        $data = [
           'linkedin' => $request->linkedin,
           'twitter' => $request->twitter,
           'facebook' => $request->facebook
        ];

         Sociallink::where('id', $id)->update($data);

         return redirect('/admin/sociallink')->with('socisuccess', "Social Links succesfully updated");
    }


}
