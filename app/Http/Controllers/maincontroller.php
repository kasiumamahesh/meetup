<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class maincontroller extends Controller
{
    //

public function indexpage(){


	$catgs=DB::table('cat_tab')->get();
	//
	$numcatgs=DB::table('cat_tab')
	                ->leftjoin('group_cat_tab','group_cat_tab.cat_id','=','cat_tab.id')
                    ->select('cat_tab.cat_name','cat_tab.id',DB::raw('count(group_cat_tab.group_id) as gcount') )->groupBy('cat_tab.cat_name','cat_tab.id')->get();


                    

 	$users = DB::table('group_tab')
             ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
             ->select('group_tab.id','group_tab.group_name',DB::raw('count(members_tab.id) as mcount'))
              ->groupBy( 'group_tab.id','group_tab.group_name')->paginate(1);

 $events=DB::table('event_tab')
             ->join('group_tab', 'group_tab.id', '=', 'event_tab.group_id')
             ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
           ->whereNotIn('event_tab.event_name',['music','film'])
            ->select('group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name','event_tab.location',DB::raw('count(members_tab.id) as mcount'))
             ->groupBy( 'group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name','event_tab.location')->get();

//music events

 $mevents=DB::table('event_tab')
             ->join('group_tab', 'group_tab.id', '=', 'event_tab.group_id')
             ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
           ->where('event_tab.event_name','=', 'music')
            ->select('group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name','event_tab.location',DB::raw('count(members_tab.id) as mcount'))
             ->groupBy( 'group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name','event_tab.location')->get();

             //film events
             $fevents=DB::table('event_tab')
             ->join('group_tab', 'group_tab.id', '=', 'event_tab.group_id')
             ->join('members_tab', 'group_tab.id', '=', 'members_tab.group_id')
           ->where('event_tab.event_name','=', 'film')
            ->select('group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name','event_tab.location',DB::raw('count(members_tab.id) as mcount'))
             ->groupBy( 'group_tab.id','group_tab.group_name','event_tab.id','event_tab.event_name','event_tab.location')->get();



return view('index',["events"=>$events,"numcatgs"=>$numcatgs]);


}





}



