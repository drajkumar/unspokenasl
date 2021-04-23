<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pageintro;
use App\Models\Pagemodule;
class CommonPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editintropages(Request $request)
    {
       $id = $request->pageid;
       $url = $request->redirceturl;
       $data = [
         'title' => $request->introtitle,
         'description' => $request->description
       ];

       Pageintro::where('id', $id)->update($data);
       return redirect($url)->with('pageintrosuccess', 'Content Successfully Updated!');

    }

    public function storepagemodule(Request $request)
    {
        $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
           
        ]);
        
        $url = $request->redirceturl;
        $image = $request->image;
        $prouniq = uniqid();
       // $producttoken = md5($prouniq);
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();

        $request->image->move(public_path('images/pagemodule'), $serverimgname);

        $data = [
             
            'page_name'  => $request->pagename,
            'title'        => $request->title,
            'description'  => $request->description,
            'url'       => !empty($request->url) ? $request->url : "",
            'buttonvalue'       => !empty($request->buttonvalue) ? $request->buttonvalue : "",
            'image'        => $serverimgname

        ];

        Pagemodule::create($data);

        return redirect($url)->with('pagemodulesuccess', 'Content Successfully Saved!');
    }


    public function editpagemodule(Request $request)
    {
        $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
           
        ]);
        $id = $request->pageid;
        $url = $request->redirceturl;
        $image = $request->image;
        $oldimage = $request->oldimg;

         if(empty($request->image)){
          $coursesdata = [
            'title'        => $request->title,
            'description'  => $request->description,
            'url'       => !empty($request->url) ? $request->url : "",
            'buttonvalue'       => !empty($request->buttonvalue) ? $request->buttonvalue : ""
        ];

        Pagemodule::where('id', $id)->update($coursesdata);
        return redirect($url)->with("updatpmsec", "Content is successfuly updated");

     }else{
       
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();

        $request->image->move(public_path('images/pagemodule'), $serverimgname);

        $coursesdata = [
            'title'        => $request->title,
            'description'  => $request->description,
            'url'       => !empty($request->url) ? $request->url : "",
            'buttonvalue'       => !empty($request->buttonvalue) ? $request->buttonvalue : "",
            'image'        => $serverimgname
        ];

        Pagemodule::where('id', $id)->update($coursesdata);
        unlink('images/pagemodule/'.$oldimage);
        return redirect($url)->with("updatpmsec", "Content is successfuly updated");
     }
     
    }

    public function deletepagemodule(Request $request)
    {
         $id = $request->delpageid;
         $url = $request->redirceturl;
         $pagemodule = Pagemodule::find($id);
         $oldimage = $pagemodule->image;

         Pagemodule::where('id', $id)->delete();
         unlink('images/pagemodule/'.$oldimage);
         return redirect($url)->with("pagemoduledelsuccess", "Content is successfuly deleted");

    }

   
}
