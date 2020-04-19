@if ($errors->any())
    <div class="row justify-content-md-center">
    	<div class="col-md-6">
    		<div class="alert alert-danger mt-4 text-danger">
		        @foreach ($errors->all() as $error)
		            <p class="text-left mb-2">{{ $error }}</p>
		        @endforeach
		    </div>
    	</div>
    </div>
@endif