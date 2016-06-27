@extends('layouts.master')

@section('content')

<p class="titles">Hello, {{{ isset(Auth::user()->studentName) ? Auth::user()->studentName : Auth::user()->username }}} </p>

<div class="row">
	<div class="col-md-6 col-md-offset-1 col-xs-8 col-xs-offset-1">
		<h3 id="HTML_progress" class="progbar">HTML Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $htmlCompletePercent }}" aria-valuemin="0" aria-valuemax="{{ $htmlCompletePercent }}" style="width: {{ $htmlCompletePercent }}%;">{{ $htmlCompletePercent }}%
				{{-- {{ count($htmlCompleteNumber) * 100 / $htmlLessons }} --}}
			</div>
		</div>
		<h3 id="CSS_progress" class="progbar">CSS Progress</h3>
		<div class="progress">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $cssCompletePercent }}" aria-valuemin="0" aria-valuemax="{{ $cssCompletePercent }}" style="width:  {{ $cssCompletePercent }}%;">{{ $cssCompletePercent }}%</div>
		</div>
		<div class="bottomprog">
			<h3 id="PHP_progress" class="progbar">PHP Progress</h3>
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $phpCompletePercent }}" aria-valuemin="0" aria-valuemax="{{ $phpCompletePercent }}" style="width:  {{ $phpCompletePercent }}%">{{ $phpCompletePercent }}%</div>
			</div>
		</div>
	</div>
	<div class="col-md-offset-2 col-md-3 col-xs-8 col-xs-offset-1">
		<div class="account-side">
			<div><a class="btn btn-info lesson-btn" href="/lessons">Go To Lessons</a></div>
		</div>
	</div>
</div>

@stop