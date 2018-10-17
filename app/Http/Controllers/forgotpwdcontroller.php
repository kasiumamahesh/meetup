<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Mail;
use DB;
use Hash;
class forgotpwdcontroller extends Controller
{

// display the  forgot password page
public function  forgotpage(){


return view('admin.forgot-password');

}
// send  link to mail to reset password
public function sendlink(Request $request){



   $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            
              ]);
   $users=$request->all();


       if($validator->fails()){
        

        return redirect()->back()->with('errormail', 'enter mail id');

       }


$user=DB::table('admin_tab')->where('email',$request->email)->get();
if(count($user)==1)
{

$token_name=sha1(date('Y-m-d H:i:s'));

//dd($user);
DB::table('forgot_password_tab')->where('email',$request->email)->update(['status'=>1]);
DB::table('forgot_password_tab')->insert(['token_name'=>$token_name,'email'=>$request->email]);
Mail::send('admin.reset-password' ,['token_name'=>$token_name],function ($message) 
        {
            $message->to("kasimahesh34@gmail.com");
        
        });

 return redirect('/adminlogin')->with('gologin','check your email and reset password');

}

 
 return redirect()->back()->with('nomail', 'you are not registerd with us');


}

   //reset page

public  function resetpage($id){

	return view('admin.change-password',['id'=>$id]);
}
   //change password
public  function changepassword(Request $request){

  $validator = Validator::make($request->all(), [
        
          'password' => 'required|min:6'  ,
            'cpassword' => 'required|same:password']);
  if($validator->fails()){


    return redirect()->back()->with('pwderror','must enter password and password match with cofirm password');
  }


$tokens=DB::table('forgot_password_tab')->where([

['token_name','=',$request->token_name],
['status','=',0],

])->get();
//dd($tokens);

if(count($tokens)==1){

   $pwd = Hash::make($request->password);

  $token=$tokens->first();
   DB::table('admin_tab')->where('email',$token->email)->update(['password'=>$request->password]);

 DB::table('forgot_password_tab')->where('token_name',$request->token_name)->update(['status'=>1]);
 return redirect('/adminlogin')->with('loginasnew','login with new credentialts');

}

return redirect()->back()->with('invalidtoken','invalid token or token expired');

 

}




}
