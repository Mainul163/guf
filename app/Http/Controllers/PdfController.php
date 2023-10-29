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
     
        $pdf = \PDF::loadView('guf.pdfFile',[
          
            'gufData'=>$gufData,
          
          
        ]) ->setOptions(['enable_php' => true])
        ->setPaper('A4', 'portrait');

       
        
        return $pdf->download('guf.pdf');

//   $defaultConfig=(new \Mpdf\config\ConfigVariables())->getDefaults();
//   $fontDirs=$defaultConfig['fontDir'];
//   $defaultFontConfig=(new \Mpdf\config\FontVariables())->getDefaults();
//   $fontData=$defaultFontConfig['fontdata'];
//   $path= public_path()."/fonts";
//   $mpdf = new \Mpdf\Mpdf([
   
//     'format' => 'A4',
//     'orientation' => 'P',
//     'fontDir'=>array_merge($fontDirs,[$path]),
//     'fontdata'=>$fontData +[
//       'solaimanlipi'=>[
//         'R'=>'SolaimanLipi_20-04-07.ttf',
//         'useOTL'=>0xFF,
//         'useKashida' => 75, 
//       ],

//     ],
//     'default_font'=>'solaimanlipi'
// ]) ;    
// $mpdf->showImageErrors = true;
// $mpdf->curlAllowUnsafeSslRequests = true;
// $mpdf->debug = true;
//  $mpdf->writeHTML(view('guf.pdfFile',compact('gufData')));
//  $mpdf->Output('test.pdf','D');





    }
}