@extends('layouts.site')
@section('content')
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
                        <h3 class="sobre-titulo">@lang('industries.title')</h3>
                        <p class="parrafos-servicios">@lang('industries.paragraph')</p>
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
                                <h3 class="h4">@lang('industries.industries.title')</h3>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav listasindustrias">
                                    <li>@lang('industries.industries.features.1')</li>
                                    
                                    <li>@lang('industries.industries.features.2')</li>
                                    
                                    <li>@lang('industries.industries.features.3')</li>
                                    
                                    <li>@lang('industries.industries.features.4')</li>
                                    
                                    <li>@lang('industries.industries.features.5')</li>
                                    
                                    <li>@lang('industries.industries.features.6')</li>
                                    
                                    <li>@lang('industries.industries.features.7')</li>
                                    
                                    <li>@lang('industries.industries.features.8')</li>
                                    
                                    <li>@lang('industries.industries.features.9')</li>
                                    
                                    <li>@lang('industries.industries.features.10')</li>
                                    
                                    <li>@lang('industries.industries.features.11')</li>
                                    
                                    <li>@lang('industries.industries.features.12')</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg--color-theme">
                                <h3 class="h4">@lang('industries.dispositives.title')</h3>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav listasindustrias">
                                    <li>@lang('industries.dispositives.features.1')</li>
                                    <li>@lang('industries.dispositives.features.2')</li>
                                    <li>@lang('industries.dispositives.features.3')</li>
                                    <li>@lang('industries.dispositives.features.4')</li>
                                    <li>@lang('industries.dispositives.features.5')</li>
                                    <li>@lang('industries.dispositives.features.6')</li>
                                    <li>@lang('industries.dispositives.features.7')</li>
                                    <li>@lang('industries.dispositives.features.8')</li>
                                    <li>@lang('industries.dispositives.features.9')</li>
                                    <li>@lang('industries.dispositives.features.10')</li>
                                    <li>@lang('industries.dispositives.features.11')</li>
                                    <li>@lang('industries.dispositives.features.12')</li>
                                    <li>@lang('industries.dispositives.features.13')</li>
                                    <li>@lang('industries.dispositives.features.14')</li>
                                    <li>@lang('industries.dispositives.features.15')</li>
                                    <li>@lang('industries.dispositives.features.16')</li>
                                    <li>@lang('industries.dispositives.features.17')</li>
                                    <li>@lang('industries.dispositives.features.18')</li>
                                    <li>@lang('industries.dispositives.features.19')</li>
                                    <li>@lang('industries.dispositives.features.20')</li>
                                    <li>@lang('industries.dispositives.features.21')</li>
                                    <li>@lang('industries.dispositives.features.22')</li>
                                    <li>@lang('industries.dispositives.features.23')</li>
                                    <li>@lang('industries.dispositives.features.24')</li>
                                    <li>@lang('industries.dispositives.features.25')</li>
                                    <li>@lang('industries.dispositives.features.26')</li>
                                    <li>@lang('industries.dispositives.features.27')</li>
                                    <li>@lang('industries.dispositives.features.28')</li>
                                    <li>@lang('industries.dispositives.features.29')</li>
                                    <li>@lang('industries.dispositives.features.30')</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg--color-theme">
                                <h3 class="h4">@lang('industries.technologies.title')</h3>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav listasindustrias">
                                    <li>@lang('industries.technologies.features.1')</li>
                                    <li>@lang('industries.technologies.features.2')</li>
                                    <li>@lang('industries.technologies.features.3')</li>
                                    <li>@lang('industries.technologies.features.4')</li>
                                    <li>@lang('industries.technologies.features.5')</li>
                                    <li>@lang('industries.technologies.features.6')</li>
                                    <li>@lang('industries.technologies.features.7')</li>
                                    <li>@lang('industries.technologies.features.8') </li>
                                    <li>@lang('industries.technologies.features.9')</li>
                                    <li>@lang('industries.technologies.features.10')</li>
                                    <li>@lang('industries.technologies.features.11')</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Pricing Section End -->
        </div>


@endsection
@section('jquery')
<!-- ==== jQuery Library ==== -->
<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>
@endsection