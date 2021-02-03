<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pageintro;
use App\Models\Pagemodule;
use App\Models\Service;
use App\Models\Servicemodule;
use App\Models\Servicesetting;

class SettingAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pageintro = Pageintro::where('page_name', 'our-services')->first();
        $pagemodules = Pagemodule::where('page_name', 'our-services')->orderBy('id', 'DESC')->get();
        $services = Service::orderBy('id', 'DESC')->get();
        return view('admin.service.service', compact('pageintro', 'pagemodules', 'services'));
    }

    public function editpagemodule($id)
    {
      $pagemodule = Pagemodule::find($id);
      
      return view('admin.service.editpagemodule', compact('pagemodule'));
    }


    public function storeservice(Request $request)
    {
       $request->validate([
            'title' => 'required|max:150',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
           
        ]);
       $image = $request->image;
      
       $serverimgname = uniqid().'.'.$image->getClientOriginalExtension();
       $servicetoken = md5(uniqid());

       $image->move(public_path('images/service'), $serverimgname);
       $data = [
            'token' => $servicetoken,
            'name' => $request->title,
            'description' => '',
            'image' => $serverimgname
        ];

        Service::create($data);

        return redirect('/admin/service')->with('servicecreatesuccess', 'Service successfully Created');

    }

    public function editservice(Request $request){

       $request->validate([
            'title' => 'required|max:150',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
           
        ]);
      
        $id = $request->serviceeditid;
        $image = $request->image;
        $oldimage = $request->oldimg;

         if(empty($request->image)){
          $data = [
            'name'=> $request->title,
            
        ];

        Service::where('id', $id)->update($data);
        return redirect('/admin/service')->with("updatservice", "Service is successfuly updated");

     }else{
       
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();

        $request->image->move(public_path('images/service'), $serverimgname);

        $data = [
            'name'  => $request->title,
            'image' => $serverimgname,
         
        ];

        Service::where('id', $id)->update($data);
        unlink('images/service/'.$oldimage);
        
         return redirect('/admin/service')->with("updatservice", "Service is successfuly updated");
     
      }
    }

    public function servicemoduleview($id)
    {
      $services = Service::find($id);
      return view('admin.service.servicemaneger', compact('id', 'services'));
    }

    public function storeservicemodule(Request $request)
    {
      $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'image' => 'file|mimes:jpeg,png,jpg|max:4048',
           
        ]);

       $id = $request->serviceid;
       $image = $request->image;
      
       $serverimgname = uniqid().'.'.$image->getClientOriginalExtension();
       $servicetoken = md5(uniqid());

       $image->move(public_path('images/service'), $serverimgname);
       $data = [
            'services_id' => $id,
            'stoken' => '',
            'title' => $request->title,
            'description' => $request->description,
            'image' => $serverimgname
        ];

        Servicemodule::create($data);

        return redirect('admin/servicemoduleview/'.$id)->with('servicemoducreatesuccess', 'Service module successfully Created');
    }


    public function editservicemoduleview($sid, $smid)
    {
        $servicemodule = Servicemodule::find($smid);
        return view('admin.service.editservicemodule', compact('sid', 'servicemodule'));
    }

    public function editservicemodulestore(Request $request)
    {

          $request->validate([
                'title' => 'required|max:150',
                'description' => 'required',
                'image' => 'file|mimes:jpeg,png,jpg|max:4048',
              
          ]);
          $id = $request->servicemid;
          $rurl = $request->serviceid;
          $image = $request->image;
          $oldimage = $request->oldimage;

         if(empty($request->image)){
          $data = [
            'title'=> $request->title,
            'description' => $request->description
            
        ];

        Servicemodule::where('id', $id)->update($data);
           return redirect('/admin/servicemoduleview/'.$rurl)->with("updatservicemodule", "Service module successfuly updated");

     }else{
       
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();

        $request->image->move(public_path('images/service'), $serverimgname);

        $data = [
            'title'  => $request->title,
            'description' => $request->description,
            'image' => $serverimgname
         
        ];

        Servicemodule::where('id', $id)->update($data);
        unlink('images/service/'.$oldimage);
         return redirect('/admin/servicemoduleview/'.$rurl)->with("updatservicemodule", "Service module successfuly updated");
     
      }

    }


    public function deleteservicemodule(Request $request)
    {
      $id = $request->delpageid;
      $rurl = $request->sid;
      $image = Servicemodule::find($id);

      $oldimage = $image->image;

       Servicemodule::where('id', $id)->delete();
       unlink('images/service/'.$oldimage);
      return redirect('/admin/servicemoduleview/'.$rurl)->with("delservicemodule", "Service module successfuly Deleted");
    }


    public function servicesettingview($sid)
    {
        $services = Service::find($sid);
        return view('admin.service.servicesetting', compact('services', 'sid'));
    }

    public function storeservicesetting(Request $request)
    {
       $request->validate([
                'title' => 'required|max:150',
                'image' => 'file|mimes:jpeg,png,jpg|max:4048',
              
        ]);
       $sid = $request->serviceid;
       $image = $request->image;
      
       $serverimgname = uniqid().'.'.$image->getClientOriginalExtension();
       $servicetoken = md5(uniqid());

       $image->move(public_path('images/service'), $serverimgname);
       $data = [
            'services_id' => $sid,
            'stoken' => '',
            'title' => $request->title,
            'image' => $serverimgname
        ];

        Servicesetting::create($data);

        return redirect('/admin/servicesetting/'.$sid)->with('serviceseetingcreatesuccess', 'Service setting successfully Created');
    }

    public function editservicesettingstore(Request $request)
    {

          $request->validate([
                  'title' => 'required|max:150',
                  'image' => 'file|mimes:jpeg,png,jpg|max:4048',
                
          ]);
          $id = $request->setid;
          $rurl = $request->serviceid;
          $image = $request->image;
          $oldimage = $request->oldimage;

         if(empty($request->image)){
          $data = [
            'title'=> $request->title,
            
        ];

        Servicesetting::where('id', $id)->update($data);
      return redirect('/admin/servicesetting/'.$rurl)->with('serviceseetingupsuccess', 'Service setting successfully Updated');

     }else{
       
        $serverimgname = uniqid() .'.'.$image->getClientOriginalExtension();

        $request->image->move(public_path('images/service'), $serverimgname);

        $data = [
            'title'  => $request->title,
            'image' => $serverimgname
         
        ];

        Servicesetting::where('id', $id)->update($data);
        unlink('images/service/'.$oldimage);
         return redirect('/admin/servicesetting/'.$rurl)->with('serviceseetingupsuccess', 'Service setting successfully Updated');
     
      }

    }

    public function deleteservicesetting(Request $request)
    {
        $id = $request->delsettingid;
        $rurl = $request->sid; 
        $image = Servicesetting::find($id);

        $oldimage = $image->image;

        Servicesetting::where('id', $id)->delete();
        unlink('images/service/'.$oldimage);
         return redirect('/admin/servicesetting/'.$rurl)->with('serviceseetingdelsuccess', 'Service setting successfully Deleted');
    }
}
