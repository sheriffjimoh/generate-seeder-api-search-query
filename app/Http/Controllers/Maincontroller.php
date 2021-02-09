<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use Validator;
use DB;
class Maincontroller extends Controller
{
    //



  // main controller 

   public function records($value='')
   {

 
   	$data = Record::orderby('id', 'DESC')->get();
   
    return view('welcome')->with('data', $data);
   }

   public function search_item(Request $resquest)
   {

    if (!empty($resquest->input('search'))  ) {

      $search_query = $resquest->input('search');

      $data =  DB::select( DB::raw("SELECT *  FROM records  where firstname LIKE '%$search_query%' OR  lastname LIKE '%$search_query%' OR email LIKE '%$search_query%' OR phone LIKE '%$search_query%' ORDER BY id desc "));

    
    return view('search_result')->with('data', $data);
   
    }





      
   }









}
