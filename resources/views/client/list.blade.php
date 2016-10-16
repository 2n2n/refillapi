@extends('templates.dashboard')
@section('content')
<div class="btn-group">
	<a href="client/create" class="btn btn-success">New Client</a>
	<a href="javascript:void(0)" class="btn btn-danger">Delete Selected</a>
</div>
<table class="table">
	<thead>
		<tr>
			<th><input class="chk-all" type="checkbox" /></th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>address</th>
			<th>Schedule</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($clients as $client): ?>
		<tr>
			<td><input class="chk" type="checkbox" /></td>
			<td><?php echo $client->first_name; ?></td>
			<td><?php echo $client->last_name; ?></td>
			<td><?php echo $client->address; ?></td>
			<td><?php echo $client->schedule; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
@endsection