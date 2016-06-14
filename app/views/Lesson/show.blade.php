@extends('layouts.lesson')

@section('content')

    {{-- where the vid goes --}}
    <img src="{{action('LessonsController@show', $lesson->link)}}" class="holder">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    Editor:<br>
                    <textarea id="editor"></textarea>
                </div> <!-- end col -->
                <div class="col-sm-2">
                    <button class="btn" type="button" onclick="codingKids()">Try it</button> 
                </div> <!-- end col -->
                <div class="col-sm-5">
                    View:<br>
                    <div id="view">
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->

<script type="text/javascript">
    @include('public.js.lessonMain')
</script>
@stop

@section('scripts')
@include('js.lessonMain')
@stop