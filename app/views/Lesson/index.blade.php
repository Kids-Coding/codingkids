@extends('layouts.master')

@section('content')


this is the lessons page
<br>

@foreach ($lesson as $lesson)

<a href="{{action('LessonsController@show', $lesson->id)}}">{{{$lesson->category}}}</a>
<br>

@endforeach



@stop