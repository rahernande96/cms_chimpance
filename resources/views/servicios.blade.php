@extends('layouts.site')
@section('content')
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
                        <h3 class="sobre-titulo">@lang('services.title')</h3>
                        <p class="parrafos-servicios">@lang('services.paragraph_1')</p>
                        <p class="parrafos-servicios">@lang('services.paragraph_2') </p>
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
                    <h4 class="titulo-servicios"><b>@lang('services.sub_title')</b></h4>
                </div>
                <div class="col-md-9">
                    <div>
                        <!-- FAQ Items Start -->
                        <div class="faq--items panel-group" id="faqItems01">
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem01" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">@lang('services.faqs.1.title')</a>
                                    </h3>
                                </div>

                                <div id="faqItem01" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>@lang('services.faqs.1.paragraph_1')</p>
                                            <p>@lang('services.faqs.1.paragraph_2')</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem02" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">@lang('services.faqs.2.title')</a>
                                    </h3>
                                </div>

                                <div id="faqItem02" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>@lang('services.faqs.2.paragraph_1')</p>
                                            <p>@lang('services.faqs.2.paragraph_2') </p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem03" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">@lang('services.faqs.3.title')</a>
                                    </h3>
                                </div>

                                <div id="faqItem03" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>@lang('services.faqs.3.paragraph_1')</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem04" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">@lang('services.faqs.4.title')</a>
                                    </h3>
                                </div>

                                <div id="faqItem04" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>@lang('services.faqs.4.paragraph_1')</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                            
                            <!-- FAQ Item Start -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="#faqItem05" class="collapsed bg--color-theme" data-toggle="collapse" data-parent="#faqItems01">@lang('services.faqs.5.title')</a>
                                    </h3>
                                </div>

                                <div id="faqItem05" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <blockquote>
                                            <p>@lang('services.faqs.5.paragraph_1')</p>
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


@endsection
@section('jquery')
<!-- ==== jQuery Library ==== -->
<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>
<!-- ==== Bootstrap ==== -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $('#item-nav-2').addClass('active');
</script>
@endsection