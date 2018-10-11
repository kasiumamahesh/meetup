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
               'mobile' => 'required',
             'email' => 'required|unique:admin_tab,email,'.$id,
                        
             'password' => 'required|min:6'  ,
             'photo'=>'image'
             
            ]);
            if($validator->fails()){  
            	
  	  return redirect('/editprofile');
           }

if ($request->hasFile('photo')) {

 	$path=$request->file('photo')->store('profile');

     DB::update('update admin_tab set email=?,password=?,name=?,mobileno=?,photo=? where id=?',[$request->email,$request->password,$request->username,$request->mobile,$path,$id]  );


return redirect('/profile');
    
 }

   else{
     
 	DB::update('update admin_tab set email=?,password=?,name=?,mobileno=? where id=?',[$request->email,$request->password,$request->username,$request->mobile,$id]  );
 	  return redirect('/profile');

 }
 
            

                
        }return redirect('/adminlogin');
    }





}
