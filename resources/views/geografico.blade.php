@extends('layouts.site')
@section('head')

    <!-- mapa css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-2.0.3.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mapa.css')}}">

@endsection

@section('content')

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
                        <h3 class="sobre-titulo">@lang('geographical.title')</h3>
                        <p class="parrafos-servicios">@lang('geographical.paragraph.1') <span class="nuevafunte">@lang('geographical.paragraph.2')</span> @lang('geographical.paragraph.3')</p>
                        <p class="parrafos-servicios"><span class="colorletras">>> @lang('geographical.paragraph.4') </span> @lang('geographical.paragraph.5')</p>
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
        <button type="button" id="cambiar" >@lang('geographical.btn_return')</button>
        <div id="dialog" title="titulo pais">
            <p></p>
        </div>
        


         <!-- ******************* CIERRA MAPA **********************-->

@endsection

@section('map')
    <!-- Scripts Map -->
    <script src="{{ asset('js/mapa/jquery.js')}}"></script>
    <script src="{{ asset('js/mapa/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{ asset('js/mapa/jquery-jvectormap-latinamerica.js')}}"></script>
    <script src="{{ asset('js/mapa/jquery-jvectormap-caribe.js')}}"></script> 
    <script src="{{ asset('js/mapa/jquery-ui.js')}}"></script> 
    <script src="{{ asset('js/mapa/mapa.js')}}"></script> 

@endsection


       






  