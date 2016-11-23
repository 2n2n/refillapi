@extends('layout.app')

@section('content')
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Client Listing
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>address</th>
							<th>Contact</th>
							<th>Registered Since</th>
						</tr>
					</thead>
					<tbody>
						@if( count($clients) == 0 )
							<tr>
								<td colspan="5">No clients yet.</td>
							</tr>
						@else
							@foreach($clients as $client)
							<tr>
								<td>{{ $client->id }}</td>
								<td>{{ $client->last_name }}, {{ $client->first_name }}</td>
								<td>{{ $client->address }}</td>
								<td>{{ $client->mobile_no }} <br> {{ $client->phone_no }}</td>
								<td>{{ $client->created_at }}</td>
							</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection