<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// use Laravel\Sanctum\Sanctum;


class FacultyController extends Controller
{
    public function index()
    {
        // dd("Called");
        return view('faculty.welcome');
    }
    public function material()
    {
        return view('faculty.material');
    }
    public function upload()
    {
        return view('faculty.upload');
    }
    public function uploadmaterial(Request $request)
    {
        $file = $request->hasFile('pdf');
        if($file)
        {
            $newfile = $request->file('pdf');
            $file_path = $newfile->store('pdf');
            // dd(asset('/storage/'.$file_path));
            Material::create([
                'course' => $request->course,
                'topic' => $request->topic,
                'pdf' =>$file_path
            ]);
            // dd(asset('/storage/'.$file_path));
        }
    }
}
