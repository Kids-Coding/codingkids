@extends('layouts.master')

@section('content')
<p class="lessons-title">All Lessons</p>

<div class="row">
    <div class="col-md-4 lessons-div">
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-lg dropdown-toggle lessons-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HTML <span class="caret"></span></button>
            <ul class="dropdown-menu">
            @foreach ($lessons as $lesson)
                @if ($lesson->category == 'html')
                    <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
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
                @if ($lesson->category == 'css')
                    <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
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
                @if ($lesson->category == 'php')
                    <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 joke">
        <p class="joke-quest">Why did the fly never land on the computer?</p>
        <p class="joke-answer">He was afraid of the world wide web.</p>
    </div>
</div>

@stop