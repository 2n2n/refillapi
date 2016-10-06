<!DOCTYPE html>
<html ng-app="RefillApp">
<head>
	<title>{{ $title }}</title>
</head>
<body>
	@yield('content')
	<footer>
		<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
	</footer>
</body>
</html>