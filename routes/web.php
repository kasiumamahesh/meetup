<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//social logins

Route::get('/fb','socialloginscontroller@fb');

Route::get('/fbcallback','socialloginscontroller@fbcallback');

Route::get('/pagegoogle','socialloginscontroller@googlepage');
Route::get('/gcallback','socialloginscontroller@gcallback');
//social logins end

//indexpage 
Route::get('/', 'maincontroller@indexpage');

//catgeory and group search

Route::get('/list/{id}','groupcontroller@list' );

Route::get('/test','logincontroller@test');
Route::post('/register','registercontroller@register');
Route::get('/userpage',function(){

	return view('create-meetup');
});
Route::post('/grpcreate','groupcontroller@store');
Route::get('/groups','groupcontroller@groupsearch');


// Route::get('groups', function () {
//     return view('group-listing');
// });

Route::get('blogs', function () {
    return view('index');
});
Route::get('bestdeals', function () {
    return view('index');
});
Route::get('contact', function () {
    return view('contact');
});
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('logins', 'logincontroller@login');



//admin control panel

Route::get('/admin', 'admincontroller@index');
Route::get('/addcat', 'admincontroller@catview' );
Route::post('/catstore', 'admincontroller@catstore' );
Route::get('/catlist', 'admincontroller@catlist' );
Route::post('/catedited', 'admincontroller@catedited' );
Route::get('/editcat/{id}', 'admincontroller@editcat' );
Route::get('/delcat/{id}',  'admincontroller@delcat' );

// related to groups in admin panel


Route::get('/adminlogin', 'admincontroller@logview');
Route::post('/check', 'admincontroller@check');
Route::get('/logout','admincontroller@logout');


Route::get('/glist',  'admingrpcontroller@grouplist' );
Route::get('/delgroup/{id}',  'admingrpcontroller@delgroup' );
Route::get('/upeventlist','admingrpcontroller@upeventlist');
Route::get('/delevent/{id}','admingrpcontroller@delevent');
Route::get('/eventslist','admingrpcontroller@eventslist');
Route::get('/users','admingrpcontroller@musers');
Route::get('/deluser/{id}','admingrpcontroller@deluser');

Route::get('/profile','profilecontroller@pview');
Route::get('/editprofile','profilecontroller@editprofile');
Route::post('/update','profilecontroller@profileupdate');

 //payments
Route::get('/paylist','paymentcontroller@paymentlist');
Route::get('/delpayment/{id}','paymentcontroller@delpayment');

 //mail routes
Route::get('/mail','messagecontroller@mailpage');
Route::post('/sendmail','messagecontroller@sendmail');
Route::get('/readmail/{id}','messagecontroller@readmail');
Route::get('/trash/{id}','messagecontroller@trash');
Route::get('/pdelmsg/{id}','messagecontroller@delete');


















Route::get('/email',function(){



 Mail::raw('welcomeejeje' ,function ($message) 
        {
            $message->to("kasiphp5@gmail.com");
        
        });


});