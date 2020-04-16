<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- chimpace -->
    <!-- Document Title -->
    <title>APPROVE IT </title>

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

        <!-- Banner Section Start -->
        <div id="banner">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                
                @forelse($banners as $baneer)
                    @php

                    $btn ="";
                    $title ="";
                    $description ="";
                        
                    if ($baneer->btn_content != null && $baneer->btn_link != null) 
                    {
                        $btn = '<a href="'.$baneer->btn_link.'" class="btn btn-default white">'.$baneer->btn_content.'</a>';
                    }

                    if ($baneer->title != null) 
                    {
                        $title = '<h1 class="h2 titulo1">'.$baneer->title.'</h1>';
                    }

                    if ($baneer->description != null) {
                        $description = '<h2 class="h4 titulo2">'.$baneer->description.'</h2>';
                    }

                    @endphp
                    <!-- Banner Item Start -->
                        <div class="banner--item" data-bg-img="{{ Storage::disk('public')->url($baneer->url_image)}}">
                            <div class="container">
                                <div class="row">
                                    <!-- Banner Content Start -->
                                    <div class="banner--content col-md-6">
                                        {!!$title!!}

                                        {!!$description!!}

                                        {!!$btn!!}
                                    </div>
                                    <!-- Banner Content End -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Banner Item End -->
                @empty
                @endforelse

            </div>
            <!-- Banner Slider End -->
        </div>

        <!-- Services Section Start -->
        <div id="services" class="pd--100-0-40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title text-center">
                    <h2 class="h2">La solucion más <span class="colorletras">eficaz</span > en servicios de <span class="colorletras">certificación</span> global <br> de productos de telecomunicaciones. </h2>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-3 col-xs-6 col-xxs-12 ">
                        <!-- Service Item Start -->
                        <div class="service--item" style="padding-bottom:10px;">
                            <span class="icon-vinculacion iconosnuevos"></span>
                            <!-- <img src="img/iconos/Recurso 4.png" alt="" class="iconosnuevos"> -->

                            <h3 class="h4">Vinculación directa con laboratorios y agencias reguladoras.</h3>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <div class="col-md-3 col-xs-6 col-xxs-12 ">
                        <!-- Service Item Start -->
                        <div class="service--item">
                            <span class="icon-eficaz iconosnuevos"></span>
                            <!-- <img src="img/icononegro.png" alt="" class="iconosnuevos"> -->

                            <h3 class="h4">Gestión eficaz y precios competitivos.</h3>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <div class="col-md-3 col-xs-6 col-xxs-12 ">
                        <!-- Service Item Start -->
                        <div class="service--item" style="padding-bottom:34px;">
                            <span class="icon-mundo iconosnuevos"></span>
                            <!-- <img src="img/iconos/Recurso 2.png" alt="" class="iconosnuevos"> -->

                            <h3 class="h4">Más de 250 países y territorios</h3>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <div class="col-md-3 col-xs-6 col-xxs-12 ">
                        <!-- Service Item Start -->
                        <div class="service--item">
                            <span class="icon-15 iconosnuevos"></span>
                            <!-- <img src="img/iconos/Recurso 1.png" alt="" class="iconosnuevos"> -->

                            <h3 class="h4">Más de 15 años de experiencia</h3>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    

                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Features Section Start -->
        <div id="features">
            <div class="container-fluid">
                <div class="row">
                    <!-- Feature Items Start -->
                    <div class="feature--items col-md-6 pt--100 pb--40 colorbase pt--50">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row AdjustRow">
                                   <div class="col-md-12">
                                       <h4 class="titulohacemos">¿Qué hacemos?</h4>
                                       <p class="parrafohacemos">Nos especializamos en certificaciones de productos de telecomunicaciones, borrar EMC y seguridad eléctrica. Lo asesoramos en todas y cada una de las instancias del proceso mediante un servicio integral , confidencial, rápido , eficiente y con la mejor relación costo/beneficio del mercado. </p>
                                       <h4 class="otrohacemos colorletras">¿Desea conocer mas más sobre Approve-It S.A ?</h4>
                                       <a href="{{ route('sobre') }}" class="btn btn-default">LEER MÁS</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Items End -->

                    <!-- Feature Video Start -->
                    <div class="feature--video col-md-6 pt--100 pb--100" data-bg-img="img/video.png">
                        <h2 class="h1 segundo-titulo">¿Cómo es nuestra metodología de trabajo?</h2>

                        <a href="https://www.youtube.com/watch?v=2GqExKSwTEA" class="feature--video-play-btn" data-popup="video"><i class="fa fa-play"></i></a>

                    </div>
                    <!-- Feature Video End -->
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- Services Tab Section Start -->
        <div id="servicesTab" class="pd--100-0">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title text-center">
                    <h2 class="h2">¿En que podemos ayudarlo?</h2>
                </div>
                <!-- Section Title End -->

 <!-- Service Tab Nav Start -->
                    <div class="service-tab--nav col-md-6">
                        <ul class="bg--color-lightgray row">

                            <li class="col-md-12">
                                <div data-toggle="tab" data-target="#servicesTabItem01">
                                    <h3 class="h3">¿Lanzar un nuevo producto?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                                </div>
                            </li>

                            <li class="col-md-12">
                                <div data-toggle="tab" data-target="#certificado">
                                    <h3 class="h3">¿Cambiar un producto que haya sido certificado?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                                </div>
                            </li>

                            <li class="col-md-12">
                                <div data-toggle="tab" data-target="#pais">
                                    <h3 class="h3">¿Entrar en un nuevo país?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                                </div>
                            </li>

                            <li class="col-md-12">
                                <div data-toggle="tab" data-target="#tecnologia">
                                    <h3 class="h3">¿Incorporar una nueva frecuencia o tecnología?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                                </div>
                            </li>

                            <li class="col-md-12">
                                <div data-toggle="tab" data-target="#regulaciones">
                                    <h3 class="h3">¿Información específica sobre regulaciones?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                                </div>
                            </li>

                            
                        </ul>
                    </div>
                    <!-- Service Tab Nav End -->

                    <!-- Service Tabs End -->
                    <div class="service--tabs col-md-6">
                        <!-- Tab Content Start -->
                        <div class="tab-content">
                            <!-- Tab Pane Start -->

                            <div id="servicesTabItem01" class="tab-pane fade in active">
                                <h3 class="title h3">Lanzar un nuevo proyecto</h3>
                                <p>Determinamos un plan de acción adaptado a las características de su producto y de la regulación aplicacble.</p>
                                <img src="img/1.jpg" alt="" class="imagenresponsive">
                            </div>

                            <div id="certificado" class="tab-pane fade">
                                <h3 class="title h3">Cambiar un producto que haya sido certificado</h3>
                                <p>Analizamos el modo en que los cambios impactarán en su certificación y la estrategia a seguir actualizar la certificación de su producto.</p>
                                <img src="img/2.jpg" alt="" class="imagenresponsive">
                            </div>

                            <div id="pais" class="tab-pane fade">
                                <h3 class="title h3">Certificar en un nuevo país</h3>
                                <p>Analizaremos los requisitos que debe cumplir su producto para la certificación en el nuevo mercado y diseñamos un plan estratégico para la obtención del mismo. </p>
                                <img src="img/3.jpg" alt="" class="imagenresponsive">
                            </div>

                            <div id="tecnologia" class="tab-pane fade">
                                <h3 class="title h3">Incorporar una nueva frecuencia o tecnología</h3>
                                <p>Asesoramos sobre el espectro radioeléctrico disponible en cada país. Lo asesoramos sobre los requerimientos necesarios para la certificación.</p>
                                <img src="img/4.jpg" alt="" class="imagenresponsive">
                            </div>

                            <div id="regulaciones" class="tab-pane fade">
                                <h3 class="title h3">Investigación</h3>
                                <p>Aceptamos nuevos desafíos y estamos dispuestos a investigar todo lo que necesita saber sobre un país, una tecnología y/o sistema regulatorio.</p>
                                <img src="img/5.jpg" alt="" class="imagenresponsive">
                            </div>

                        </div>
                    </div>



            </div>
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

                                <a href="sobre.html" class="btn-link">Más sobre Approve It</a>
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
                            <a href="contacto.html" class="btn btn-default">Déjenos su mensaje</a>

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
