<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
        <img class="navimg" src="../img/coding-kids.png">
      </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
        <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
        <li><a href="{{{ action('HomeController@account') }}}">Account</a></li>
      @else
        <li><a href="{{{ action('HomeController@loginForm') }}}">Log In</a></li>
        <li><a href="{{{ action('HomeController@signupForm') }}}">Sign Up</a></li>
      @endif
    </ul>
  </div>
</nav>



