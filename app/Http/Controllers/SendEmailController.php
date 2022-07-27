<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Education;
use App\Models\Enquiry;
use App\Models\Qualification;
use App\Models\Service;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('index', [
            'services' =>Service::all(),
            'educations' => Education::all(),
            'qualifications' => Qualification::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     
    public function send(Request $request){
        $this->validate($request, [
                  'name'     =>  'required',
                  'email'  =>  'required|email',
                  'message' =>  'required'
                 ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email'     =>   $request->email
        );
        
       // $enquiry = new Enquiry() ;

       // $enquiry->name  =   $request->name;
      //  $enquiry->message   = $request->message;
      //  $enquiry->email   =   $request->email ;
      //  $enquiry->save();
        
      //  if($enquiry->save() == true){  
            
            //
            
       // }else{
       //     echo "error";
       //     return redirect()->back();
      //  }
        
            Mail::to('nelsonsopuruchukwu.mail@gmail.com')->send(new ContactMail($data));
            return redirect() ->route('index')->with('success', 'Thanks for contacting us!');

     
    }
    
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
