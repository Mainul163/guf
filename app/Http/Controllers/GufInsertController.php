<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GufInsertController extends Controller
{
    //

    public function index(){

    $gufData=DB::table('guf_info')->latest('id')->limit(1)->get();
    return view('pdf.pdf',compact('gufData'));
             
    
        }


    public function store(Request $request){
        $newImageName =time().'-'.$request->name.'.'.$request->img->extension();
        $status='pending';
      $request->img->move(public_path('images'),$newImageName);

      $data=array(
        "name"=>$request->name,
        "national_id"=>$request->national_id,
        "mobile"=>$request->mobile,
        "division"=>$request->division,
        "district"=>$request->district,
        "thana"=>$request->thana,
         "victim_name"=>$request->victim_Name,
         "victim_national_id"=>$request->victim_national_id,
         "victim_mobile"=>$request->victim_mobile,
         "victim_division"=>$request->victim_division,
         "victim_district"=>$request->victim_district,
         "victim_thana"=>$request->victim_thana,
         "message"=>$request->message,
         "required_money"=>$request->required_money,
         "time"=>$request->time,
         "img"=> $newImageName,
       
 


      );
       
         DB::table('guf_info')->insert($data);
         return redirect()->route('guf');
    }
}