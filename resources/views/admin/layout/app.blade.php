<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ url('/css/vendor/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ url('/css/vendor/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ url('/css/vendor/lines.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ url('css/vendor/font-awesome.min.css') }}" rel="stylesheet">
<!-- jQuery -->
<script src="{{ url('js/vendor/jquery.min.js') }}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="{{ url('/css/vendor/custom.css') }}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('/js/vendor/metisMenu.min.js')}}"></script>
<script src="{{ url('/js/vendor/custom.js')}}"></script>
<!-- Graph JavaScript -->
<script src="{{ url('/js/vendor/d3.v3.js')}}"></script>
<script src="{{ url('/js/vendor/rickshaw.js')}}"></script>
</head>

<body>

  <div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ action('Admin\AdminController@index')}}">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">

			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                {{ Auth::User()->name}} {{ Auth::User()->surname}}
                <img src="{{ url('img/3.png')}}"></a>
	        		<ul class="dropdown-menu">

						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
	        		</ul>
	      		</li>
			</ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-home fa-fw nav_icon"></i>Site view</a>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ action('Admin\AdminController@userList') }}"><i class="fa fa-users fa-fw nav_icon"></i>User list</a>

                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">

            @yield('content')

       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/vendor/bootstrap.min.js')}}"></script>
</body>
</html>
