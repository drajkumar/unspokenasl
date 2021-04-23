<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagemodule;
use App\Models\Pageintro;

class AdminjoinusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pageintro = Pageintro::where('page_name', 'joinourteam')->first();
        return view('admin.joinus.joinusindex', compact('pageintro'));
    }

    public function interpreterpromise()
    {
        $pagemodules = Pagemodule::where('page_name', 'interpreter-promise')->paginate(10);
        return view('admin.joinus.interpreterpromise', compact('pagemodules'));
    }

    public function editinterpro($id)
    {
        $module = Pagemodule::find($id);
        return view('admin.joinus.editourteam', compact('module'));
    }

    public function joinapplication()
    {
        $pagemodules = Pagemodule::where('page_name', 'application')->first();

        return view('admin.joinus.joinapplication', compact('pagemodules'));
    }

    public function applicationeditstore(Request $request)
    {
        $request->validate([

            'description' => 'required',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',

        ]);
        $id = $request->pageid;
        $image = $request->image;
        $oldimage = $request->oldimg;

        if (empty($request->image)) {
            $coursesdata = [
                'description'  => $request->description,
            ];

            Pagemodule::where('id', $id)->update($coursesdata);
            return redirect("/admin/join-application")->with("updateappsucc", "Content is successfuly updated");
        } else {

            $serverimgname = uniqid() . '.' . $image->getClientOriginalExtension();

            $request->image->move(public_path('images/pagemodule'), $serverimgname);

            $coursesdata = [
                'description'  => $request->description,
                'image'        => $serverimgname
            ];

            Pagemodule::where('id', $id)->update($coursesdata);
            unlink('images/pagemodule/' . $oldimage);
            return redirect("/admin/join-application")->with("updateappsucc", "Content is successfuly updated");
        }
    }
}
