<?php
Route::get('TAwal', 'TAwalController@index');
//
Route::get('TAwal/about', 'TAwalController@about');

Route::get('TAwal/guest', 'TAwalController@guest');

Route::post('TAwal/guest', 'TAwalController@comment');

Route::get('TAwal/signup', 'TAwalController@signup');

Route::post('TAwal', 'TAwalController@store');

Route::get('TAwal/signin', 'TAwalController@signin');

Route::post('TAwal/signin', 'TAwalController@post');

Route::get('TAwal/logout', 'TAwalController@logout');



































// Route::get('/', function()
// {
//   // $users = User::all();
//   // $user = new User;
//   // $user->username = 'NewUser';
//   // $user->password = Hash::make('newpassword');
//   // $user->save();
//   // $user = User::find(3);
//   // $user->username = 'UpdatedName';
//   // $user->save();
//   // $user = User::find(5);
//   // $user->delete();
//
//   return User::orderBy('Username', 'desc')->take(2)->get();
// });
// Route::get('users', 'UsersController@index');
// Route::get('users/{username}', 'UsersController@show');


// Route::get('users', function(){
//   $users = Comment::all();
//   return $users;
//   // $test=DB::table('comment')->get();
//   //
//   // return $test;
//
//   // return View::make('users/index', ['users' => $users]);
// });

// Route::get('users/{username}', function($username){
//   $user = User::whereUsername($username)->first();
//
//   return View::make('users/show', ['user' => $user]);
// });




























/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', 'PagesController@home');
//
// Route::get('/About', 'PagesController@about');

// Route::get('/', function(){
  // $users = DB::table('signup')->find(1);
  // $signup = new User;
  // $signup->Name = 'newUser';
  // $signup->Email= 'new@google.co.id';
  // $signup->Password = Hash::make('Password');
  // $signup->save();

  // User::create([
  //     "Name" => 'another2',
  //     "Email" => '2@google.com',
  //     "Password" => Hash::make('54321')
  //
  //
  // ]);

//   $signup = User::find(3);
//   $signup->delete();
//   // return $users->Name;
//
//
//
//   return User::all();
//
// });
// Route::get('/', function(){
//   $name="Vroh?";
//   return View::make('hello')->with('name', $name);
// });
