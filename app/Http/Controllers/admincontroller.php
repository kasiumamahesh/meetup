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

//add category view page
public function catview(){

   return view('admin.add-category');

}

//inserting the category and return back category listpage,
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

//category listpage 
  public function catlist()
  {

  $lists=DB::table('cat_tab')->orderBY('created_time','desc')->get();
 // dd($lists);

  return view('admin.categories-list',["lists"=>$lists]);

  }

  //category edit page
  public function editcat($id)
  {

      $cat=DB::table('cat_tab')->where('id',$id)->first();


  return view('admin.edit-category',["cat"=>$cat]);

  }
  //category edited and go to category list page

  public function catedited(Request $request)
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

//category deletepage and go to category page

  public function delcat($id)

  {

     DB::table('cat_tab')
            ->where('id', $id)
            ->delete();


return redirect('/catlist');
  }


}
