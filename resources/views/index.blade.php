@extends('layouts.site')

@section('content')

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
            <h2 class="h2">@lang('index.title_1.1') <span class="colorletras">@lang('index.title_1.2')</span > @lang('index.title_1.3') <span class="colorletras">@lang('index.title_1.4')</span> @lang('index.title_1.5') <br> @lang('index.title_1.6') </h2>
        </div>
        <!-- Section Title End -->

        <div class="row">
            <div class="col-md-3 col-xs-6 col-xxs-12 ">
                <!-- Service Item Start -->
                <div class="service--item" style="padding-bottom:10px;">
                    <span class="icon-vinculacion iconosnuevos"></span>
                    <!-- <img src="img/iconos/Recurso 4.png" alt="" class="iconosnuevos"> -->

                    <h3 class="h4">@lang('index.services.1')</h3>
                </div>
                <!-- Service Item End -->
            </div>
            <div class="col-md-3 col-xs-6 col-xxs-12 ">
                <!-- Service Item Start -->
                <div class="service--item">
                    <span class="icon-eficaz iconosnuevos"></span>
                    <!-- <img src="img/icononegro.png" alt="" class="iconosnuevos"> -->

                    <h3 class="h4">@lang('index.services.2')</h3>
                </div>
                <!-- Service Item End -->
            </div>
            <div class="col-md-3 col-xs-6 col-xxs-12 ">
                <!-- Service Item Start -->
                <div class="service--item" style="padding-bottom:34px;">
                    <span class="icon-mundo iconosnuevos"></span>
                    <!-- <img src="img/iconos/Recurso 2.png" alt="" class="iconosnuevos"> -->

                    <h3 class="h4">@lang('index.services.3')</h3>
                </div>
                <!-- Service Item End -->
            </div>
            <div class="col-md-3 col-xs-6 col-xxs-12 ">
                <!-- Service Item Start -->
                <div class="service--item">
                    <span class="icon-15 iconosnuevos"></span>
                    <!-- <img src="img/iconos/Recurso 1.png" alt="" class="iconosnuevos"> -->

                    <h3 class="h4">@lang('index.services.4')</h3>
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
                               <h4 class="titulohacemos">@lang('index.features.title')</h4>
                               <p class="parrafohacemos">@lang('index.features.paragraph') </p>
                               <h4 class="otrohacemos colorletras">@lang('index.features.title_link')</h4>
                               <a href="{{ route('sobre') }}" class="btn btn-default">@lang('index.features.title_button')</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature Items End -->

            <!-- Feature Video Start -->
            <div class="feature--video col-md-6 pt--100 pb--100" data-bg-img="img/video.png">
                <h2 class="h1 segundo-titulo">@lang('index.features.title_video')</h2>

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
            <h2 class="h2">@lang('index.services_tab.title')</h2>
        </div>
        <!-- Section Title End -->

<!-- Service Tab Nav Start -->
            <div class="service-tab--nav col-md-6">
                <ul class="bg--color-lightgray row">

                    <li class="col-md-12">
                        <div data-toggle="tab" data-target="#servicesTabItem01">
                            <h3 class="h3">¿@lang('index.services_tab.link_title_1')?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                        </div>
                    </li>

                    <li class="col-md-12">
                        <div data-toggle="tab" data-target="#certificado">
                            <h3 class="h3">¿@lang('index.services_tab.link_title_2')?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                        </div>
                    </li>

                    <li class="col-md-12">
                        <div data-toggle="tab" data-target="#pais">
                            <h3 class="h3">¿@lang('index.services_tab.link_title_3')?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                        </div>
                    </li>

                    <li class="col-md-12">
                        <div data-toggle="tab" data-target="#tecnologia">
                            <h3 class="h3">¿@lang('index.services_tab.link_title_4')?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
                        </div>
                    </li>

                    <li class="col-md-12">
                        <div data-toggle="tab" data-target="#regulaciones">
                            <h3 class="h3">¿@lang('index.services_tab.link_title_5')?</h3><i class="fa fa-angle-double-right nuevoicono" aria-hidden="true" ></i>
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
                        <h3 class="title h3">@lang('index.services_tab.sub_title_1')</h3>
                        <p>@lang('index.services_tab.paragraph_1')</p>
                        <img src="img/1.jpg" alt="" class="imagenresponsive">
                    </div>

                    <div id="certificado" class="tab-pane fade">
                        <h3 class="title h3">@lang('index.services_tab.sub_title_2')</h3>
                        <p>@lang('index.services_tab.paragraph_2')</p>
                        <img src="img/2.jpg" alt="" class="imagenresponsive">
                    </div>

                    <div id="pais" class="tab-pane fade">
                        <h3 class="title h3">@lang('index.services_tab.sub_title_3')</h3>
                        <p>@lang('index.services_tab.paragraph_3') </p>
                        <img src="img/3.jpg" alt="" class="imagenresponsive">
                    </div>

                    <div id="tecnologia" class="tab-pane fade">
                        <h3 class="title h3">@lang('index.services_tab.sub_title_4')</h3>
                        <p>@lang('index.services_tab.paragraph_4')</p>
                        <img src="img/4.jpg" alt="" class="imagenresponsive">
                    </div>

                    <div id="regulaciones" class="tab-pane fade">
                        <h3 class="title h3">@lang('index.services_tab.sub_title_5')</h3>
                        <p>@lang('index.services_tab.paragraph_5')</p>
                        <img src="img/5.jpg" alt="" class="imagenresponsive">
                    </div>

                </div>
            </div>



    </div>
</div>

@endsection
@section('jquery')
<!-- ==== jQuery Library ==== -->
<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>
@endsection