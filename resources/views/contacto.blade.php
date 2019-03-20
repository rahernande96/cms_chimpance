@extends('layouts.site')
@section('content')
<!-- Page Header Section Start -->
        <div id="pageHeader" class="pd--80-0" data-bg-img="img/fondo4.png">
        </div>
        <!-- Page Header Section End -->

        <!-- Contact Section Start -->
        <div id="contact">
            <!-- Contact Info Start -->
            <div class="contact--info pd--100-0-40">
                <div class="container">
                    <div class="row">
                        <!-- Contact Info Item Start -->
                        <div class="contact--info-item col-md-3 col-xs-6">
                            <!-- <h2 class="h3">@lang('contact.direction')</h2>

                            <p>249/2, Road-5A, Shewrapara, Dhaka -1000, Bandgadesh</p> -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact--info-item col-md-3 col-xs-6">
                            <h2 class="h3">@lang('contact.phone')</h2>

                            <p>+54 9 351 654 7222</p>
                            <p>+54 9 351 677 0007</p>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact--info-item col-md-3 col-xs-6">
                            <h2 class="h3">E-mail</h2>

                            <p>contact-us@approve-itsa.com</p>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact--info-item col-md-3 col-xs-6">
                            <!-- <h2 class="h3">@lang('contact.office_hours')</h2>

                            <p>09:00 am to  05.30 pm</p>
                            <p><span>(Sunday Closed)</span></p> -->
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                </div>
            </div>
            <!-- Contact Info End -->

            <!-- Contact Form Start -->
            <div class="contact--form">
                <div class="contact--form-wrapper">
                    <div class="container">
                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            <!-- Section Title Start -->
                            <div class="section--title text-center">
                                <h2 class="h2">@lang('contact.form.contact')</h2>
                            </div>
                            <!-- Section Title End -->

                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <!-- Contact Form Status Start -->
                                    <div class="contact--form-status"></div>
                                    <!-- Contact Form Status End -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contactName">@lang('contact.form.name') *</label>
                                                <input type="text" name="contactName" id="contactName" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="contactEmail">Email *</label>
                                                <input type="email" name="contactEmail" id="contactEmail" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="contactSubject">@lang('contact.form.subject') *</label>
                                                <input type="text" name="contactSubject" id="contactSubject" class="
                                                form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contactMessage">@lang('contact.form.message') *</label>
                                                <textarea name="contactMessage" id="contactMessage" class="form-control" required></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-default">@lang('contact.form.btn_title')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Contact Form End -->
        </div>
        <!-- Contact Section End -->
        
        <!-- Map Section Start -->
        <div id="map" data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="16" data-map-marker="[[23.790546, 90.375583]]"></div>
        <!-- Map Section End -->

@endsection

@section('jquery')
<!-- ==== jQuery Library ==== -->
<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>
<!-- ==== Bootstrap ==== -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
@endsection

@section('scripts')
<!-- ==== Google Map API ==== -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

<script type="text/javascript">
    $('#item-nav-6').addClass('active');
</script>
@endsection

