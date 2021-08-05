@extends('layouts.app')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

    <!--Home Sections-->
    @include('frontend.service._home_section')

    <!--About Sections-->
    @include('frontend.service._about_section')

    <!--Service Section-->
    @include('frontend.service._service_section')

    <!--Pricing Section-->
    @include('frontend.service._pricing_section')

    <!--Work Section-->
    @include('frontend.service._work_section')

@endsection
