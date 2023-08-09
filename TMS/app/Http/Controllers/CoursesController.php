<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\Navbar;
use App\Models\Slider;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(Navbar $navbar, logo $logo )
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.courses',compact('navbars','logos'));
    }
}
