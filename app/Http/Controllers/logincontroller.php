<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
class logincontroller extends Controller
{
    //


    public function login(Request $request)
    {

      $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
             

        ]);
      if ($validator->fails()) {
         return response()->json(["status"=>"failed"]);
                                }
          $user= $request->only('email', 'password');
       

                   if (Auth::attempt($user)) {

        // validation successful!
        // redirect them to the secue section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        echo 'SUCCESS!';
}
    

             
 echo "failure";

             }

        



    }










