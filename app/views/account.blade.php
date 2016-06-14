@extends('layouts.master')

@section('content')

<p class="hello-account">Hello, {{{ isset(Auth::user()->studentName) ? Auth::user()->studentName : Auth::user()->username }}} </p>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 id="HTML_progress">HTML Progress</h3>
		<div class="progress">
	  		<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
	    		60%
	  		</div>
		</div>
    <h3 id="CSS_progress">CSS Progress</h3>
    <div class="progress">
  		<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
    		20%
  		</div>
	</div>
    <h3 id="PHP_progress">PHP Progress</h3>
    <div class="progress">
  		<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    		100%
  		</div>
	</div>
       
    </div>
</div>

@stop
