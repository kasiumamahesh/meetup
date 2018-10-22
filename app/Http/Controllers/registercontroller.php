<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Auth;

use  App\User;
use DB;
use Session;
class registercontroller extends Controller
{
    //

  public function testscript(){

      
$message=DB::table('message_tab')->get();

return view('admin.test',["message"=>$message]);

  }

    public function register(Request $request){


        // $validator = Validator::make($request->all(), [
        //     'username' => 'required',
        //      //'mobile' => 'required',
        //      'email' => 'required|unique:users,email',
        //     'password' => 'required|min:6'  ,
        //      'confirm' => 'required|same:password',
        //     ]);
        $message="you succesfully regiester and login  with  your credentials";

    // if ($validator->fails()) {

    //      return response()->json(["info"=>"registration failed",$validator->errors()]);
    //     }
        //Session::put('mes', $message);
        $pwd = Hash::make($request->password);
        $user=new User;

       $user->name=$request->username;
       $user->email=$request->email;
       $user->password=$pwd;
       $user->save();

          $arr=["email"=>$user->email,"password"=>$user->password];

    
   //Auth::login($user);
          if(Auth::attempt($arr))
      
{

    echo "sucess";

}


      return redirect('/userpage');
      



    }
}
