<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Document Title -->
    <title>APPROVE IT</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png')}}" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRaleway:300,400,500,600,700" rel="stylesheet">

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
    <link href="{{ asset('style.css')}}" rel="stylesheet">
    
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
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">Español<span class="caret"></span></button>

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
                                <!-- Header Nav Links End -->
                                
                                <!-- Header Nav Links Start -->
                                <ul class="header--nav-links nav navbar-nav">
                                    <li><a href="{{ route('sobre') }}">Sobre Approve-it S.A </a></li>
                                    <li><a href="{{ route('servicios') }}">Nuestro Servicio Integral</a></li>
                                    <li><a href="{{ route('certificados') }}">Certificaciones</a></li>
                                    <li><a href="{{ route('industrias') }}">Industrias y dispositivos</a></li>
                                    <li><a href="{{ route('geografico') }}">Alcance Geográfico</a></li>
                                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
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

        <!-- Page Header Section Start -->
        <div id="pageHeader" class="pd--80-0" data-bg-img="img/fondo4.png">
        </div>
        <!-- Page Header Section End -->

        <!-- Page Wrapper Section Start -->
        <div id="pageWrapper" class="pd--100-0-40">
            <div class="container">
                <!-- Page Content Start -->
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="sobre-titulo">Industrias y Dispositivos</h3>
                        <p class="parrafos-servicios">Abarcamos el espectro más amplio en certificaciones.</p>
                    </div>
                </div>
                <!-- Page Content End -->
            </div>
        </div>
        <div>
            <!-- Pricing Section Start -->
        <div id="pricing" class="pd--100-0-40">
            <div class="container">
                <div class="row AdjustRow">

                    <div class="col-md-4 col-xs-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg--color-theme">
                                <h3 class="h4">Industrias</h3>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav listasindustrias">
                                    <li>Agrícola y Forestal</li>
                                    <li>Automotor</li>
                                    <li>Electrónica de consumo</li>
                                    <li>Construcción / Equipo Pesadodo</li>
                                    <li>Salud y belleza</li>
                                    <li>Electrodomésticos</li>
                                    <li>Industria comercial</li>
                                    <li>IOT</li>
                                    <li>Médica</li>
                                    <li>Robótica</li>
                                    <li>Juguetes</li>
                                    <li>Telecomuniaciones</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg--color-theme">
                                <h3 class="h4">Dispositivos</h3>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav listasindustrias">
                                    <li>Puntos de accesos</li>
                                    <li>Electrodomésticos</li>
                                    <li>Audio video</li>
                                    <li>Estaciones base</li>
                                    <li>Cámaras digitales</li>
                                    <li>Car Audio/Radio</li>
                                    <li>Componentes(Radio modulos)</li>
                                    <li>Teclados, ratos, dongles</li>
                                    <li>Drones</li>
                                    <li>Dispositivos de fitness / weareables</li>
                                    <li>Cortafuegos</li>
                                    <li>Consolas de juegos</li>
                                    <li>FOB claves, sistemas de entrada</li>
                                    <li>Ordenadores portátiles, cuadernos</li>
                                    <li>Implantes médicos</li>
                                    <li>Módems</li>
                                    <li>Equipos de monitoreo: temperatura, presión, nivel de flujo</li>
                                    <li>Impresoras/Faxes</li>
                                    <li>Controles remotos</li>
                                    <li>Enrutadores</li>
                                    <li>Amplificadores de señal</li>
                                    <li>Teléfonos inteligentes</li>
                                    <li>Relojes inteligentes</li>
                                    <li>Interruptores</li>
                                    <li>Tabletas</li>
                                    <li>Sistemas de alarma / seguridad</li>
                                    <li>Juguetes inalámbricos</li>
                                    <li>Telemática</li>
                                    <li>GPS</li>
                                    <li>Sensores, lectores RFID</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg--color-theme">
                                <h3 class="h4">Tecnologías</h3>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav listasindustrias">
                                    <li>Analógico (RJ-11, Fax) y Digital</li>
                                    <li>Bluetooth</li>
                                    <li>Celular: GSM / CDMA, UMTS, LTE, 4G</li>
                                    <li>RDSI, E1, T1, Telecom</li>
                                    <li>NFC, RFID</li>
                                    <li>Radar: 24 GHz, 76-77 GHz, etc</li>
                                    <li>Satélite: GPS, GLONASS, Galileo, Compás, SBAS</li>
                                    <li>SRD: Short Range Devices / LPD: Low Power Devices </li>
                                    <li>WiFi 802.11a / b / g / n / ac / ad / ay / ah</li>
                                    <li>Carga inalámbrica (Qi, A4WP, etc.)</li>
                                    <li>ZIGBEE, HART inalámbricociones</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Pricing Section End -->
        </div>




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

                                <a href="{{ route('sobre')}}" class="btn-link">Más sobre Approve It</a>
                            </div>

                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="footer--widget col-md-3 col-sm-4 col-xs-12">
                            <!-- Footer Title Start -->
                            <div class="footer--title">
                                <div class="text">
                                    <h2 class="h4">Accesos</h2>
                                </div>
                            </div>
                            <div class="links--widget">
                                <ul>
                                    <li><a href="{{ route('sobre')}}">Sobre Approve It</a></li>
                                    <li><a href="{{ route('servicios')}}">Nuestro servicio Integral</a></li>
                                    <li><a href="{{ route('certificados')}}">Certificaciones</a></li>
                                    <li><a href="{{ route('industrias')}}">Industrias y dispositivos</a></li>
                                    <li><a href="{{ route('geografico')}}">Alcance geografico</a></li>
                                </ul>
                            </div>
                            

                            <!-- Recent Posts List Widget End -->
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="footer--widget col-md-6 col-sm-5 col-xs-12">
                            <!-- Footer Title Start -->
                            <div class="footer--title">
                                <div class="text">
                                    <h2 class="h4">¿Necesita contactarse con un asesor?</h2>
                                </div>
                            </div>
                            <a href="{{ route('contacto')}}" class="btn btn-default">Déjenos su mensaje</a>

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
                    <p>All Rights Reserved</p>
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

    <!-- ==== jQuery Library ==== -->
    <script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>

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
</body>
</html>
