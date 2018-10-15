<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;
use Session;
Use Mail;


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

   $data=DB::table('admin_tab')->where(["email"=>$request->email,"password"=>$request->password])->first() ;
   
     if($data){
      Session::put('id',$data->id);
      Session::put('email',$data->email);
  
    


return  redirect('/admin');

     }
                                
  return redirect()->back();


}

public function logout(){


  Session::flush();
  return redirect('/adminlogin');

}


public function index(){

  if (Session::has('email'))
  {

$cat=DB::table('cat_tab')->get();
$groups=DB::table('group_tab')->get();
//$members=DB::table('members_tab')->get();
$event=DB::select('select id from event_tab where event_date>now()');
$users=DB::table('users')->get();

$catg=count($cat);
$gp=count($groups);
//$mem=count($members);
$user=count($users);
$events=count($event);
return view('admin.index',["catg"=>$catg,"gp"=>$gp,"user"=>$user,"events"=>$events]);
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


       		return redirect('/addcat');
              }


DB::table('cat_tab')->insert(["cat_name"=>$request->catname,"created_by"=>$userid]);


return redirect('/catlist');
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



            return redirect('/catlist');

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


return redirect('/catlist');
  }
  return redirect('/adminlogin');
}
 

}
