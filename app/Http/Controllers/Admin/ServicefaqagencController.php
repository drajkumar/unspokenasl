<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagemodule;
use App\Models\Fquestion;

class ServicefaqagencController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function agenciesview()
    {
       
        $pagemodules = Pagemodule::where('page_name', 'agencies')->paginate(10);
        return view('admin.service.agencies', compact('pagemodules'));
    }

    public function storeagencies()
    {
        return view('admin.service.addagencies');
    }

    public function updateagencies($id)
    {
      $pagemodule = Pagemodule::find($id);
      
      return view('admin.service.editagencies', compact('pagemodule')); 
    }

    public function faqview()
    {
        $pageintro = Pagemodule::where('page_name', 'faq')->first();
        return view('admin.service.faq', compact('pageintro'));
    }

    public function queans()
    {
        return view('admin.service.quesans');
    }

    public function quesandansview()
    {
        $fquestions = Fquestion::paginate(10);
        return view('admin.service.quesandansview', compact('fquestions'));
    }

    public function storequeans(Request $request)
    {
        $request->validate([
            'question' => 'required|max:150',
            'answer' => 'required'
        ]);

        $data = [
            'question' => $request->question,
            'answer' => $request->answer
        ];

        Fquestion::create($data);
        return redirect('admin/questionandanswerview')->with('qesanssavesucc', 'Question and answer successfully Created');
    }

    public function queseditview($id)
    {
        $question = Fquestion::find($id);
        return view('admin.service.editquesans', compact('question'));
    }

    public function updatequeans(Request $request)
    {
        $request->validate([
            'question' => 'required|max:150',
            'answer' => 'required'
        ]);

        $id = $request->qaid;

        $data = [
            'question' => $request->question,
            'answer' => $request->answer
        ];

        Fquestion::where('id', $id)->update($data);
        return redirect('admin/questionandanswerview')->with('qesansupsucc', 'Question and answer successfully updated');
    }

    public function deletequesans(Request $request)
    {
      $id = $request->delpageid;
      Fquestion::where('id', $id)->delete();
      return redirect('/admin/questionandanswerview')->with('qesansdelsucc', 'Question and answer successfully deleted');
    }
}
