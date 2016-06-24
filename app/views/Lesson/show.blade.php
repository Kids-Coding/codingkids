@extends('layouts.lesson')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-2">
                <div class="center">

                    <img class="lessonimg" src="../img/coding-kids.png">

                        <!--div containing a .btn "goback", that will take user back to lessons.blade-->
                    <div class="lessonbtn">
                        <button class="videoLesson btn btn-default btn-lg" type="button" onclick="window.location='{{url("lessons")}}'">Go Back</button> 
                    </div><!--end .lessonbtn-->

                        <!--div containing the a .btn "summary", that has a modal in which the summary to the lesson will reside-->
                    <div class="lessonbtn">
                        <button type="button" class="videoLesson btn btn-default btn-lg" data-toggle="modal" data-target="#summary">Summary</button>
                    </div>
                    <!-- Modal -->
                    <div id="summary" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <!--modal header -->
                                <div class="modal-header">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                                    <h4 class="modal-title">Summary</h4>
                                </div>
                                <!--modal body -->
                                <div class="modal-body">
                                   @include($lesson->summary)
                                </div> <!-- end modal body -->
                                <!-- Modal content-->
                                <div class="modal-footer">
                                    <!-- stuff goes here in near future -->
                                </div> <!--end modal footer -->
                            </div> <!--end modal content -->
                        </div> <!--end modal dialog -->
                    </div> <!--end myModal -->
                    
                        <!--div containing the a .btn "quiz", that has a modal in which the quiz to the lesson will reside-->
                    <!-- Trigger the modal with a button -->
                    <div class="lessonbtn">
                        <button type="button" class="videoLesson btn btn-default btn-lg" data-toggle="modal" data-target="#quiz">Quiz</button>
                    </div>
                    <!-- Modal -->
                    <div id="quiz" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <!--modal header -->
                                <div class="modal-header">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                                    <h4 class="modal-title">Quiz</h4>
                                </div>
                                <!--modal body -->
                                <div class="modal-body">
                                   @include($lesson->quiz)
                                </div> <!-- end modal body -->
                                <!-- Modal content-->
                                <div class="modal-footer">
                                    <!-- stuff goes here in the near future if needed -->
                                </div> <!--end modal footer -->
                            </div> <!--end modal content -->
                        </div> <!--end modal dialog -->
                    </div> <!--end myModal -->
                   

                </div><!--end .center-->
            </div><!--end .col-->

                <!--div containing the youtube video player that will have teh video lesson on it -->
            <div class="col-md-8">
                <div class='center'>
                    <div id='player'></div>
                </div><!--end .center-->
            </div><!--end .col-->


            <div class="col-md-2 forvideo">
                <div class="center">
                        <h3>{{$lesson->category}}</h3>
                        <div>
                        @foreach($allLessons as $individualLesson)
                            <button class="videoLesson btn btn-default btn-lg"><a href="{{action('LessonsController@show', $individualLesson->id)}}">{{{$individualLesson->name}}}</a></button>
                            <br><br>
                        @endforeach
                        </div>

                </div><!--end .center-->
            </div><!--end .col-->

        </div> <!--end .row-->
            

            <!--row containing the #editor, "try it" .btn, #view -->
        <div class="row">

            <!--div that contains a text area that you can write out text/html/css within-->
            <div class="center">

                <div class="editor col-md-5">
                    <textarea id="editor"></textarea>
                </div> <!-- end .col -->

                    <!-- div that contains a btn that will allow you to transfer text/html/css from the #editor to the #view -->
                <div class="col-md-2">
                    <button class="btn btn-lg btn-default tryit" type="button" onclick="codingKids()">Try it</button> 
                </div> <!-- end .col -->

                    <!--div that contains an empty div that will be used to place the text/html/css once transferred over from the #editor-->
                <div class="view col-md-5">
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