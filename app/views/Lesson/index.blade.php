@extends('layouts.master')

@section('content')

this is the lessons page


<div>
    <br>
    
    @foreach ($lesson as $lesson)
    @if ($lesson->category == 'html')
    html
    <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
    <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->lessons}}</a></li>
    </ul>
    </div>
    @endif
    @endforeach

    @foreach ($lesson as $lesson)
    @if ($lesson->category == 'css')

    css
    <a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->lessons}}</a>
    @endif
    @endforeach

    @foreach ($lesson as $lesson)
    @if ($lesson->category == 'php')

    php
    <a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->lessons}}</a>
    @endif
</div>
    @endforeach
    



@stop