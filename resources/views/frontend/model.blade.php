@extends('layouts.app')

@section('preloader')
    @include('partials._preloader2')
@endsection

@section('content')

    <!--Home Sections-->
    @include('frontend.model._home_section')

    <!--Portfolio Section-->
    @include('frontend.model._portfolio_section')

    <!--Gallery Section-->
    @include('frontend.model._gallery_section')

@endsection
