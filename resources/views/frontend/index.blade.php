@extends('layouts.app')

@section('preloader')
    @include('partials._preloader2')
@endsection

@section('content')

    <!--Home Sections-->
    @include('frontend.home._home_section')


    <!--About Sections-->
    @include('frontend.home._about_section')

    <br />
    <br />
    <br />
    <hr />
    <br />
    <br />
    <br />
    <br />

    <!--Our Work Section-->
    @include('frontend.home._work_section')

    <br />

    <!--Features Section-->
{{--    @include('frontend.home._features_section')--}}

    <!--Models section-->
    @include('frontend.home._models_section')

    <!--Contact Us Section-->
    @include('frontend.home._contact_section')

@endsection
