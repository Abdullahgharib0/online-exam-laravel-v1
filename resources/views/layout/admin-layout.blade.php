<!doctype html>
<html lang="en">
  <head>
  	<title>OES Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ ('../css/style.css') }}">
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
	  		<h1><a href="/admin/dashboard" class="logo bg-warning text-dark">Admin Dashboard</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/admin/dashboard"><span class="fa fa-book mr-3"></span> Subjects</a>
          </li>
          
          <li class="active">
            <a href="/admin/students"><span class="fa fa-graduation-cap mr-3"></span> Students</a>
          </li>

          <li class="active">
            <a href="/admin/doctors"><span class="fa fa-user-circle mr-3"></span> Doctors</a>
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