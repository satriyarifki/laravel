<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="assets/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="assets/images/loading.gif" alt="#" /></div>
    </div>
     <!-- end loader -->

    <div class="wrapper">

       
        <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li class="@yield('stat')"> <a href="{{url('')}}">Home</a></li>
                <li class="@yield('stat2')"> <a href="{{url('about')}}">About</a></li>
                <li class="@yield('stat3')"> <a href="{{url('product')}}">Product</a></li>
                <li class="@yield('stat4')"> <a href="{{url('blog')}}">Blog</a></li>
                <li class="@yield('stat5')"> <a href="{{url('contact')}}">Contact us</a></li>

            </ul>

        </nav>
      </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="{{url('')}}"><img src="assets/images/logo.jpg" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    
                                    <ul>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="assets/icon/1.png" alt="#" /></a>
                                        </li>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="assets/icon/2.png" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="assets/icon/3.png" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="assets/images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown" style="width:150px">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->
            @section('content')
                
            @show
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="border1">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                                    <img class="logo1" src="assets/images/logo1.jpg" />
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <ul class="lik">
                                        <li> <a href="{{url('')}}">Home</a></li>
                                        <li> <a href="{{url('about')}}">About</a></li>
                                        <li> <a href="{{url('product')}}">Product</a></li>
                                        <li> <a href="{{url('blog')}}">Blog</a></li>
                                        <li> <a href="{{url('contact')}}">Contact us</a></li>
                                    </ul>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                    <ul class="sociel">
                                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new">
                                    <h3>Newsletter</h3>
                                    <form class="newtetter">
                                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                        <button class="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="newtt">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point
                                        <br> of using Lorem I</p>
                                </div>
                            </div>
                        </div>

                    </div>
                  
                    <div class="copyright">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
                    </div>
            
             </div>

            </footer>
            <!-- end footer -->
        </div>

    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js --> 
    
</body>

</html>