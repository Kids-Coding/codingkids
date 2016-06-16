@extends('layouts.lesson')

<script src="../js/showPage.js"></script>

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-2">
                <div class="center">
                    <div class="lessonbtn">
                        <button class="btn btn-info btn-lg" type="button">Lesson</button> 
                    </div>
                    <div class="lessonbtn">

                                            <!-- Trigger/Open The Modal -->
                                            <button id="myBtn" class='btn btn-info btn-lg'>Summary</button>

                                            <!-- The Modal -->
                                            <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                            <span class="close">x</span>

                        {{-- ****** PUT SOME MODAL STUFF HERE OR ILL HAVE TO CUT YOU JEROD ******--}}


                                <div class ="row">

                                    <div class="col-sm-12 summary">

                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Summary</button>

                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">

                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">

                                                    <!--modal header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Summary of Lesson</h4>
                                                    </div>

                                                    <!--modal body -->
                                                    <div class="modal-body">
                                                        <div class="container">




                                                        {{-- Mhis is where i w?ll inject the GOODS --}}
                                                        {{-- tAis is where i Eill inject the GOODS --}}
                                                        {{-- thRs is where M will inject the GOODS --}}
                                                        {{-- thiC is wherW i will inject the GOODS --}}
                                                        {{-- this Us wheOe i will inject the GOODS --}}
                                                        {{-- this iS whLre i will inject the GOODS --}}
                                                        {{-- this is wBere i will inject the GOODS --}}
                                                        {{-- this is where i will inject the GOODS --}}
                                                        {{-- this is where i will inject the GOODS --}}




                                                        </div> <!--end container -->

                                                    </div> <!-- end modal body -->

                                                    <!-- Modal content-->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div> <!--end modal footer -->

                                                </div> <!--end modal content -->

                                            </div> <!--end modal dialog -->

                                        </div> <!--end myModal -->

                                    </div> <!--end col summary -->

                                </div> <!--end row -->







                                            <p>{{$lesson->name}}</p>
                                            </div>

                                            </div>
                    </div>
                    <div class="lessonbtn">
                        <button class="btn btn-info btn-lg" type="button">Quiz</button>  
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class='center'>
                    <div id='player'></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="center">
                    <p>1.lesson html</p>
                    <p>2.lesson html</p>
                    <p>3.lesson html</p>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="center">
                <div class="col-md-5">
                    Editor:<br>
                    <textarea id="editor"></textarea>
                </div> <!-- end col -->
                <div class="col-md-2">
                    <button class="btn btn-lg btn-info tryme" type="button" onclick="codingKids()">Try it</button> 
                </div> <!-- end col -->
                <div class="col-md-5">
                    View:<br>
                    <div id="view">
                    </div>
                </div> <!-- end col -->
            </div>
        </div> <!-- end row -->
    </div>
   
@stop
@section('script')
<script type="text/javascript">

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

    function codingKids() {
        var x = document.getElementById("editor").value;
        document.getElementById("view").innerHTML = x;
    }

</script>

@stop
