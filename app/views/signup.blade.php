@extends('layouts.master')

@section('content')

    <div class="row signup">
        <div class="col-md-6">
            <img class="gears" src="../img/kidoncomp.png">
        </div>
        <div class="col-md-6">
            <div class="signup-form">
                <p class="sign-up-text">Sign Up</p>
                <p> It's always free and always will be.</p>
            </div>
                {{ Form::open(array('action' => 'HomeController@doSignup', 'class' => 'form')) }}
                <div class="row">
                    <div class="form">
                        {{ Form::text('parentName', null, ['class' => 'form-control' , 'placeholder' => 'Parent Name' ]) }}
                    </div>
                    <div class="form">
                        {{ Form::text('childName', null, ['class' => 'form-control' , 'placeholder' => 'Student Name' ]) }}
                    </div>
                    <div class="form">
                        {{ Form::text('username', null, ['class' => 'form-control' , 'placeholder' => 'Username' ]) }}
                    </div>
                    <div class="form">
                        {{ Form::text('email', null, ['class' => 'form-control' , 'placeholder' => 'Email' ]) }}
                    </div>
                    <div class="form">
                        {{ Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Password' ]) }}
                    </div>
                    <div class="form">
                        {{ Form::password('password_confirmation', ['class' => 'form-control' , 'placeholder' => 'Confirm Password' ]) }}
                    </div>
                </div>
                <div>
                    {{ Form::submit('Sign Up!', ['class' => 'btn btn-info form-btn']); }}

                </div>
            {{ Form::close() }}

        </div>
    </div>

@stop