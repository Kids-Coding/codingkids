<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coding Kids</title>
    <link href='https://fonts.googleapis.com/css?family=Lobster|Amatic+SC|Cabin+Sketch:700|Luckiest+Guy|Muli|Roboto+Mono:500|Pacifico|Poppins' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/jquery.vide.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{ HTML::style('/css/fakeLoader.css') }}
    {{ HTML::style('/css/codingkids.css') }}

</head>
<div class='heads'>
    <img src="../img/teachers2.png">
    <audio id='mp3'>
        <source src='../mp3/hey.mp3'></source>
    </audio>
</div>
<body>
    <div class="page-wrap">
        @include('partials.navbar')
        @include('partials.alerts.error')
        @include('partials.alerts.success')
        @yield('content')
    </div>

    @include('partials.footer')
    @yield('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- fakeloader custome js -->
    <script src="/js/fakeLoader.min.js"></script>

    <script>

            // fakeloader function with options
        $("#fakeloader").fakeLoader({
            timeToHide:1000, //Time in milliseconds for fakeLoader disappear
            zIndex:"999",//Default zIndex
            spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
            bgColor:"white", //Hex, RGB or RGBA colors
            imagePath:"../img/coding-kids.png" //If you want can you insert your custom image
        });

        var konami_keys = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
        var konami_index = 0;
        
        $(document).keydown(function(e){
            if(e.keyCode === konami_keys[konami_index++]){
                if(konami_index === konami_keys.length){
                    $('.heads').slideDown('slow', function(){
                        var audio = document.getElementById('mp3');
                        audio.play();
                    }).delay(1500).slideUp('slow');
                }
            }else{
            konami_index = 0;
            }
        });

        $('#myBlock').vide({
          mp4: "../video/codingkids.mp4",
        });

    </script>


</body>
</html>