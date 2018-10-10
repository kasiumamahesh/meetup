<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator

class registercontroller extends Controller
{
    //

    public function register(Request $request){


        $validator = Validator::make($request->all(), [
            'fname' => 'required',
             //'mobile' => 'required',
             'email' => 'required|unique:mov_dt_regtab,u_email',
            ' password' => 'required|min:6'  ,
             'password_conformation' => 'required|same:password',
            

        ]);
        $message="you succesfully regiester and login  with  your credentials";

    if ($validator->fails()) {

         return response()->json(["info"=>"registration failed"]);
        }
        Session::put('mes', $message);

     return veiw('index');



    }
}
