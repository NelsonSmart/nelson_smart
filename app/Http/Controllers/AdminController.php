<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stack;

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
        return view('admin.services_page');
    }
    public function resmepag(){
        return view('admin.resume_page');
    }
    public function contpag(){
        return view('admin.contact_page');
    }
    public function projtpag(){
        return view('admin.projects_page');
    }
}
