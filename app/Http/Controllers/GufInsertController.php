<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GufInsertController extends Controller
{
    //

    public function index(Request $request){

       $district=DB::table('geo_set_district')->get();
       $division=DB::table('geo_set_division')->get();
       return view ('/.welcome',compact('district','division'));
     
    
    
        }


    public function store(Request $request){


    dd($request->all());


    }
}