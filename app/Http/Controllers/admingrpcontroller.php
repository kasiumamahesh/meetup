<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class admingrpcontroller extends Controller
{
    //list the group names

public function grouplist(){

 if (Session::has('email'))
  {

      // $data=DB::select('select group_name,group_tab.id from group_tab  join event_tab on(group_tab.id=event_tab.group_id) join group_cat_tab on(group_cat_tab.group_id=group_tab.id)' );
 //      $grouplist=DB::select('select v ,cnt,GROUP_CONCAT(cat_id)from group_cat_tab join (select group_name,group_tab.id v , count(event_tab.id) cnt from group_tab  join event_tab on(group_tab.id=event_tab.group_id)
 // group by  group_name,group_tab.id) s   on (group_cat_tab.group_id=s.v) group by s.v ,s.cnt');

	$grouplist=DB::select('select group_type,location,gname,gid,cnt eventcount,ctag,count(members_tab.id) mcount from 
(select group_type,s.location, gname ,gid ,cnt ,GROUP_CONCAT(k.cat_name) ctag from
                                                                       (select group_id,cat_name,cat_id from group_cat_tab join cat_tab on(cat_tab.id=group_cat_tab.cat_id)) k 
                                                                         join (select group_type, group_name gname,group_tab.id gid ,group_tab.location, count(event_tab.id) cnt from group_tab  join event_tab on(group_tab.id=event_tab.group_id)
                                                                        group by  group_type,group_name,group_tab.id,group_tab.location) s  
  on (k.group_id=s.gid) group by  group_type,s.gid ,s.cnt,s.gname,s.location) p left join  members_tab on (p.gid=members_tab.group_id)
group by location,gname,gid,eventcount,ctag,group_type');

	return view('admin.groups',["lists"=>$grouplist]);

}


return redirect('/adminlogin');


}
//Delete the group
public function delgroup($id)
{
if (Session::has('email'))
  {

   DB::table('group_tab')->where('id',$id)->delete();
   return redirect('/glist');


}
return redirect('/adminlogin');

}

//getting the up coming events
public function upeventlist(){

if (Session::has('email')){


$events=DB::select('select * from event_tab where event_date>now() order by event_date');
//dd($events);
return view('admin.upcoming-events',["events"=>$events]);


}
return redirect('/adminlogin');

}

//Delete the upcoming event
public function  delevent($id)
{
if (Session::has('email')){

DB::table('event_tab')->where('id',$id)->delete();
return redirect('/upeventlist');

}
	return redirect('/adminlogin');


} 
//display the all events
public function eventslist(){

if (Session::has('email')){


$events=DB::select('select * from event_tab  order by event_date');
//dd($events);
return view('admin.events-list',["events"=>$events]);


}
return redirect('/adminlogin');

} 
//display the users
public function musers()
{
if (Session::has('email')){

$users=DB::select('select  users.id,email,name,count(group_tab.id) cgrp,count(members_tab.id) cmem, created_at from users  LEFT JOIN group_tab ON(users.id=group_tab.created_by) left join members_tab on (members_tab.user_id=users.id) group by email,name,created_at,users.id order by created_at'); 

return view('admin.users',["users"=>$users]);

}
	return redirect('/adminlogin');

} 
//delete user
public function deluser($id){

if (Session::has('email')){

   DB::table('users')->where('id',$id)->delete();
   return redirect('/users')->with('udelete', 'user deleted');


}
return redirect('/adminlogin');

}




}

