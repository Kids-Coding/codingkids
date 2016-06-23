@extends('layouts.lesson')

<script src="../js/showPage.js"></script>

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-2">
                <div class="center">

                        <!--div containing a .btn "goback", that will take user back to lessons.blade-->
                    <div class="lessonbtn">
                        <button class="btn btn-info btn-lg" type="button" onclick="window.location='{{url("lessons")}}'">Go Back</button> 
                    </div><!--end .lessonbtn-->

                        <!--div containing the a .btn "summary", that has a modal in which the summary to the lesson will reside-->
                    <div class="lessonbtn"> 
                        <button id="myBtn" class='btn btn-info btn-lg'>Summary</button>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <span class="close">x</span>
                                    {{$lesson->summary}}
                                </div><!--end .modal-body-->
                            </div><!--end .modal=content-->
                        </div><!--end #mymodal-->
                    </div><!--end .lessonbtn-->
                    
                        <!--div containing the a .btn "quiz", that has a modal in which the quiz to the lesson will reside-->
                    <div class="lessonbtn">
                        <button class="btn btn-info btn-lg">Quiz</button> 
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="modal-body">
                                    {{$lesson->quiz}}
                                    <span class="close">x</span>
                                </div><!--end .modal-body-->
                            </div><!--end .modal-content-->
                        </div><!--end #mymodal-->
                    </div><!--end .lessonbtn-->

                </div><!--end .center-->
            </div><!--end .col-->

                <!--div containing the youtube video player that will have teh video lesson on it -->
            <div class="col-md-8">
                <div class='center'>
                    <div id='player'></div>
                </div><!--end .center-->
            </div><!--end .col-->


            <div class="col-md-2">
                <div class="center">
                    <h3>
                        <h3>{{$lesson->category}}</h3>
                        @foreach($allLessons as $individualLesson)
                            <button class="videoLesson btn btn-info btn-lg"><a href="{{action('LessonsController@show', $individualLesson->id)}}">{{{$individualLesson->name}}}</a></button>
                            <br>
                        @endforeach
                        <br>  
                    </h3>
                </div><!--end .center-->
            </div><!--end .col-->

        </div> <!--end .row-->
            

            <!--row containing the #editor, "try it" .btn, #view -->
        <div class="row">

            <!--div that contains a text area that you can write out text/html/css within-->
            <div class="center">

                <div class="col-md-5">
                    Editor:<br>
                    <textarea id="editor"></textarea>
                </div> <!-- end .col -->

                    <!-- div that contains a btn that will allow you to transfer text/html/css from the #editor to the #view -->
                <div class="col-md-2">
                    <button class="btn btn-lg btn-info tryme" type="button" onclick="codingKids()">Try it</button> 
                </div> <!-- end .col -->

                    <!--div that contains an empty div that will be used to place the text/html/css once transferred over from the #editor-->
                <div class="col-md-5">
                    View:<br>
                    <div id="view">
                    </div><!--end #view-->
                </div> <!-- end .col -->

            </div><!--end .center-->

        </div> <!-- end .row -->
        
    </div><!--end .container-->
   
@stop
@section('script')
<script type="text/javascript">


        // youtube player related functions
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '350',
                width: '640',
                videoId: '<?php echo $lesson->yt_id ?>',
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
                // setTimeout(stopVideo, 6000);
                done = true;
            }
        }
        function stopVideo() {
            player.stopVideo();
        }
        // end of youtube player related functions


        // jquery function allow you to type text/html/css within the #editor and have it transpose to the #view
    function codingKids() {
        var x = document.getElementById("editor").value;
        document.getElementById("view").innerHTML = x;
    }

</script>

@stop
