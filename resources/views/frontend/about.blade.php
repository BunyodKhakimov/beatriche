@extends('layouts.app')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

    <!--Home Sections-->
    @include('frontend.about._home_section')

    <!--About Sections-->
    @include('frontend.about._about_section')


    <!--Simple Section-->
    @include('frontend.about._simple_section')


    <!--Models section-->
    @include('frontend.about._models_section')

    <hr />

    <!--Partners Section-->
    @include('frontend.about._partners_section')

@endsection
