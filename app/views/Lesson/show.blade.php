<?php

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

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">

    function codingKids() {
        var x = document.getElementById("editor").value;
        document.getElementById("view").innerHTML = x;
    }

</script>
</body>
</html>