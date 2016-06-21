<footer class="site-footer">
	<div class="row footerinfo">
		<div class="col-md-6 followus col-sm-12">
			<span class="footer-coding-kids">Coding Kids© </span>
			Follow Us On: 
			<a href="https://twitter.com/codingkidstx"><span class="fa fa-twitter"></span></a>
			<span class="fa fa-facebook"></span>
		</div>
		<div class="col-md-6 col-xs-12">

            NIKI HAS ONE GIANT BALL

		</div>
	</div>

	    <script>
        var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
        $(document).keydown(function(e) {
            kkeys.push( e.keyCode );
            if ( kkeys.toString().indexOf( konami ) >= 0 ) {
            $(document).unbind('keydown',arguments.callee);
            // do something awesome
            $('div').addClass("konami");
            }
        });
    </script>
    
</footer>	