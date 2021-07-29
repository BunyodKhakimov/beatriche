@extends('layouts.app')

@section('preloader')
    @include('partials._preloader2')
@endsection

@section('content')

    <!--Home Sections-->

    <section id="hello" class="contact-banner bg-mega">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="contact_text">
                        <h1 class="text-white text-uppercase">Contact Us</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active"><a href="{{route('contact')}}">Contact Us</a></li>
                        </ol>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->


    <!--Call To Action Section-->

    <section id="action" class="action roomy-100">
        <div class="container">
            <div class="row">
                <div class="main_action text-center">
                    <div class="col-md-4">
                        <div class="action_item">
                            <a href="https://www.google.com/maps/place/%D0%A1%D0%B0%D0%BB%D0%BE%D0%BD+%D0%9A%D1%80%D0%B0%D1%81%D0%BE%D1%82%D1%8B+Beatriche/@41.3170279,69.2924668,12.25z/data=!4m5!3m4!1s0x0:0x928826c87241dfe1!8m2!3d41.3323596!4d69.3661918" target="_blank">
                                <i class="fa fa-map-marker"></i>
                            </a>
                            <h4 class="text-uppercase m-top-20">Address</h4>
                            <p> 40-26 Abdulla Matkabulov St. - Kara Suv 1 <br /> Tashkent - Uzbekistan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action_item">
                            <a href="tel:+998712653174"><i class="fa fa-headphones"></i></a>
                            <h4 class="text-uppercase m-top-20">phone</h4>
                            <p>(+998) 71 - 265 - 31 - 74 <br /> (+998) 98 - 301 - 53 - 01</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action_item">
                            <a href="mailto:beatriche@gmail.com">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                            <h4 class="text-uppercase m-top-20">Email</h4>
                            <p>Pouseidon-support@pouseidon.lnk <br />
                                info@pouseidon.lnk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- map section-->
    <div id="map" class="map">
        <div class="ourmap"></div>
    </div><!-- End off Map section-->



    <!--Contact Us Section-->
    <section id="contact" class="contact fix">
        <div class="container">
            <div class="row">
                <div class="main_contact p-top-100">

                    <div class="col-md-6 sm-m-top-30">
                        <form class="" action="subcribe.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Your Name *</label>
                                        <input id="first_name" name="name" type="text" class="form-control" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Your Email *</label>
                                        <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Your Message *</label>
                                        <textarea class="form-control" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="" class="btn btn-default">SEND MESSAGE <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="contact_img">
                            <img src="{{asset('/images/contact-img.png')}}" alt="" />
                        </div>
                    </div>


                </div>
            </div><!--End off row -->
        </div><!--End off container -->
    </section><!--End off Contact Section-->

@endsection

@section('script')
    <!-- paradise slider js -->

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
    <script src="{{asset('/js/gmaps.min.js')}}"></script>
    <script>
        var map = new GMaps({
            el: '.ourmap',
            lat: -12.043333,
            lng: -77.028333,
            scrollwheel: false,
            zoom: 15,
            zoomControl: true,
            panControl: false,

            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false,
            styles: [{'stylers': [{'hue': 'gray'}, {saturation: -100},
                    {gamma: 0.80}]}]
        });

    </script>
@endsection
