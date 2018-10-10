<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use Validator;


class groupcontroller extends Controller
{


  public function list($id)
  {
    //

$users=DB::table('group_tab')->join('group_cat_tab', 'group_tab.id', '=', 'group_cat_tab.group_id')
                             ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
                             ->where('group_cat_tab.cat_id','=',$id)
                             ->select('group_tab.id','group_tab.group_name',DB::raw('count(members_tab.id) as mcount'))  ->groupBy( 'group_tab.id','group_tab.group_name')->paginate(1);


                             return view('group-listing',["users"=>$users]);

  }
// public function  store(Request $request)
// {


            
 
//        $validator = Validator::make($request->all(), [
//             'city' => 'required',
//              'gname' => 'required',
//               'cat.*' =>  'required',
             
//            ]);

 


       
//         $group_id=1;
// $user=DB::table('group_tab')->insert(['group_name'=>$request->gname,'created_by'=>1]);

       
//      $cat=$request->cat;
    
     
//      foreach ($cat as $val) {
      
//       $arr[]=["group_id"=>$group_id,"cat_id"=>$val];

//        }


// DB::table("group_cat_tab")->insert($arr);
// return redirect('/creategp');

// }
// public function groups()
// {
 
// $groups=DB::select('select id,count(id) from group_tab innerjoin members_tab on (group_tab.id=member_tab.group_id)  ');



// return view('group-listing',["groups"=>$groups]);

// }



public function groupsearch( ){



      //getting the groups

 $users = DB::table('group_tab')
            ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
             ->select('group_tab.id','group_tab.group_name',DB::raw('count(members_tab.id) as mcount'))
             ->groupBy( 'group_tab.id','group_tab.group_name')->paginate(1);
//getting the events
$events=DB::table('event_tab')
            ->join('group_tab', 'group_tab.id', '=', 'event_tab.group_id')
            ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
           
            ->select('group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name',DB::raw('count(members_tab.id) as mcount'))
             ->groupBy( 'group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name')->get();
            // print_r($events);

  //$users=DB::table('group_tab')-> select('id') ->get() ;     

           // dd($users);

          // foreach ($users as $user) {

          //    echo   $user->group_name;
          //    }
return view('group-listing',["users"=>$users]);


             }


// // }
// }

// public function edit(Request $request)

// {

//        $validator = Validator::make($request->all(), [
//              'location' => 'required',
//              'groupname' => 'required',
//               'cat.*' =>  'rquired',
             
//            ]);


//     $data=group_table::where('id',$userid );


//     return view('index');
// }





}