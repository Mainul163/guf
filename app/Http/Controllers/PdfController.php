<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
class PdfController extends Controller
{
    //
    public function export_pdf(){

      
    $gufData=DB::table('guf_info')->latest('id')->limit(1)->get();

        $pdf = \PDF::loadView('cghs.pdf',[
          
            'graduatedData'=>$graduatedData,
          
          
        ]) ->setOptions(['enable_php' => true])
        ->setPaper('A4', 'portrait');

       
        // $pdf = PDF::loadView('communityDetails.pdf', compact('commun_details','communityDetailsTitle'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('cghs.pdf');



       

    }
}