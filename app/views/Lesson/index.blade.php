@extends('layouts.master')

@section('content')

this is the lessons page


<div>
    <br>

    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HTML <span class="caret"></span></button>
        <ul class="dropdown-menu">
        @foreach ($lessons as $lesson)
            @if ($lesson->category == 'html')
                <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
            @endif
        @endforeach
        </ul>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSS <span class="caret"></span></button>
        <ul class="dropdown-menu">
        @foreach ($lessons as $lesson)
            @if ($lesson->category == 'css')
                <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
            @endif
        @endforeach
        </ul>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></button>
        <ul class="dropdown-menu">
        @foreach ($lessons as $lesson)
            @if ($lesson->category == 'php')
                <li><a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->name}}</a></li>
            @endif
        @endforeach
        </ul>
    </div>
</div>



@stop