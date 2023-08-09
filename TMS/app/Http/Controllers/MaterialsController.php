<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\Material;
use App\Models\Navbar;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MaterialsController extends Controller
{
    // public function __construct(Navbar $navbar, logo $logo , Material $material) {
    //     dd($AuthUser);
    //     dd(Auth::user());
    // }
    public function index(Navbar $navbar, logo $logo, Material $material)
    {

        $AuthUser = Auth::user();
        // dd($AuthUser->role_id);
        if ($AuthUser != null) {

            if ($AuthUser->role_id == 1) {
                return redirect("materialview");
            } else {
                return redirect("/login");
            }
        } else {
            return redirect("/login");
        }

        return view('layouts.materials', compact('navbars', 'logos', 'materials'));
    }
    public function materialview(Navbar $navbar, logo $logo, Material $material)
    {

        $AuthUser = Auth::user();
        // dd($AuthUser->role_id);

        if ($AuthUser != null) {
            $navbars = $navbar::all();
            $logos = $logo::all();
            $materials = $material::all();
            return view('layouts.materials', compact('navbars', 'logos', 'materials'));
        } else {
            return redirect("/");
        }
    }

    // public function download()
    // {
    //     try{
    //         $myfile= storage_path("pdf");
    //     }
    // }
}
