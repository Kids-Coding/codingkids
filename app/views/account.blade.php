@extends('layouts.master')

@section('content')

<p class="hello-account">Hello, {{{ isset(Auth::user()->studentName) ? Auth::user()->studentName : Auth::user()->username }}} </p>

<div class="row">
	<div class="col-xs-6 col-xs-offset-1">
		<h3 id="HTML_progress">HTML Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				{{-- {{ count($htmlCompleteNumber) * 100 / $htmlLessons }} --}}
			</div>
		</div>
		<h3 id="CSS_progress">CSS Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">20%</div>
		</div>
		<h3 id="PHP_progress">PHP Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
		</div>
	</div>
	<div class="col-xs-offset-2 col-xs-3">
		<div class="account-side">
			<div><a href="/lessons">Go To Lessons</a></div>
			<div><a href="#">Delete Account</a></div>
		</div>
	</div>
</div>

@stop