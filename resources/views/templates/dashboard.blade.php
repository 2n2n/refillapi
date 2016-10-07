<!DOCTYPE html>
<html ng-app="RefillApp">
  <head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
<body>
  @yield('sidebar')
  @yield('content')

  <footer>
    <script type="text/javascript" src="js/app.js"></script>
  </footer>
  
</body>
</html>