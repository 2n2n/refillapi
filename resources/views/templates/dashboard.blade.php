<!DOCTYPE html>
<html ng-app="RefillApp">
<head>
	<title>{{ $title }}</title>
</head>
<body>
	@yield('content')
	<footer>
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="js/angular-route.min.js"></script>
		<script type="text/javascript" src="js/customer/main.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</footer>
</body>
</html>