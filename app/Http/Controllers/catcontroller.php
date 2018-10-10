<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catcontroller extends Controller
{
    //
       public function addcat(Request  $request)
       {

       	$validator = Validator::make($request->all(), [
            'catname' => 'required',
             
           ]);

       	if ($validator->fails()){


       		return view('index');

       	}
           
          $created_by=Auth::user()->id;    
 
           $cat =new category ; 
          $cat->cat_name=$request->catname;
          $cat->created_by=$created_by;
          $cat->save();

             return view('catpage');


       }









}
