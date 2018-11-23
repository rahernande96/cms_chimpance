<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- chimpancÉ -->
    <!-- Document Title -->
    <title>APPROVE IT</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link href="{{ asset('css/responsive-style.css')}}" rel="stylesheet">
    
    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="{{ asset('css/colors/theme-color-1.css')}}" rel="stylesheet" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

    <!-- mapa css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-2.0.3.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mapa.css')}}">


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
        <div id="pageHeader" class="pd--80-0" data-bg-img="img/map.jpg">
        </div>
        <!-- Page Header Section End -->

        <!-- Page Wrapper Section Start -->
        <div id="pageWrapper" class="pd--100-0-40">
            <div class="container">
                <!-- Page Content Start -->
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="sobre-titulo">Alcance geográfico</h3>
                        <p class="parrafos-servicios">Realizamos servicios de certificación de productos de telecomunicaciones en toda <span class="nuevafunte">América Latina y el Caribe.</span> Nos conectamos directamente con los reguladores en cada área.</p>
                        <p class="parrafos-servicios"><span class="colorletras">>> Haga click </span> en el lugar donde desea ir para averiguar qué necesita saber:</p>
                    </div>
                </div>
                <!-- Page Content End -->
            </div>
        </div>
    

        <!-- ******************* ACA PONER EL MAPA **********************-->
        
        <div class="map-container">
            <div id="map"></div>
            <div id="map-caribe"></div>
        </div>
        <button type="button" id="cambiar" >Volver</button>
        <div id="dialog" title="titulo pais">
            <p></p>
        </div>
        


         <!-- ******************* CIERRA MAPA **********************-->




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

    <!-- mapa js-->
    <script src="{{ asset('js/mapa/jquery-map.min.js')}}"></script>
    <script src="{{ asset('js/mapa/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{ asset('js/mapa/jquery-jvectormap-latinamerica.js')}}"></script>
    <script src="{{ asset('js/mapa/jquery-jvectormap-caribe.js')}}"></script> 
    <script src="{{ asset('js/mapa/jquery-ui.js')}}"></script> 
    

    <!-- ==== jQuery Library ==== -->
   

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

    <script type="text/javascript">
        $(function(){
        
        
      var ancho=$( window ).width();
      var alto=$( window ).height();
      $('#map').height(alto);
      if (ancho >='1024'){
          var anchod='500';
      }
      if (ancho <= '768'){
          var anchod=(ancho-40);
          var pmy='center bottom';
          var pat='center bottom';
          var malto=(alto/2);
          var radi=10;
          var maxz=30;
      }else{
          var pmy='right top';
          var pat='right-10 top+10';
          var malto=alto-50;
          var radi=5;
          var maxz=20;
      }
           $('#map').vectorMap({
                map: 'america1_mill',
                backgroundColor: 'white',
                focusOn: { x: 0.235, y: 0.36, scale: 1, animate: true },
                series: {
                        regions: [{
                            values: {
                                'BO': '#a2d77f',
                                'JM': '#9dca60',
                                'BR': '#83b348',
                                'BS': '#7fc03b',
                                'BZ': '#96ce4a',
                                'GT': '#7db03b',
                                'GY': '#5d8c2f',
                                'HT': '#456d24',
                                'HN': '#2e4d1a',
                                'PR': '#a2d77f',
                                'PY': '#9dca60',
                                'PA': '#83b348',
                                'PE': '#7fc03b',
                                'EC': '#5d8c2f',
                                'MX': '#456d24',
                                'FK': '#2e4d1a',
                                'NI': '#a2d77f',
                                'CO': '#9dca60',
                                'CL': '#83b348',
                                'CR': '#7fc03b',
                                'CU': '#5d8c2f',
                                'SV': '#456d24',
                                'DO': '#2e4d1a',
                                'UY': '#a2d77f',
                                'TT': '#9dca60',
                                'VE': '#83b348',
                                'AR': '#7fc03b',
                                'SR': '#5d8c2f',
                                'VG': '#456d24',
                                'AI': '#5d8c2f',
                                'AW': '#2e4d1a',
                                'AG': '#83b348',
                                'BB': '#5d8c2f',
                                'BQ': '#9dca60',
                                'KY': '#456d24',
                                'CW': '#83b348',
                                'DM': '#2e4d1a',
                                'GD': '#5d8c2f',
                                'MS': '#7fc03b',
                                'KN': '#5d8c2f',
                                'LC': '#9dca60',
                                'SX': '#5d8c2f',
                                'VC': '#456d24',
                                'TC': '#5d8c2f',
                                'FR': '#456d24'
                                
                            },
                            attribute: 'fill'
                        }]
                    }, 
                onRegionClick: function(e,  code){
                    if((code=='VG') || (code=='VI') || (code=='AI') || (code=='AG') || (code=='AW') || (code=='BB') || (code=='BQ') || (code=='KY') || (code=='BB') || (code=='CW') || (code=='DM') || (code=='GD') || (code=='MS') || (code=='KN') || (code=='LC') || (code=='SX') || (code=='VC') || (code=='TC') || (code=='BL') || (code=='BS') ){
                        $('#map').hide();
                        $('#map').css('z-index', 1);
                        $('#map-caribe').show();
                        $('#map-caribe').css('z-index', 10);
                        $('#cambiar').show();
                    }
                    $.post( "{{ route('map-data') }} ", { code: code })
                      .done(function( data ) {
                        $("#dialog").html(data.contenido);
                        $( "#dialog" ).dialog({
                              title: data.titulo,
                              width: anchod,
                              position: { 
                                  my: pmy,
                                  at: pat,
                                  of: $('body')
                               },  
                              maxHeight: malto
                              
                            });
                      },'json');
                    
                },
                zoomOnScroll:true,
                zoomMax: maxz,
              onRegionTipShow: function(e, el, code){
                  el.html(el.html());
                }
            })

     

    
            $('#map-caribe').vectorMap({
                map: "caribe",
                backgroundColor: '#fff',
                onRegionClick: function(e,  code){
                    $.post( "{{route('map-data')}}", { 
                        code: code,
                    }).headers( {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        })
                      .done(function( data ) {
                        $("#dialog").html(data.contenido);
                        $( "#dialog" ).dialog({
                              title: data.titulo,
                              width: anchod,
                              position: { 
                                  my: pmy,
                                  at: pat,
                                  of: $('body')
                               },  
                              maxHeight: malto
                              
                            });
                      },'json');
                    
                },

                series: {
                    regions: [{
                        values: {
                            'BO': '#a2d77f',
                            'JM': '#9dca60',
                            'BR': '#83b348',
                            'BS': '#7fc03b',
                            'BZ': '#96ce4a',
                            'GT': '#7db03b',
                            'GY': '#5d8c2f',
                            'HT': '#456d24',
                            'HN': '#2e4d1a',
                            'PR': '#a2d77f',
                            'PY': '#9dca60',
                            'PA': '#83b348',
                            'PE': '#7fc03b',
                            'EC': '#5d8c2f',
                            'MX': '#456d24',
                            'FK': '#2e4d1a',
                            'NI': '#a2d77f',
                            'CO': '#9dca60',
                            'CL': '#83b348',
                            'CR': '#7fc03b',
                            'CU': '#5d8c2f',
                            'SV': '#456d24',
                            'DO': '#2e4d1a',
                            'UY': '#a2d77f',
                            'TT': '#9dca60',
                            'VE': '#83b348',
                            'AR': '#7fc03b',
                            'SR': '#5d8c2f',
                            'VG': '#456d24',
                            'AI': '#5d8c2f',
                            'AW': '#2e4d1a',
                            'AG': '#83b348',
                            'BB': '#5d8c2f',
                            'BQ': '#9dca60',
                            'KY': '#456d24',
                            'CW': '#83b348',
                            'DM': '#2e4d1a',
                            'GD': '#5d8c2f',
                            'MS': '#7fc03b',
                            'KN': '#5d8c2f',
                            'LC': '#9dca60',
                            'SX': '#5d8c2f',
                            'VC': '#456d24',
                            'TC': '#5d8c2f',
                            'FR': '#456d24'
                        }
                    }]
                },
                onRegionTipShow: function(e, el, code){
                    el.html(el.html());
                  }
            });
    
          $('#cambiar').click(function(e){
                e.preventDefault();
                $('#map-caribe').hide();
                $('#map-caribe').css('z-index', 1);
                $('#map').show();
                $('#map').css('z-index', 3000);
                
            });
    });
    </script>

</body>
</html>
