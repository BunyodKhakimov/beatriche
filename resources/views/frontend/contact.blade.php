@extends('layouts.app')

@section('preloader')
    @include('partials._preloader2')
@endsection

@section('content')

    <!--Home Sections-->
    @include('frontend.contact._home_section')

    <!--Call To Action Section-->
    @include('frontend.contact._call_section')

    <!-- map section-->
    <div id="map" class="map">
        <div class="ourmap"></div>
    </div><!-- End off Map section-->

    <!--Contact Us Section-->
    @include('frontend.contact._contact_section')

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
