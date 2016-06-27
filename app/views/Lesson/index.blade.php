{{-- hey this is a test --}}
@extends('layouts.master')

@section('content')
<p class="titles">All Lessons</p>

<div class="row">
    <div class="col-md-4 lessons-div">
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-lg dropdown-toggle lessons-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HTML <span class="caret"></span></button>
            <ul class="dropdown-menu">
            @foreach ($lessons as $lesson)
                @if ($lesson->category == 'HTML')
                    <li><a class="lessonsstuff" href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-4 lessons-div">
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-lg dropdown-toggle lessons-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSS <span class="caret"></span></button>
            <ul class="dropdown-menu">
            @foreach ($lessons as $lesson)
                @if ($lesson->category == 'CSS')
                    <li><a class="lessonsstuff" href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-4 lessons-div">
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-lg dropdown-toggle lessons-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PHP <span class="caret"></span></button>
            <ul class="dropdown-menu">
            @foreach ($lessons as $lesson)
                @if ($lesson->category == 'PHP')
                    <li><a class="lessonsstuff" href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 joke">
        <p class="joke-quest"></p>
        <p class="joke-answer"></p>
    </div>
</div>

@stop

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../js/lessonMain.js"></script>
 