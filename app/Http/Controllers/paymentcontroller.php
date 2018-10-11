<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class paymentcontroller extends Controller
{
    //payment list

public function paymentlist(){
if (Session::has('email')){
$payments=DB::select('select name,payments_tab.id,email,group_name,amount ,date from payments_tab join users on (users.id=payments_tab.payment_by) join group_tab on (group_tab.id=payments_tab.group_id)');


return view('admin.payment-list',["payments"=>$payments]);



}
return redirect('/adminlogin');

}
//payment delete
public function delpayment($id)

  {
    if (Session::has('email'))
{

     DB::table('payments_tab')
            ->where('id', $id)
            ->delete();


return redirect('/paylist');
  }
  return redirect('/adminlogin');
}



}
