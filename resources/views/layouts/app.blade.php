<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">

    <title>@yield('title')</title>

    <!-- Scripts -->
  

    <!-- Fonts -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="{{ asset('admin/css/dashboard.css') }}" rel="stylesheet">

     @stack('css')
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Unspoken</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <ul class="navbar-nav px-3">
        
    </ul>
    <form id="adminlogout-form" action="" method="POST" style="display: none;">
    
        </form>
    </header>

 <div class="container-fluid">
   <div class="row">

       <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/admin/dashbord')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li> -->

          

           
          
          <li class="nav-item">
          	  <div class="dropright">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <span data-feather="layout"></span> Pages
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{ url('/admin/home')}}"><span data-feather="home"></span> Home</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/service')}}"><span data-feather="settings"></span> Service</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/agencies')}}"><span data-feather="layout"></span> Agencies</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/faq')}}"><span data-feather="layout"></span> Faq</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/aboutus')}}"><span data-feather="layout"></span> About us</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/contactus')}}"><span data-feather="mail"></span> Contact us</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/sociallink')}}"><span data-feather="layout"></span> Social Links</a></li>
                  <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
              </div>
            
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('register') }}">
              <span data-feather="plus-square"></span>
              Add Admin
            </a>
          </li> -->

            <li class="nav-item">
          	  <div class="dropright">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <span data-feather="user"></span> Admin
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  
                  <li> 
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <span data-feather="log-out"></span>  {{ __('Logout') }}
                         </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                          </form>
                          
                          </li>
                 
                </ul>
              </div>
            
          </li>

        


        </ul>
		
     
      </div>
    </nav>

   @yield('content')

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src={{ asset("admin/js/jquery.slim.min.js") }}><\/script>')</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
@stack('scripts')
</body>
</html>
