@extends('layout.app')

@section('content')
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive" src="/images/profiledefault.jpg" alt="">
			</div>
			<div class="col-md-9">
				<div class="btn-group" style="margin-top:20px;">
					<a href="#" class="btn btn-primary">Edit Client</a>
					<a href="#" class="btn btn-danger">Remove Client</a>
				</div>
				<div class="btn-group" style="margin-top:20px;">
					<a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-shopping-cart"></i> Generate Order</a>
					<a href="#" class="btn btn-info"><i class="glyphicon glyphicon-folder-open"></i> Transaction History</a>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<div class="form-control">{{ $client->last_name }}, {{ $client->first_name }}</div>
		</div>
		<div class="form-group">
			<label for="address">Adress</label>
			<div class="form-control">{{ $client->address }}</div>
		</div>
		<div class="form-group">
			<label for="name">Contact:</label>
			<div class="form-control"><i class="glyphicon glyphicon-phone"></i> {{ $client->mobile_no }}</div>
		</div>
		<div class="form-group">
			<label for="name">Contact:</label>
			<div class="form-control"><i class="glyphicon glyphicon-phone-alt"></i> {{ $client->phone_no }}</div>
		</div>
		<div class="form-group">
			<label for="name">Member Since</label>
			<div class="form-control">{{ $client->created_at }}</div>
		</div>
	</div>
@endsection