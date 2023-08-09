<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\Navbar;
use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Navbar $navbar, logo $logo )
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.contact',compact('navbars','logos'));
    }
    public function store(Request $req)
    {
        $inquiry = new Contact();
        $inquiry->name =$req->name;
        $inquiry->mobile_number =$req->mobile_number;
        $inquiry->email =$req->email;
        // $inquiry->message =$req->message;
    
        $inquiry->save();
    
        return redirect('home');
    }
}
