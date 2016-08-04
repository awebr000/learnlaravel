<?php
class TAwalController extends \BaseController {

  public function index(){
    return View::make('TAwal/index');
  }

  public function about(){
    // return 'Hello';
    return View::make('TAwal/about');
  }

  public function guest(){
    return View::make('TAwal/guest');
  }

  public function signup(){
    return View::make('TAwal/signup');
  }

  public function store(){
    // $validator = Validator::make(Input::all(), User::$rules);
    //   if($validator->fails()) return Redirect::back()->withInput()->withErrors($validator->messages());

    $user = new User;
    $user->Name = Input::get('user');
    $user->Email = Input::get('email');
    $user->Password = Hash::make(Input::get('password'));
    $user->save();

    // return "New record has been added in signup table";
    return Redirect::action('TAwalController@signin');

  }

  public function signin(){
    return View::make('TAwal/signin');
  }


  public function post(){
    $users=Input::get('email');
    $pass=Input::get('password');
    $result=User::where('Email', '=', $users)->first();
    if(!$result){
      return "wrong";
    }
    else{
      Session::put('name', $result->Name);
      Session::put('email', $result->Email);
      return Redirect::action('TAwalController@index');
        }
    }

    public function comment(){
      $comment = new Comment;
      $comment->Name = Input::get('name');
      // $comment->Email = Input::get('email');
      $comment->Comment = Input::get('comment');
      $comment->save();

      // return "New record has been added in signup table";
      return Redirect::action('TAwalController@guest');

    }

    public function logout(){
      Session::flush();
      return Redirect::action('TAwalController@index');
    }
}
