@extends('layouts.master')

@section('content')
<!-- <div id="fakeloader"></div> -->

<!-- not working -->
<div id="myblock" class="vide"
  	data-vide-bg="../video/codingkids.mp4" data-vide-options="loop: true, muted: true, position: 0% 0%">
</div>

<!-- notes -->

<div class="row">
	<div class="col-md-6 about">
		<p class="whyck">Why Coding Kids?</p>
		<p class="whyckp">In today’s digital world, coding is a fundamental skill alongside math and reading, but too few kids have the opportunity to learn to program because it is rarely taught in school. Coding Kid’s mission is to create a fun and engaging platform where children not only learn to program, but also have opportunities to be creative using code.</p>
	</div>
	<div class="col-md-6 mission-col">
		<p>coding(kids) {</p>
		<p class="line2mission">var childsFuture = "Priceless";</p>
		<p>}</p>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="center">
			<p class="createdby">Founded By:</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="center">
		<div class="col-md-8 col-md-offset-2 line"></div>
	</div>
</div>

<div class="row">
	<div class="center">
		<div class="col-md-4">
			<img src="../img/jerod.png" height="300">
			<div class="names">Jerod West</div>
		</div>
	</div>
	<div class="center">
		<div class="col-md-4">
			<img src="../img/marcus.png" height="300">
			<div class="names">Marcus Mondragon</div>
		</div>
	</div>
	<div class="center">
		<div class="col-md-4">
			<img src="../img/niki.png" height="300">
			<div class="names">Nicolette Williams</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#myBlock').vide('"../video/codingkids.mp4");
	$('#myBlock').vide("../video/codingkids.mp4", {
	});
	$('#myBlock').vide({
	  mp4: ../video/codingkids.mp4,
	  // webm: path/to/video2,
	  ogv: ../video/codingkids.ogg,
	  // poster: path/to/poster
	}, {
	
	});
	$('#myBlock').vide('extended path as a string', 'options as a string');
</script>



@stop