@extends('layouts.lesson')

@section('content')

<<<<<<< HEAD
    {{-- where the vid goes --}}
    <img src="{{action('LessonsController@show', $lesson->link)}}" class="holder">
=======
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDITOR LESSON</title>
    <meta name="viewport" content="width=device-width">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Orbitron|Kaushan+Script|Rock+Salt|Annie+Use+Your+Telescope|Candal' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/lesson.css">
</head>
<body>
    <a href="{{$lesson->link}}"><?php echo $lesson->link ?></a>
>>>>>>> 5b6e7f3700a1b0d3266e56d9e6f5ded0ecd31626
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