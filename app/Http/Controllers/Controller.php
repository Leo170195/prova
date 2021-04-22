<?php

namespace App\Http\Controllers;


use App\Models\Comment;

use PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome() {
        $comments = Comment::all();
        return view('welcome', compact('comments'));
    }

    public function index() {
        return view('index');
    }

    public function pdf() {
        return view('pdf');
    }

    public function downloadPdf(){
        // $data = [
        //     'title' => 'Leo',
        //     'heading' => 'Hello from Coding Driver',
        //     ];
        // $dat = [
        //     'name' => 'Luca',
        //     'surname' => 'Giurato',
        //     ];
        // $pdf = PDF::loadView('view-pdf', $data, $dat);
        // return $pdf->download('cazzola.pdf');
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadView('view-pdf');
        // return $pdf->stream();


        // merge
            
        $pdfmerge = new \Jurosh\PDFMerge\PDFMerger;

        // add as many pdfs as you want
        $pdfmerge->addPDF('pdf/uno.pdf')
        ->addPDF('pdf/due.pdf');

        // call merge, output format `file`
        $pdfmerge->merge('file', 'pdf/tre.pdf');
        return redirect('/pdf/tre.pdf');
    }
    
}
