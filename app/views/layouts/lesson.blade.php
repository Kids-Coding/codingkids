<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coding Kids</title>
    <link href='https://fonts.googleapis.com/css?family=Lobster|Amatic+SC|Cabin+Sketch:700|Luckiest+Guy|Muli|Roboto+Mono:500|Pacifico' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{ HTML::style('/css/codingkids.css') }}
    <link rel="icon" type="image/png" href="/img/handlizard.png">



</head>
<body>
    @include('partials.navbar')
    @include('partials.alerts.error')
    @include('partials.alerts.success')
    @yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
</body>
</html>