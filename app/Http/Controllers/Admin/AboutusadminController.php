<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagemodule;
use App\Models\Pageintro;
use App\Models\Principlesofpromise;

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

    public function whyusintro()
    {
        $pageintro = Pageintro::where('page_name', 'why-us')->first();
        return view('admin.aboutus.whyusintro', compact('pageintro'));
    }

    public function whyusmodule()
    {
        $pagemodules = Pagemodule::where('page_name', 'why-us')->paginate(10);
        return view('admin.aboutus.whyusmodule', compact('pagemodules'));
    }

    public function editwhyusview($id)
    {
        $slider = Pagemodule::find($id);
        return view('admin.aboutus.editwhyusmodule', compact('slider'));
    }

    public function principlesofpromiseindex()
    {
        $pofps = Principlesofpromise::paginate(10);
        return view('admin.aboutus.principlesofpromise', compact('pofps'));
    }

    public function storepofp(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required|string',
        ]);

        $data = [
          'title' => $request->title,
          'description' => $request->description,
          'icon'  => $request->icon
        ];

        Principlesofpromise::create($data);
        return redirect('/admin/principles-of-promise')->with('pofpsuccess', 'Content is successfuly saveed');
    }

    public function pofpdelete(Request $request)
    {
        $id = $request->delpageid;
        Principlesofpromise::where('id', $id)->delete();
        return redirect('/admin/principles-of-promise')->with('pofpdelsuccess', 'Content is successfuly Deleted!');
    }

    public function editpofpview($id)
    {
        $pofp = Principlesofpromise::find($id);
        return view('admin.aboutus.editpofp', compact('pofp'));
    }

    public function editpofpstore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required|string',
        ]);

        $id = $request->pageid;

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'icon'  => $request->icon
        ];
        Principlesofpromise::where('id', $id)->update($data);
        return redirect('/admin/principles-of-promise')->with('pofpupsuccess', 'Content is successfuly Updated!');

    }
}
