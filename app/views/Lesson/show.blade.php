@extends('layouts.lesson')

@section('content')

    <a href="{{$lesson->link}}"><?php echo $lesson->link ?></a>
    <br>
    <div class="container">
    <div class='center'>
        <div id='player'></div>
    </div>


        <div class="row">
            <div class="col-sm-5">
                Editor:<br>
                <textarea id="editor"></textarea>
            </div> <!-- end col -->
            <div class="col-sm-2">
                <button class="btn btn-lg btn-info" type="button" onclick="codingKids()">Try it</button> 
            </div> <!-- end col -->
            <div class="col-sm-5">
                View:<br>
                <div id="view">
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container -->
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
