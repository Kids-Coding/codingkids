<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img class="navimg" src="../img/coding-kids.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-links"> <a href="{{{ action('HomeController@showAbout') }}}">About Us</a></li>
        <li class="dropdown nav-links">
          @if(Auth::check())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{{ isset(Auth::user()->studentName) ? Auth::user()->studentName : Auth::user()->username }}}<span class="caret"></span></a>
          @else
            <li class="nav-links"><a href="{{{ action('HomeController@loginForm') }}}">Log In</a></li>
            <li class="nav-links"><a href="{{{ action('HomeController@signupForm') }}}">Sign Up</a></li>
          @endif
          @if(Auth::check())
          <ul class="dropdown-menu dropdown-nav">
              <li><a href="{{{ action('HomeController@account') }}}">Account</a></li>
              <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <script>
        $(document).ready(function() {
          console.log('x');
          $('.dropdown-toggle').dropdown()
      });
    </script>


