@extends('templates.dashboard')

@section('content')
<div ng-controller="simpleController as simple">
	<h1>F the POLICE</h1>
	//simple.message//
	<simple></simple>
	<div ng-controller="customerController">
		//list//
	</div>
</div>
@endsection