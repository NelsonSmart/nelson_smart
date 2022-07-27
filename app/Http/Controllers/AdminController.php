<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stack;
use App\Models\Service;
use App\Models\Education;
use App\Models\Qualification;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashbrd(){
        return view('admin.index');
    }

    public function abotpag(){

        $stacks = Stack::all();
        return view('admin.about_page', compact('stacks'));
    }
    public function servspag(){
        $services = Service::all();
        return view('admin.services_page', compact('services'));
    }
    public function resmepag(){
        $education = Education::all();
        $qualification = Qualification::all();
        return view('admin.resume_page', ['educations' => $education, 'qualifications' => $qualification]);
    }

    public function contpag(){
        return view('admin.contact_page');
    }
    public function projtpag(){
        return view('admin.projects_page');
    }


    public function educat(Request $request, Education $eduction){
        $validate = $request->validate([
            'year' => 'required| string',
             'course'=> 'required| string' ,
             'school' => 'required| string',
             'description' => 'required| string'
        ]);

        $eduction->create($validate);

        return back()->with('success', 'record added');

    }

    public function updatequalify($id){

        $qualify = Qualification::find($id);

        return view('admin.resumeUpdate', compact('qualify'));

    }

    public function updateducat($id){

        $education = Education::find($id);

        return view('admin.resumeUpdate', compact('education'));

    }

    public function qualify(Request $request, Qualification $qualification){

        $vaildate = $request->validate([
            'year' => 'required| string', 
            'cert' => 'required| string',
             'certLink' => 'string',
              'academy' => 'required| string',
              'description' => 'required| string'
        ]);


        $qualification->create($vaildate);

        return back()->with('success', 'record deleted successfully');

    }

    public function deleteducat($id, Education $education){
        $education::find($id)->delete();

        return back()->with('success', 'record deleted');
    }

    public function deletequalify($id, Qualification $qualification){

        $qualification::find($id)->delete();

        return back()->with('success', 'record deleted');
    }


    public function postservs(Request $request){

        $validate = $request->validate([
            'avater' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string'

        ]);

        $service = new Service;

        $service->icon = $validate['avater'];
        $service->title = $validate['title'];
        $service->description = $validate['description'];

        $service->save();

        return back()->with('success', 'record saved successfully');

    }

    public function deleteservs($id, Service $service){
        $service::find($id)->delete();
        return back()->with('success', 'record deleted successfully');
    }

    public function updateviweservs($id, Service $service){

       $service = $service::find($id);

       return view('admin.serviceUpdate', compact('service'));
    }
    public function updateservs(Request $request, Service $service){
        $service = $service::find($request->id);
        $validate = $request->validate([
            'avater' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string'

        ]);
        $service->icon = $validate['avater'];
        $service->title = $validate['title'];
        $service->description = $validate['description'];

        $service->save();

        return redirect()->route('service')->with('success', 'record updated successfully');
        

    }

    public function updatedu(Request $request, Education $education)
    {
        $education = $education::find($request->id);
        $validate = $request->validate([
            'year' => 'required| string',
            'course' => 'required| string',
            'school' => 'required| string',
            'description' => 'required| string'

        ]);

       $education->year = $validate['year'];
       $education->course = $validate['course'];
        $education->school = $validate['school'];
       $education->description = $validate['description'];

       $education->save();

        return redirect()->route('resume')->with('success', 'record updated successfully');
    }

    public function updatequa(Request $request, Qualification $qualification)
    {
        $qualification = $qualification::find($request->id);
        $validate = $request->validate([
            'year' => 'required| string',
            'cert' => 'required| string',
            'certLink' => 'string',
            'academy' => 'required| string',
            'description' => 'required| string'

        ]);
        $qualification->year = $validate['year'];
        $qualification->cert = $validate['cert'];
        $qualification->certLink = $validate['certLink'];
        $qualification->academy = $validate['academy'];
        $qualification->description = $validate['description'];

        $qualification->save();

        return redirect()->route('resume')->with('success', 'record updated successfully');
    }
}
