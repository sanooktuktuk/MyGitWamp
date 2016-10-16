<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', function(){
  return view('pages.home', ['name' => "Sanooktuktuk"]);
});

Route::get('contact', function(){
    return view('pages.contact');
});

Route::get('user', function(){
  //$user = DB::table('users')->where('id', '1')->get();
  //remember, our table name is users and here, we're looking for the id of 1
  $specificUser = DB::table('users')->find(1);
  dd($specificUser);
});

Route::get('create', function(){
  DB::table('users')->insert([
    [
      'name' => 'Potjamarn',
      'email' => 'aieclub@gmail.com',
      'location' => 'Bangkok'
    ],
    [
      'name' => 'Coco',
      'email' => 'cococat@gmail.com',
      'location' => 'Fairfax'
    ]
  ]);
  return 'user was created';
});

Route::get('edit', function () {
/*  DB::table('users')->where('id', 7)->update([
    'name' => 'Coco Cat',
    'email' => 'cococat@gmail.com',
    'location' => 'Ridge Wood'
  ]);
    return 'user was edited';*/

    //<> mean not equal ie. !=
    DB::table('users')->where('location', '<>', 'Fairfax')->update([
        'location' => 'Fairfax'
      ]);
    return 'user was edited';
});

Route::get('delete', function(){

  //DB::table('users')->where('id', 6)->delete();

  //truncate will complete wipe the table and start ids from 1 again when you insert
  DB::table('users')->truncate();
  return 'user was deleted';
});

/*Route::get('mail', function(){

  Mail::raw('hello this is a test', function($message){
    $message->subject('testing')
    ->to('aie@mailcom')
    ->from('me@mail.com');
  });

});*/


Route::get('mail/view', function (){
  Mail::send('emails.emailview', ['name' => "Sanooktuktuk"], function ($message){
    $message->subject('testing')
            ->to('aieclub@mail.com')
            ->from('me@mail.com');
    });
    return 'email sent';
});

//session persisting
Route::get('session', function(){
  Session::put('exampleSession', 'my saved shit');

  return 'session stored';
});

Route::get('session/read', function(){
  var_dump(Session::get('exampleSession', 'default value'));
});



//Route::get('/', 'HomeController@home');

//routing with the controller method instead of automatica routing as above
//Route::controller('contact', 'Pages\ContactController');


//////////////////////////////////////////////////
#Route::get('users/{name}', function($name){
  //just passing name to $name...nothing special here
  #return $name;
#}
#);

#Route::get('optionalparamenter/{name?}', function($name = "default name"){

  //if just type in opotionalparameter for the uri, default name is returned.  if type in optionalparament/whatever, then whatever is returned
  #return $name;
#});
