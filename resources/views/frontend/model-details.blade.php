@extends('layouts.app')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

    <!--Home Sections-->
    @include('frontend.model-details._home_section')

    <!--Details Section-->
    @include('frontend.model-details._details_section')

    <!--Gallery Section-->
    @include('frontend.model-details._gallery_section')

    <!--Contact Us Section-->
    @include('frontend.contact._contact_section')

@endsection
