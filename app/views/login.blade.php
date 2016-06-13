@extends('layouts.master')

@section('content')

<p class="login">Log In!</p>
<form class="form-horizontal login-form">
  	<div class="form-group">
    	<div class="col-md-6 col-md-offset-3">
      		<input type="username" class="form-control input-lg" id="username" placeholder="Username">
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-md-6 col-md-offset-3">
      		<input type="password" class="form-control input-lg" id="password" placeholder="Password">
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
      		<button type="submit" class="btn btn-info btn-lg">Sign in</button>
    	</div>
  	</div>
</form>

@stop