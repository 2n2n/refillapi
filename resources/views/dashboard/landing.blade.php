@extends('templates.dashboard')

@section('deliverables')
<div class="row">
	<div class="col-md-12">
		<div ng-controller="simpleController as simple">
			<h1>F the POLICE</h1>
			//simple.message//
			<simple></simple>
			<div ng-controller="customerController">
				//list//
			</div>
		</div>
	</div>
</div>

@endsection

@section('content')
	@yield('deliverables')
@endsection