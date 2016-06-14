@extends('layouts.master')

@section('content')


<p class="login">Log In!</p>
{{ Form::open(array('action' => 'HomeController@doLogin')) }}
  	<div class="form-group">
    	<div class="col-md-6 col-md-offset-3 login-input">
      		{{ Form::text('username', null, ['class' => 'form-control input-lg' , 'placeholder' => 'Username' ]) }}
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-md-6 col-md-offset-3 login-input">
      		{{ Form::password('password', ['class' => 'form-control input-lg' , 'placeholder' => 'Password' ]) }}
    	</div>
  	</div>
  	<div class="form-group login-form">
    	<div class="col-md-6 col-md-offset-3">
      		{{ Form::submit('Sign In', ['class' => 'btn btn-info btn-lg']); }}
    	</div>
  	</div>
{{ Form::close() }}

@stop