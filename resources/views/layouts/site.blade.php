<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Document Title -->
    <title>APPROVE IT </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png')}}" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRaleway:300,400,500,600,700" rel="stylesheet">
    
    @yield('head')

    <!-- ==== Font Awesome ==== -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- iconos personalizados -->
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/4ff4d53233/UntitledProject/style.css">
    
    <!-- ==== Bootstrap ==== -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- ==== FakeLoader Plugin ==== -->
    <link href="{{ asset('css/fakeLoader.min.css')}}" rel="stylesheet">
    
    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="{{ asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet">
    
    <!-- ==== Main Stylesheet ==== -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link href="{{ asset('css/responsive-style.css')}}" rel="stylesheet">
    
    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="{{ asset('css/colors/theme-color-1.css')}}" rel="stylesheet" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- Preloader Start -->
    <div id="preloader" class="bg--color-theme"></div>
    <!-- Preloader End -->
    
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header id="header">
            <!-- Header Topbar Start -->
            <div class="header--topbar">
                <div class="container">
                    <div class="pull-left clearfix">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <!-- Header Topbar Language Start -->
                                <div class="header--topbar-lang dropdown pull-left hidden-xxs">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                        @if(Config::get('app.locale') == "es")
                                        English
                                        @else
                                        Español
                                        @endif
                                        <span class="caret"></span></button>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Español</a></li>
                                    </ul>
                                </div>
                                <!-- Header Topbar Language End -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Header Topbar Logo Start -->
                    <div class="header--topbar-logo">
                        <a href="{{ route('index')}}"><img src="{{asset('img/logo.jpg')}}" alt="" data-rjs="2"></a>
                    </div>
                    <!-- Header Topbar Logo End -->


                </div>
            </div>
            <!-- Header Topbar End -->
            
            <!-- Header Navbar Wrapper Start -->
            <div data-sticky="true">
                <nav class="header--navbar-wrapper">
                    <div class="container">
                        <!-- Header Navbar Start -->
                        <div class="header--navbar navbar bg--color-theme">
                            <!-- Header Navbar Header Start -->
                            <div class="navbar-header">
                                <!-- Header Nav Links Start -->
                                <!-- Header Nav Links End -->

                                <!-- Header Navbar Toggle Button Start -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Header Navbar Toggle Button End -->
                            </div>
                            <!-- Header Navbar Header End -->
                            
                            <!-- Header Nav Start -->
                            <div id="headerNav" class="header--nav navbar-collapse collapse">
                                
                                <!-- Header Nav Links Start -->
                                <ul class="header--nav-links nav navbar-nav">
                                    <li><a href="{{ route('sobre') }}">@lang('navbar.about') </a></li>
                                    <li><a href="{{ route('servicios') }}">@lang('navbar.integral_service')</a></li>
                                    <li><a href="{{ route('certificados') }}">@lang('navbar.certifications')</a></li>
                                    <li><a href="{{ route('industrias') }}">@lang('navbar.industries_devices')</a></li>
                                    <li><a href="{{ route('geografico') }}">@lang('navbar.geographical_reach')</a></li>
                                    <li><a href="{{ route('contacto') }}">@lang('navbar.contact')</a></li>
                                </ul>
                                <!-- Header Nav Links End -->
                            </div>
                            <!-- Header Nav End -->
                        </div>
                        <!-- Header Navbar End -->
                    </div>
                </nav>
            </div>
            <!-- Header Navbar Wrapper End -->
        </header>
        <!-- Header Section End -->

        @yield('content')

        <!-- Footer Section Start -->
        <div id="footer" class="pd--50-0-0 bg--color-lightgray">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets">
                <div class="container">
                    <div class="row AdjustRow">
                        <!-- Footer Widget Start -->
                        <div class="footer--widget col-md-3 col-sm-3 col-xs-12">

                            <!-- About Widget Start -->
                            <div class="about--widget">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

                                <a href="{{ route('sobre') }}" class="btn-link">@lang('navbar.about_footer_button')</a>
                            </div>

                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="footer--widget col-md-4 col-sm-4 col-xs-12">
                            <!-- Footer Title Start -->
                            <div class="footer--title">
                                <div class="text">
                                    <h2 class="h4">@lang('navbar.access')</h2>
                                </div>
                            </div>
                            <div class="links--widget">
                                <ul>
                                    <li><a href="{{ route('sobre')}}">@lang('navbar.about')</a></li>
                                    <li><a href="{{ route('servicios')}}">@lang('navbar.integral_service')</a></li>
                                    <li><a href="{{ route('certificados')}}">@lang('navbar.certifications')</a></li>
                                    <li><a href="{{ route('industrias')}}">@lang('navbar.industries_devices')</a></li>
                                    <li><a href="{{ route('geografico')}}">@lang('navbar.geographical_reach')</a></li>
                                </ul>
                            </div>
                            

                            <!-- Recent Posts List Widget End -->
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="footer--widget col-md-5 col-sm-5 col-xs-12">
                            <!-- Footer Title Start -->
                            <div class="footer--title">
                                <div class="text">
                                    <h2 class="h4">@lang('navbar.contact_footer')</h2>
                                </div>
                            </div>
                            <a href=" {{ route('contacto') }}" class="btn btn-default">@lang('navbar.contact_footer_button')</a>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Menu Start -->
            <div class="footer--menu">
                <div class="container-fluid bg--color-theme">
                    <div class="footer--menu-wrapper">
                        <ul>
                            <!-- <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Menu End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright bg--color-theme">
                <div class="container">
                    <p>@lang('navbar.rights_footer')</p>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Button Start -->
        <div id="backToTop">
            <a href="#" class="btn btn-default active"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Back To Top Button End -->
    </div>
    <!-- Wrapper End -->
    
    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/57dfd4b85dc7a25e92808cf6/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script> -->
    <!--End of Tawk.to Script-->
    
    @yield('map')
    @yield('jquery')

    <!-- ==== Bootstrap ==== -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    <!-- ==== FakeLoader Plugin ==== -->
    <script src="{{ asset('js/fakeLoader.min.js')}}"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{ asset('js/isotope.min.js')}}"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>

    <!-- ==== Magnific Popup Plugin ==== -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>

    <!-- ==== jQuery StickyJS Plugin ==== -->
    <script src="{{ asset('js/jquery.sticky.js')}}"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>

    <!-- ==== jQuery CounterUp Plugin ==== -->
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="{{ asset('js/retina.min.js')}}"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="{{ asset('js/main.js')}}"></script>

    @yield('scripts')
</body>
</html>
