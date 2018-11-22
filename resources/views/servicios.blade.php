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
        <div id="pageHeader" class="pd--80-0" data-bg-img="img/certif.jpg">
        </div>
        <!-- Page Header Section End -->

        <!-- Page Wrapper Section Start -->
        <div id="pageWrapper" class="pd--100-0-40">
            <div class="container">
                <!-- Page Content Start -->
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="sobre-titulo">Nuestro servicio integral</h3>
                        <p class="parrafos-servicios">Trabajamos para garantizar el servicio de certificación más rápido y eficiente sin intermediarios y de manera confidencial. Brindamos acompañamiento en todas y cada una de las instancias del proceso normativo para equipos inalámbricos, telecomunicaciones, seguridad eléctrica, entre otros.</p>
                        <p class="parrafos-servicios">Con el objetivo de satisfacer las necesidades del cliente, ofrecemos asesoramiento de tipo integral para cumplir con todos los requisitos y garantizar que sus certificados normativos se reciban a tiempo. </p>
                    </div>
                </div>
                <!-- Page Content End -->
            </div>
        </div>
        <!-- Page Wrapper Section End -->
        <div class="container">
            <div class="row margenabajo">
                <div class="col-md-3" style="background:url('img/imagen-servicios.png');">
                    <!-- <img src="img/imagen-servicios.png" alt=""> -->
                    <h4 class="titulo-servicios"><b>Lo acompañamos de principio a fin en su proceso de aprobación.</b></h4>
                </div>
                <div class="col-md-9">
                    <div>
                        <!-- FAQ Items Start -->
                        <div class="faq--items panel-group" id="faqItems01">
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem01" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">Gestión de proyectos</a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>Nuestros sistema de gestión se basa en normas internacionales de calidad y seguridad. Estamos enfocados en procesar todas las solicitudes de certificación o de investigación, como así también a aceptar nuevos desafíos. Todo ello en el menor tiempo posible y de manera confidencial.</p>
                                            <p>Gracias al respaldo de nuestra amplia red de agentes locales y las relaciones directas con los organismos reguladores, podemos proporcionar información detallada en una entrega ordenada para satisfacer sus solicitudes y alcanzar las formas más rentables para cumplir con los requisitos de su mercado objetivo.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem02" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">Ensayos locales</a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>Tenemos una asociación estratégica con los laboratorios más confiables de cada país.</p>
                                            <p>Proporcionamos soporte y seguimiento técnico personalizado durante el ensayo local del producto para asegurar el cumplimiento de la normativa y/o adecuación del hardware/software. </p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem03" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">Exportación & importación de muestras</a>
                                    </h3>
                                </div>

                                <div id="faqItem03" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>Nuestro equipo de profesionales le proporcionará asistencia completa en el proceso de importación de muestras. Como así también, seguimiento continuo para lograr un rápido despacho de aduanas sin inconvenientes.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem04" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">Gestión de la documentación y presentación ante agencias de certificación</a>
                                    </h3>
                                </div>

                                <div id="faqItem04" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>Proporcionamos asesoramiento legal completo sobre la documentación regulatoria necesaria y lo representamos ante los entes reguladores para que su certificación avance rápidamente.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem05" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">Renovación de certificaciones</a>
                                    </h3>
                                </div>

                                <div id="faqItem05" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>Realizamos una gestión proactiva de ciclo de vida de su producto. Lo mantenemos al tanto de todas aquellas actualizaciones regulatorias que puedan afectar su certificación en el futuro inmediato.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Items End -->
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
