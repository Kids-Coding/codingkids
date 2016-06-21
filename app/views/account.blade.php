@extends('layouts.master')

@section('content')

<p class="titles">Hello, {{{ isset(Auth::user()->studentName) ? Auth::user()->studentName : Auth::user()->username }}} </p>

<div class="row">
	<div class="col-xs-6 col-xs-offset-1">
		<h3 id="HTML_progress" class="progbar">HTML Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%
				{{-- {{ count($htmlCompleteNumber) * 100 / $htmlLessons }} --}}
			</div>
		</div>
		<h3 id="CSS_progress" class="progbar">CSS Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="66.6" aria-valuemin="0" aria-valuemax="100" style="width: 66.6%;">66%</div>
		</div>
		<div class="bottomprog">
			<h3 id="PHP_progress" class="progbar">PHP Progress</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="33.3" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;">33%</div>
			</div>
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