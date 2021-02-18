<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagemodule;

class AboutusadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewaboutus()
    {
        $pageintro = Pagemodule::where('page_name', 'aboutus')->first();
        return view('admin.aboutus.aboutus', compact('pageintro'));
    }

    public function editaboutus(Request $request)
    {
        $request->validate([

            'description' => 'required',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
           
        ]);
        $id = $request->pageid;
        $image = $request->image;
        $oldimage = $request->oldimg;

         if(empty($request->image)){
          $coursesdata = [
            'description'  => $request->description,
        ];

        Pagemodule::where('id', $id)->update($coursesdata);
        return redirect("/admin/aboutus")->with("updatpmsec", "Content is successfuly updated");

     }else{
       
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();

        $request->image->move(public_path('images/pagemodule'), $serverimgname);

        $coursesdata = [
            'description'  => $request->description,
            'image'        => $serverimgname
        ];

        Pagemodule::where('id', $id)->update($coursesdata);
        unlink('images/pagemodule/'.$oldimage);
         return redirect("/admin/aboutus")->with("updatpmsec", "Content is successfuly updated");
     }
     
    }
}
