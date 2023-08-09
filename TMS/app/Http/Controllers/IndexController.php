<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Navbar $navbar, logo $logo , Slider $slider)
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        $sliders = $slider::all();
        return view('layouts.index',compact('navbars','logos','sliders'));
    }
    public function inquiry(Request $req)
    {
        $inquiry = new Inquiry;
        $inquiry->name =$req->name;
        $inquiry->mobile_number =$req->mobile_number;
        $inquiry->mode_of_education =$req->mode_of_education;
        $inquiry->course =$req->course;
        // $inquiry->message =$req->message;

        $inquiry->save();

            if($inquiry->course=="Jee")
            {
                return redirect('course');
            }
            else{
                return redirect('contact');
            }
    }
}
