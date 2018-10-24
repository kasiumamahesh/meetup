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
  
    public function register(Request $request){


        $validator = Validator::make($request->all(), [
            'username' => 'required',
             //'mobile' => 'required',
             'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed'  ,
             
            ]);
      

        $pwd = Hash::make($request->password);
        $user=new User;

       $user->name=$request->username;
       $user->email=$request->email;
       $user->password=$pwd;
       $user->save();

          $arr=["email"=>$user->email,"password"=>$user->password];

Auth::attempt(["email"=>$user->email,"password"=>$request->password]);



      return redirect('/userpage')->with('regsuccess', 'registered successfully');
      



    }
    public function registerpage(){
      if(Auth::check()){

          $cats=DB::table('cat_tab')->get();
          $locations=DB::table('location_tab')->get();
          return view('create-meetup',["cats"=>$cats, "locations"=>$locations]);

         }

      return redirect('/');

    }
}
