<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\pdf as ModelsPdf;
// use Barryvdh\DomPDF\PDF;
use App\Models\Slider;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function makepdf(Navbar $navbar, logo $logo)
    {

        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.pdf', compact('navbars', 'logos'));
        // return view('layouts.pdf');



    }

    public function generatePDF(Request $request,ModelsPdf $ModelsPdf)
    {
        // dd($request->wysiwygeditor);
        $data = [
            'title' => 'Welcome to thunder education system ',
            'date' => date('m/d/Y'),
            'data' => $request->wysiwygeditor,
            // 'data' => print_r($_REQUEST)
        ];

        $pdf = PDF::loadView('layouts.myPDF', $data);

        //         $pdf = PDF::loadView('pdf.invoice', $data);

        // $content = $pdf->download()->getOriginalContent();
        // Storage::put('public/csv/name.pdf',$content) ;

        // Storage::put('public/pdf/', $pdf->output());

        // $post = Post::find($id);
        // $pdf = PDF::loadView('post-pdf', compact('post'));
        $path = public_path('storage/pdf/');
        // $fileName =  $post['title'] . '.' . 'pdf' ;
        $fileName = 'allen' . time() . '.pdf';
        $pdf->save($path . '/' . $fileName);
        $ModelsPdf->course = $request->course;
        $ModelsPdf->topic = $request->topic;
        $ModelsPdf->filename = $fileName;
        $ModelsPdf->save();
        return "test";
        // return $pdf->download($fileName);

        // return $pdf->download($fileName);
    }
}
