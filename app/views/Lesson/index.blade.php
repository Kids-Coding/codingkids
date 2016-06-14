@extends('layouts.master')

@section('content')

this is the lessons page


<div>
    <br>
    
    <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
    </button>
        <ul class="dropdown-menu">
    @foreach ($lessons as $lesson)
    @if ($lesson->category == 'html')
    html
        <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
    @endif
    @endforeach
        </ul>
    </div>

   <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
    </button>
        <ul class="dropdown-menu">
    @foreach ($lessons as $lesson)
    @if ($lesson->category == 'css')
    css
        <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
    @endif
    @endforeach
        </ul>
    </div>

<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
    </button>
        <ul class="dropdown-menu">
    @foreach ($lessons as $lesson)
    @if ($lesson->category == 'php')
    php
        <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
    @endif
    @endforeach
        </ul>
    </div>
</div>



@stop