@extends('templates.dashboard')
@section('content')
<div class="row">
	<div class="col-md-12">
		<form action="/client/register" method="post">
			{{ csrf_field() }}
			<div class="form-group">
			  	<div class="form-group">
					<label for="firstname">First Name:</label>
						<input type="text" name="first_name" class="form-control" id="lastname">
					</div>
					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" name="last_name" class="form-control" id="lastname">
					</div>
					<button type="submit" class="btn btn-success">Create</button>
			</div>
		</form>
	</div>
</div>
@endsection