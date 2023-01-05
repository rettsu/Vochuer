@extends('layouts.app')

@section('title')
	Voucher
@endsection

@section('content')
	<div class="container-fluid text-center"> 

	  <div class="row content">

	    <div class="col-sm-12 text-left"> 

	      	<div class="card text-center">

			  <div class="card-header">

			    <ul class="nav nav-tabs card-header-tabs">
			      <li class="nav-item">
			        <a class="nav-link active" aria-current="true" href="#">Voucher</a>
			      </li>
			    </ul>

			  </div>

			  <div class="card-body">
			    <h5 class="card-title">Branch Code & Name</h5>
			    <br>
			    <form class="row needs-validation justify-content-center" action="#" validate>
			    	<div class="col col-sm-4 align-self-center">
    					<input type="text" class="form-control" name="branchcode" id="branchcode validationCustomUsername" placeholder="Branch Code Here" required>
    					<div class="invalid-feedback">
					        Please choose a code.
					    </div>
			    	</div>

			    	<div class="col-12">
			    		<br>
				    	<button class="btn btn-primary" type="submit">Submit form</button>
				 	</div>
			    </form>

			    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
			  </div>

			</div>

	    </div>

	  </div>

	</div>
@endsection


{{-- @extends('layouts.footer') --}}
{{-- @section('footer') --}}