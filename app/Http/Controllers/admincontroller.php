<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;

class admincontroller extends Controller
{
    //
//dahsboard page
public function index(){

$cat=DB::table('cat_tab')->get();
$groups=DB::table('group_tab')->get();
//$members=DB::table('members_tab')->get();
$event=DB::select('select id from event_tab where event_time>now()');
$users=DB::table('users')->get();

$catg=count($cat);
$gp=count($groups);
//$mem=count($members);
$user=count($users);
$events=count($event);
return view('admin.index',["catg"=>$catg,"gp"=>$gp,"user"=>$user,"events"=>$events]);

}

//category view page
public function catview(){

   return view('admin.add-category');

}


public function catstore(Request $request){

$userid='123';
	$validator = Validator::make($request->all(), [
            'catname' => 'required',
             
           ]);

       	if ($validator->fails()){


       		return redirect('/addcat');
              }


DB::table('cat_tab')->insert(["cat_name"=>$request->catname,"created_by"=>$userid]);


return redirect('/catlist');
}



}
