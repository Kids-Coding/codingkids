{{-- show errors in alert box --}}
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">
    	<h6>{{ Session::get('errorMessage') }}</h6>
		@foreach($errors->all() as $error)
			<h6>{{ $error }}</h6>
		@endforeach
    </div>
@endif