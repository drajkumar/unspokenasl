<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title') </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('')}}images/icon_color.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" id="main-styles-link">

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
      @stack('css')
  </head>
  <body>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand Logo --><a class="rd-navbar-brand" href="{{ url('') }}"><img src="{{asset('')}}frontend/images/logo_color.png" alt="" width="161" height="39" srcset="{{asset('')}}frontend/images/logo_color.png"/></a>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('') }}">Home</a>
                      </li>
					  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/about-unspoken') }}">about us</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/the-unspoken-promise') }}">WHY US?</a></li>
                        </ul>
                      </li>
					  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/our-services') }}">Our Services</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('') }}">ASL INTERPRETING</a>
						   <!-- RD Navbar Dropdown-->
							<ul class="rd-menu rd-navbar-dropdown">
               @foreach($headerData as $data)
               @php
                $name = str_replace(' ', '-', $data->name);
               @endphp
                      
                 <li class="rd-dropdown-item"><a class="rd-dropdown-link" href='{{ url("/service/{$data->id}/{$name}") }}'>{{$data->name}}</a></li>     
                       
               @endforeach
							  

							</ul>
						  </li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/white-labeling') }}">AGENCIES</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/faq') }}">FAQ</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/request-services') }}">Request</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a target="_blank" class="rd-dropdown-link" href="https://clienthub.getjobber.com/client_hubs/51f9fd26-4bd5-4ac9-bebe-5fea857c7e17/login/new">Existing Clients</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/join-us') }}">Join Our Team</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/join-us') }}">Interpreter Promise</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/application') }}">Application</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="https://secure.getjobber.com/login" target="_blank">Interpreter Login</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/unspoken-thoughts') }}">BLOG</a>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>


     @yield('mainContent')





       <!-- Page Footer-->
            <footer class="section footer-standard bg-gray-700">
              <div class="footer-standard-main">
                <div class="container">
                  <div class="row row-50">
                    <div class="col-lg-4">
                      <div class="inset-right-1">
                      
                        <h4>About Us</h4>
                        <p>{!! $aboutdata->description !!}</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4">
                      <div class="box-1">
                        <h4>Contact Us</h4>
                        <ul class="list-sm">
                          <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><span class="link-default" href="#">{!! $contactus->address !!} </span></li>
                          <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:1(888) 280 0751">{{$contactus->phone}}</a></li>
                          <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:services@unspokensigns.com">{{$contactus->email}}</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7 col-lg-4">
                      <h4>Follow on Social Media</h4>
                    
                      <!-- Social Icon-->
                     <div>
                          <ul class="list-inline list-inline-md">
                            <li><a class="icon icon-sm link-default mdi mdi-linkedin" href="{{$sociallink->linkedin}}" target="_blank"></a></li>
                            <li><a class="icon icon-sm link-default mdi mdi-twitter" href="{{$sociallink->twitter}}" target="_blank"></a></li>
							<li><a class="icon icon-sm link-default mdi mdi-facebook" href="{{$sociallink->facebook}}" target="_blank"></a></li>
                           
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="footer-standard-aside"><a class="brand" href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt="" width="161" height="39" srcset="images/logo.png 2x"/></a>
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/></p>
                </div>
              </div>
            </footer>
    </div>
    <div class="preloader" > 
      <div class="preloader-logo"><img src="{{asset('frontend/images/logo.png')}}" alt="" width="161" height="39" srcset="{{asset('')}}frontend/images/logo.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('frontend/js/core.min.js')}}"></script>
    <script src="{{asset('frontend/js/script.js')}}"></script>

    @stack('scripts')
  </body>
</html>