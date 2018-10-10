<?php

namespace App\Http\Controllers;


use App\User;

use Socialite;
use Exception;
use Auth;

use Illuminate\Http\Request;

class socialloginscontroller extends Controller
{
    //

   public function fb()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function fbcallback()
    {
      
            $user = Socialite::driver('facebook')->user();

            
            $mail=$user->getName();
        $cnt=DB::table('users')->where('email',$mail)->get();

        if(count($cnt)==1)
        {
          return redirect('/');

        }
            $user1 = new User;
            $user1->name=$user->getName();
            $user1->fb_id=$user->getId();
            $user1->email=$user->getEmail();
            $user1->save();

            // $createdUser = $userModel->addNew($create);
            // Auth::loginUsingId($createdUser->id);


            return redirect('/');
}


//google login

public function googlepage()
{
    return Socialite::driver('google')->redirect();
}

public function gcallback()
{
    
            $user = Socialite::driver('google')->user();
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
           
           
            $newUser->save();

           return view('index');


       

        
       
}



}
