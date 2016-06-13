@extends('layouts.master')

@section('content')

<p class="login">Log In!</p>
<form class="form-horizontal login-form">
  	<div class="form-group">
    	<div class="col-md-6 col-md-offset-3">
      		<input type="email" class="form-control input-lg" id="inputEmail3" placeholder="Email">
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-md-6 col-md-offset-3">
      		<input type="password" class="form-control input-lg" id="inputPassword3" placeholder="Password">
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
      		<button type="submit" class="btn btn-info btn-lg">Sign in</button>
    	</div>
  	</div>
</form>

@stop