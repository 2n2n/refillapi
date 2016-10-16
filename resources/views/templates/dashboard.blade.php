<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="shortcut icon" href="{{{ asset('/img/favicon.png') }}}">
  </head>
<body>
  <div class="so-header">
    <div class="so-top">
      <ul class="so-nav">
        <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge notify">42</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> <span class="badge notify">42</span></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="so-logo-container">
      <div class="item logo">
        <img src="images/logo.jpg"></img>
      </div>
      <div class="item search">
        <form action="#">
          <input type="text" name="q" id="q" placeholder="Quick search client..."/><button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="item profile">
        <div class="mask">
          <img src="images/img.jpg" class="pic">
        </div>
        <div class="greeter">
          <div>
             anthony.ras
          </div>
          <div class="text-right">Admin</div>
        </div>
        <div class="settings dropdown">
          <a href="#" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i></a>
          <div class="tri"></div>
          <ul class="dropdown-menu">
              <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> 
              <li><a href="#">Something else here</a></li> 
              <li role="separator" class="divider"></li> 
              <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar">
    <ul>
      <li>
        <a href="javascript:void(0)">Client Management</a>
        <ul>
          <li><a href="client">Client List</a></li>
          <li><a href="client/create">New Client</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="container">
    @yield('content')
    <ng-view></ng-view> 
  </div>

  <footer>
    <script type="text/javascript" src="js/app.js"></script>
  </footer>
  
</body>
</html>