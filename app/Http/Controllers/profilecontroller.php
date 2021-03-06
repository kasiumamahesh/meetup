<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Validator;


class profilecontroller extends Controller
{
    //


  public function pview()
    {
        if (Session::has('email')){
        	$id=Session::get('id');

                $user= DB::table('admin_tab')->where('id',$id)->first();

               return view('admin.profile',["user"=>$user]);

                
        }return redirect('/adminlogin');
    }

//Edit profile
    public function editprofile()
    {
        if (Session::has('email')){
        	$id=Session::get('id');

                $user= DB::table('admin_tab')->where('id',$id)->first();

               return view('admin.edit-profile',["user"=>$user]);

                
        }return redirect('/adminlogin');
    }
//update profile
    public function profileupdate(Request $request)
    {
       if (Session::has('email')){

      $id=Session::get('id');
        	
        	$validator = Validator::make($request->all(), [
             'username' => 'required',
               'mobile' => 'required|numeric',
             'email' => 'required|unique:admin_tab,email,'.$id,
                        
             // 'password' => 'required|min:6'  ,
             'photo'=>'image'
             
            ]);
            if($validator->fails()){  
            	
  	  return redirect('/editprofile')->with('profileerror','you must fill requiered ');
           }
          // $id=Session::get('id');
 //$edituser="user has been updated successfully";
if ($request->hasFile('photo')) {

 	$path=$request->file('photo')->store('profile');

     DB::update('update admin_tab set email=?,name=?,mobileno=?,photo=?,location=? where id=?',[$request->email,$request->username,$request->mobile,$path,$request->location,$id]  );
     

Session::forget('photo');
Session::put('photo', $path);
                //$user= DB::table('admin_tab')->where('id',$id)->first();


return redirect('/profile')->with('psuccess', 'profile changed successfully'); 
     //return view('admin.profile',['user'=>$user,'edituser'=>$edituser]);
    
 }

   else{
     
 	DB::update('update admin_tab set email=?,name=?,mobileno=?,location=? where id=?',[$request->email,$request->username,$request->mobile,$request->location,$id]  );
 	  return redirect('/profile')->with('psuccess','profile changed successfully');
 

 }
 
            

                
        }return redirect('/adminlogin');
    }





}
