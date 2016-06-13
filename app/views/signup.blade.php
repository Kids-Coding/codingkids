@extends('layouts.master')

@section('content')

	<div class="row signup">
        <div class="col-md-6">
            <img class="gears" src="../img/gears.png">
        </div>
        <div class="col-md-6">
            <div class="signuptext signup-form">
                <p class="sign-up-text">Sign Up</p>
                <p> It's always free and always will be.</p>
            </div>
            <form class="form" method="POST" action="/signup">
                <div class="row">
                    <div class="form">
                        <input name="parentName" type="text" placeholder="Parent Name" class="form-control" id="parentName">
                    </div>
                    <div class="form">
                        <input name="studentName" type="text" placeholder="Student Name" class="form-control" id="studentName">
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