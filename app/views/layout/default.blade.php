<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{$css=asset('style.css');}}" type="text/css">
    @yield('header')
  </head>

  <body>
    <div id="head">
      <a href="#"><img src="{{ $url=asset('img/BBT.png'); }}" id="logo"/></a>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>{{ link_to("/TAwal", "Home"); }}</li>
            <li>{{link_to("/TAwal/about", "About");}}</li>
          <li>{{link_to("/TAwal/guest","Guestbook");}}</li>

          <?php
          if(! Session::has('name')){?>
          <li>{{link_to("/TAwal/signin", "Login")}}</li>
        <?php
      }
    else{
      ?>
          <li>{{link_to("/TAwal/logout", "Logout")}}<li>
    <?php
        }?>
        </ul>
      </div>
    </div>
      @yield('content')



      @yield('footer')
  </body>

</html>
