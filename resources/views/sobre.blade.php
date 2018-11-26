@extends('layouts.site')
@section('content')

        <!-- Page Header Section Start -->
        <div id="pageHeader" class="pd--80-0" data-bg-img="img/fondosobre.png">
        </div>
        <!-- Page Header Section End -->

        <!-- Page Wrapper Section Start -->
        <div id="pageWrapper" class="pd--100-0-40">
            <div class="container">
                <!-- Page Content Start -->
                <div class="page--content clearfix">
                    <h3 class="sobre-titulo">@lang('about.title')<span class="img alignright"><img src="img/hands.jpg" style="width:560px;" class="nuevaimagenresp"></span></h3>
                    <p class="sobre-parrafos">
                        @lang('about.paragraph_1')
                    </p>
                    <p class="sobre-parrafos">@lang('about.paragraph_2') </p>
                    <p class="sobre-parrafos">@lang('about.paragraph_3')</p>
                    <p class="sobre-parrafos">@lang('about.paragraph_4')</p>
                </div>
                <!-- Page Content End -->
            </div>
        </div>
        <!-- Page Wrapper Section End -->

        <!-- Counter Section Start -->
        <div id="counter" class="pd--100-0-40" data-bg-img="img/nuevofondo-sobre.png">
            <div class="container">
                <div class="row sobremargin">
                    <div class="col-md-12 text-center">
                        <h4 class="sobre4">@lang('about.sub_title_1')</h4>
                        <h4 class="sobre5">@lang('about.sub_title_2')</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

@endsection
@section('jquery')
<!-- ==== jQuery Library ==== -->
<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>
@endsection