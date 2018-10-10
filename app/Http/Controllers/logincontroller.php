<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use validator;
class logincontroller extends Controller
{
    //


public function login(Request $request){



    public function login(Request $request)
    {

      $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
             

        ]);
      if ($validator->fails()) {
         return response()->json(["status"=>"failed"]);

          $user= $request->only('username', 'password');
       

            if (Auth::attempt($user)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        echo 'SUCCESS!';

    } 

             
 echo "failure";

             }

        



    }


}






}
