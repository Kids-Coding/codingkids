@extends('layouts.master')

@section('content')

this is the lessons page


    @foreach ($lesson as $lesson)
<div>
    <br>
    @if ($lesson->category == 'html')

    html
    <a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->lessons}}</a>
    @endif

    @if ($lesson->category == 'css')

    css
    <a href="{{action('LessonsController@show', $lesson->id)}}">{{$lesson->lessons}}</a>
    @endif
</div>
    @endforeach



@stop