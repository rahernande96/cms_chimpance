@extends('layouts.site')

@section('content')
<!-- Page Header Section Start -->
        <div id="pageHeader" class="pd--80-0" data-bg-img="{{ asset('img/fondo3.png') }}">
        </div>
        <!-- Page Header Section End -->

        <!-- Page Wrapper Section Start -->
        <div id="pageWrapper" class="pd--100-0-40">
            <div class="container">
                <!-- Page Content Start -->
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="sobre-titulo">@lang('certifications.page_wrapper.title')</h3>
                        <p class="parrafos-servicios">@lang('certifications.page_wrapper.paragraph')</p>
                    </div>
                </div>
                <!-- Page Content End -->
            </div>
        </div>
        <div class="container">
            <div class="row primerafila">
                <div class="col-md-6">
                    <img src="img/certificados01.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="titulo-certificados">@lang('certifications.certification_1.title')</h2>
                    <p class="subtitulo-certificados">@lang('certifications.certification_1.paragraph_1') 
                    </p>
                    <p class="subtitulo-certificados">@lang('certifications.certification_1.paragraph_2')
                    </p>
                </div>
            </div>
            <div class="row segundafila">
                <div class="col-md-6">
                   <img src="img/certificados02.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="titulo-certificados">@lang('certifications.certification_2.title')</h2>
                    <p class="subtitulo-certificados">@lang('certifications.certification_2.paragraph_1')
                    </p>
                    <p class="subtitulo-certificados">@lang('certifications.certification_2.paragraph_2')
                    </p>
                    <p class="subtitulo-certificados">@lang('certifications.certification_2.paragraph_3')</p>
                    <p class="subtitulo-certificados">@lang('certifications.certification_2.paragraph_4')</p>
                </div>
                
            </div>
        </div>
@endsection
@section('jquery')
<!-- ==== jQuery Library ==== -->
<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>
<!-- ==== Bootstrap ==== -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
@endsection