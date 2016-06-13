@extends('layouts.master')

@section('content')

	<div class="row">

		<div class="col-md-6">
			<img src="http://placehold.it/350x350">
		</div>
		<div class="col-md-6">
			<form class="form" method="POST" action="/signup">
                <div class="row">
                    <div class="form">
                        <input name="name" type="text" placeholder="Name" class="form-control" id="name">
                    </div>
                    <div class="form">
                        <input name="username" type="text" placeholder="Username" class="form-control" id="username">
                    </div>
                    <div class="form">
                        <input name="email" type="text" placeholder="Email" class="form-control" id="email">
                    </div>
                    <div class="form">
                        <input name="password" type="password" placeholder="Password" class="form-control" id="password">
                    </div>
                    <div class="form">
                        <input name="confirm" type="password" placeholder="Confirm Password" class="form-control" id="confirm">
                    </div>
                </div>
                <div>
                    <input class="btn btn-info form-btn" type="submit" id="submit" value="SIGN UP!">
                </div>
            </form>
		</div>
	</div>

@stop