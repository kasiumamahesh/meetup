<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;
use Session;
Use Mail;
use Cookie;


class admincontroller extends Controller
{
    //
//dahsboard page

public function logview(){

  //if already loggedin
  if (Session::has('email'))
{

  return redirect('/admin');
}

  return view('admin.login');
}
public function check(Request $request)
{


$validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
             

        ]);
      if ($validator->fails()) {
         return  redirect()->back();
       }

 $cookie1=cookie('dummy', 'dummy', 1);
 $cookie2=cookie('dummy2', 'dummy2', 1);

   $data=DB::table('admin_tab')->where(["email"=>$request->email,"password"=>$request->password])->first() ;
   
     if($data){
      Session::put('id',$data->id);
      Session::put('email',$data->email);

  if(Cookie::has('user') and Cookie::has('password')){
    if($request->has('remember')){
      
    $cookie1 = cookie('user', $data->email, 10000);
  $cookie2 = cookie('password',$request->password , 10000);
  return  redirect('/admin')->withCookie($cookie1)->withCookie($cookie2);

  }

return redirect('/admin');

  }
    if($request->has('remember')){
      //Cookie::queue('user', $data->email, 999999999);
      //Cookie::queue('password', $request->password, 999999999);
      $cookie1 = cookie('user', $data->email, 10000);
  $cookie2 = cookie('password',$request->password , 10000);
  }
  return  redirect('/admin')->withCookie($cookie1)->withCookie($cookie2);
  }
return redirect()->back()->with('wrongdata',"username or password  is invalid");
  
}




     
//log out page
public function logout(){


  Session::flush();
  return redirect('/adminlogin');

}
// index page

public function index(){

  if (Session::has('email'))
  {

$cat=DB::table('cat_tab')->get();
$cat5=DB::table('cat_tab')->orderby('created_time')->take(5)->get();
$userid=Session::get('id');

                $profile= DB::table('admin_tab')->where('id',$userid)->first();
$mail=Session::get('email');


$ins=DB::select('select  users.name,admin_tab.email,message_tab.id,message_tab.time,message,users.photo,subject from message_tab join admin_tab on (admin_tab.email=message_tab.recevier_mail) join users on(users.email=message_tab.sender_mail)  where recevier_mail=? and status=? and read_status=? order by time limit 5',[$mail,'active','unread']);

$groups=DB::table('group_tab')->get();
//$members=DB::table('members_tab')->get();
$event=DB::select('select id from event_tab where event_date>now()');
$users=DB::table('users')->get();

$catg=count($cat);
$gp=count($groups);
//$mem=count($members);
$user=count($users);
$events=count($event);
return view('admin.index',["catg"=>$catg,"gp"=>$gp,"user"=>$user,"events"=>$events,"cat5"=>$cat5,'profile'=>$profile,'ins'=>$ins]);
}
return redirect('/adminlogin');

}

//add category view page
public function catview(){
  if (Session::has('email'))
{
   return view('admin.add-category');
 }

return redirect('/adminlogin');
}

//inserting the category and return back category listpage,
public function catstore(Request $request){
  if (Session::has('email'))
{

$userid=Session::get('id');
	$validator = Validator::make($request->all(), [
            'catname' => 'required',
             
           ]);

       	if ($validator->fails()){


       		return redirect()->back()->with('catg','category required');
              }


DB::table('cat_tab')->insert(["cat_name"=>$request->catname,"created_by"=>$userid]);


return redirect('/catlist')->with('addcat', 'new category added');
}
return redirect('/adminlogin');
}

//category listpage 
  public function catlist()
  {
 if (Session::has('email'))
{
  $lists=DB::table('cat_tab')->orderBY('created_time','desc')->get();
 // dd($lists);

  return view('admin.categories-list',["lists"=>$lists]);
}
return redirect('/adminlogin');

  }

  //category edit page
  public function editcat($id)
  {
if (Session::has('email'))
{

      $cat=DB::table('cat_tab')->where('id',$id)->first();


  return view('admin.edit-category',["cat"=>$cat]);
}
return redirect('/adminlogin');

  }
  //category edited and go to category list page

  public function catedited(Request $request)
  {
    if (Session::has('email'))
{
         $validator = Validator::make($request->all(), [
            'cat' => 'required',
             
           ]);

       	if ($validator->fails()){


       		return redirect()->back();
              }

        DB::table('cat_tab')
            ->where('id', $request->id)
            ->update(['cat_name' => $request->cat]);



            return redirect('/catlist')->with('editcat','category edited');

  }
  return redirect('/adminlogin');

}
//category deletepage and go to category page

  public function delcat($id)

  {
    if (Session::has('email'))
{

     DB::table('cat_tab')
            ->where('id', $id)
            ->delete();


return redirect('/catlist')->with('deletecat','category deleted');
  }
  return redirect('/adminlogin');
}
 // change password page
 public function passwordpage()

  {
    if (Session::has('email'))
{
 return view('admin.change-admin-password');


  }
  return redirect('/adminlogin');
}
// update password
public function updatepassword(Request $request)

  {
    if (Session::has('email'))
{
  $messages = [
    'opassword.required' => ' old password should not be empty',
     'password.required' => ' password should not be empty',
];


  $validator = Validator::make($request->all(), [
          'opassword'=>'required',
        
          'password' => 'required|min:6|confirmed'  ,
            ],$messages);
  if($validator->fails()){

   return redirect()->back()->with('pwderrors',$validator->errors());
      

  }

 $mail=Session::get('email');
 $row=DB::table('admin_tab')->where('email',$mail)->first();
 if(!($row->password==$request->opassword)){

return redirect()->back()->with('oldpwd-error','you are entering wrong old password');

 }
 DB::table('admin_tab')->where('email',$mail)->update(['password'=>$request->password]);

 return redirect('/admin')->with('success-password','password successfully changed');

  }
  return redirect('/adminlogin');
}
}
