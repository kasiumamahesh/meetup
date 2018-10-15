<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Validator;
class messagecontroller extends Controller
{
    //

 public function mailpage(){

if (Session::has('email'))
{
 	
$mail=Session::get('email');


$ins=DB::select('select users.name,admin_tab.email,message_tab.id,message_tab.time,message,subject from message_tab join admin_tab on (admin_tab.email=message_tab.recevier_mail) join users on(users.email=message_tab.sender_mail)  where recevier_mail=? and status=?',[$mail,'active']);

 $outs=DB::select('select admin_tab.name,admin_tab.email,subject,message_tab.id,message_tab.time,message from message_tab join admin_tab on (admin_tab.email=message_tab.sender_mail) where sender_mail=? and status=?',[$mail,'active']);
 $dels=DB::select('select admin_tab.name,admin_tab.email,message_tab.id,subject,message_tab.time,message from message_tab join admin_tab on(admin_tab.email=message_tab.sender_mail or admin_tab.email=message_tab.recevier_mail) where  status=? order by time',['inactive']);

return view('admin.mails',['ins'=>$ins,'outs'=>$outs,"dels"=>$dels]);
}
return redirect('/adminlogin');
 }  
 //To send mail 

 public function sendmail(Request $request)
 {
         
if (Session::has('email'))
{

       $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            
              ]);

       if($validator->fails()){
        

        return redirect()->back()->with('message', 'IT WORKS!');

       }

$email=Session::get('email');

if($request->hasFile('uploads')){

$id = DB::table('message_tab')
                ->orderBy('file_id', 'desc')
                ->first();
    $fileid  =$id->file_id ? ($id->file_id+1) :  1   ;
    //dd($fileid);
DB::table('message_tab')->insert(
    ['sender_mail' =>$email , 'recevier_mail' => $request->email,'subject'=>$request->subject,'message'=>$request->message,"file_id"=>$fileid]
);


$files=$request->file('uploads');
foreach($files as $file)

            {

                $filename=$file->getClientOriginalName();

                $filepath=$file->store('uploads');
                

                $data[] =[ "id"=>$fileid,"file_name"=>$filename,"file_path"=>$filepath];  

           }

            DB::table('message_file_tab')->insert($data);

            return redirect()->back()->with('fileupload',"mail sent sucessfully");

 }
 DB::table('message_tab')->insert(
    ['sender_mail' =>$email , 'recevier_mail' => $request->email,'subject'=>$request->subject,'message'=>$request->message]
);
return redirect()->back()->with('mailsent',"mail sent sucessfully");

}
return redirect('/adminlogin');
}

// read mail
public function readmail($id)
{
if (Session::has('email'))
{
 

$msg=DB::table('message_tab')->where('id',$id)->first();
$file=DB::table('message_file_tab')->where('id',$msg->file_id);
DB::table('message_tab')->where('id',$id)->update(['read_status'=>'read']);

return view('admin.read-mail',['msg'=>$msg,'file'=>$file]);

}
return redirect('/adminlogin');


}
       // sent the records to trash

public function trash($id){

if (Session::has('email'))
{
DB::table('message_tab')->where('id','=',$id)->update(['status'=>'inactive']);

return redirect('/mail');

}
return redirect('/adminlogin');


}
   //delete mail pemenantly

public function delete($id){

  if(Session::has('email')){

$fileid=DB::table('message_tab')->where('id',$id)->first();

DB::table('message_file_tab')->where('id',$fileid->file_id)->delete();
DB::table('message_tab')->where('id',$id)->delete();

return redirect('/mail')->with('msgdelete',"message deleted");

  }

return redirect('/adminlogin');
}

//reply mail 
public function replymail($id){

  if(Session::has('email')){


$umail=DB::table('message_tab')->where('id',$id)->first();

//dd($umail);
return view('admin.reply-mail', ['umail'=>$umail]);


  }
  return redirect('/adminlogin');
}




 }





