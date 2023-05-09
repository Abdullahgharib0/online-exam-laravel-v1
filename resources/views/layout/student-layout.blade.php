<!doctype html>
<html lang="en">
  <head>
  	<title>OES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>
      
		<div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fa fa-bars bg"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="/dashboard" class="logo bg-info">Hii,{{ Auth::user()->name }}</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/dashboard"><span class="fa fa-book mr-3"></span> Exams</a>
          </li>

          <li class="active">
            <a href="{{ route('resultDashboard') }}"><span class="fa fa-list-alt mr-3"></span> Results</a>
          </li>
          <li class="active">
            <a href="{{ route('edit_profile') }}"><span class="fa fa-user mr-3"></span> Profile</a>
          </li>
          
          <li>
            <a href="/logout"><span class="fa fa-sign-out mr-3"></span> Logout</a>
          </li>
          
        </ul>

    	</nav>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        
        @yield('space-work')
        
      </div>
		</div>
    
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
  </html>