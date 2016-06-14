@extends('layouts.lesson')

@section('content')

    <a href="{{$lesson->link}}"><?php echo $lesson->link ?></a>
    <div class="container">
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

    function codingKids() {
        var x = document.getElementById("editor").value;
        document.getElementById("view").innerHTML = x;
    }

</script>

@stop
