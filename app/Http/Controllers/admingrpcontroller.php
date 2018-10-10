<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class admingrpcontroller extends Controller
{
    //

public function grouplist(){

      // $data=DB::select('select group_name,group_tab.id from group_tab  join event_tab on(group_tab.id=event_tab.group_id) join group_cat_tab on(group_cat_tab.group_id=group_tab.id)' );
 //      $grouplist=DB::select('select v ,cnt,GROUP_CONCAT(cat_id)from group_cat_tab join (select group_name,group_tab.id v , count(event_tab.id) cnt from group_tab  join event_tab on(group_tab.id=event_tab.group_id)
 // group by  group_name,group_tab.id) s   on (group_cat_tab.group_id=s.v) group by s.v ,s.cnt');

	$grouplist=DB::select('select gname ,gid ,cnt,GROUP_CONCAT(k.cat_name) from
(select group_id,cat_name,cat_id from group_cat_tab join cat_tab on(cat_tab.id=group_cat_tab.cat_id)) k 
join (select group_name gname,group_tab.id gid , count(event_tab.id) cnt from group_tab  join event_tab on(group_tab.id=event_tab.group_id)
 group by  group_name,group_tab.id) s  
  on (k.group_id=s.gid) group by s.gid ,s.cnt,s.gname');

      dd($grouplist);





}
}
