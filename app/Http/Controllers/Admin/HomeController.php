<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pagemodule;
use App\Models\Clienttrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Pagemodule::where('page_name', 'slider')->orderBy('id', 'DESC')->get();
        $pagemodule = Pagemodule::where('page_name', 'home')->where('id', '!=', 15)->orderBy('id', 'DESC')->get();
        $cslider = Clienttrust::orderBy('id', 'DESC')->get();
        return view('admin.home', compact('slider', 'pagemodule', 'cslider'));
    }

    public function addslider()
    {
        return view('admin.home.addslider');
    }

    public function editslider($id)
    {
      $slider = Pagemodule::find($id);
      return view('admin.home.slideredit', compact('slider'));
    }

    public function addhomemodule()
    {
        return view('admin.home.addhomemodule');
    }

    public function edithomepagemodule($id){
     $slider = Pagemodule::find($id);
     return view('admin.home.edithomepagemodule', compact('slider'));
    }

    public function storeclientslider(Request $request)
    {
      $request->validate([
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
        ]);

        $image = $request->image;
        $prouniq = uniqid();
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('images/home'), $serverimgname);
        $data = [
            'image' => $serverimgname
        ];
        Clienttrust::create($data);

        return redirect('/admin/home')->with('csliderstoresuccess', 'Client slider Successfully Saved!');
    }

    public function editclientimg(Request $request)
    {
     
        $request->validate([
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
        ]);

        $id = $request->clintslidereditid;
        $image = $request->image;
        $oldimg = $request->oldimg;

        $prouniq = uniqid();
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('images/home'), $serverimgname);
        $data = [
            'image' => $serverimgname
        ];
        Clienttrust::where('id', $id)->update($data);
        unlink('images/home/'.$oldimg);
        return redirect('/admin/home')->with('cslidereditsuccess', 'Client slider Successfully Updated!');

    }

    public function deleteclintsl(Request $request)
    {
      $id = $request->delcslid;
      $image = Clienttrust::find($id);
      $delimg = $image->image;
      Clienttrust::where('id', $id)->delete($id);
      unlink('images/home/'.$delimg);
       return redirect('/admin/home')->with('csliderdeletesuccess', 'Client slider Successfully deleted!');
    }
}
