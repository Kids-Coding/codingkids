<footer class="site-footer">
	<div class="row footerinfo">
		<div class="col-md-6 followus col-sm-12">
			<span class="footer-coding-kids">Coding Kids© </span>
			Follow Us On: 
			<span class="fa fa-twitter"></span>
			<span class="fa fa-facebook"></span>
			<span class="fa fa-pinterest"></span>
		</div>
		<div class="col-md-6 col-xs-12">
			<form class="form-inline footer-form">
					<span class="subscribe">Subscribe To Our Emails</span>
				 <div class="form-group">
						<input type="text" class="form-control" id="exampleInputName2" placeholder="name">
				 </div>
				 <div class="form-group">
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="email">
				 </div>
				 <button type="submit" class="btn btn-info">SUBMIT</button>
			</form>
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