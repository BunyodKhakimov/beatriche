@extends('layouts.app')

@section('preloader')
    @include('partials._preloader2')
@endsection

@section('content')

            <!--Home Sections-->

            <section id="hello" class="model-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="model_text">
                                <h1 class="text-white text-uppercase">OUR MODELS</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="active"><a href="{{route('models')}}">Our models</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->




            <!--Portfolio Section-->
            <section id="gallery" class="gallery margin-top-120 bg-white">
                <!-- Portfolio container-->
                <div class="container">
                    <div class="row">
                        <div class="main-gallery main-model roomy-80">
                            <div class="col-md-12">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Our Models</h2>
                                    <h5><em>The success of Pouseidon is passion and love. Meet them now!</em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>

                            <div class="col-md-12 m-bottom-60">
                                <div class="filters-button-group text-right sm-text-center">
                                    <button class="button is-checked" data-filter="*">View all</button>
                                    <button class="button" data-filter=".metal">Catwalk</button>
                                    <button class="button" data-filter=".transition">Advertisement</button>
                                    <button class="button" data-filter=".alkali">Fashionista</button>
                                    <button class="button" data-filter=".ar">Model Photo</button>
                                </div>
                            </div>

                            <div style="clear: both;"></div>

                            <div class="grid models text-center">
                                @if(isset($users))
                                    @foreach($users as $user)
{{--                                        {{dd($user)}}--}}
                                        <div class="grid-item model-item transition metal ium alkali ar">
                                            <img alt="" src="@if(isset($user->profile_image)){{Storage::disk('s3')->temporaryUrl($user->profile_image, '+2 minutes')}}@else{{asset('/images/model/default.jpg')}}@endif">
                                            <a href="{{route('model-details', $user->id)}}" class="btn btn-default m-top-20">View {{$user->name}} <i class="fa fa-long-arrow-right"></i></a>
                                        </div><!-- End off grid item -->
                                    @endforeach
                                @endif
{{--                                <div class="grid-item model-item transition metal ium">--}}
{{--                                    <img alt="" src="{{asset('/images/model/1.jpg')}}">--}}
{{--                                    <a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item metalloid " >--}}
{{--                                    <img alt="" src="{{asset('/images/model/2.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item post-transition metal">--}}
{{--                                    <img alt="" src="{{asset('/images/model/3.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item post-transition metal ium" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/4.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item metal ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/5.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/6.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/7.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/8.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/9.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/10.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/11.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}

{{--                                <div class="grid-item model-item alkali ar" >--}}
{{--                                    <img alt="" src="{{asset('/images/model/12.jpg')}}">--}}
{{--									<a href="{{route('model-details')}}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                                </div><!-- End off grid item -->--}}
                            </div>

                            <div style="clear: both;"></div>

                        </div>
                    </div>
                </div><!-- Portfolio container end -->
            </section><!-- End off portfolio section -->

            <!--Gallery Section-->
            <section id="gallery" class="gallery margin-top-120 bg-grey">
                <!-- Gallery container-->
                <div class="container">
                    <div class="row">
                        <div class="main-gallery roomy-80">
                            <div class="col-md-12">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Our Gallery</h2>
                                    <h5><em>Some our recent works is here. Discover them now!</em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>

{{--                            <div class="col-md-12 m-bottom-60">--}}
{{--                                <div class="filters-button-group text-right sm-text-center">--}}
{{--                                    <button class="button is-checked" data-filter="*">View all</button>--}}
{{--                                    <button class="button" data-filter=".metal">Catwalk</button>--}}
{{--                                    <button class="button" data-filter=".transition">Advertisement</button>--}}
{{--                                    <button class="button" data-filter=".alkali">Fashionista</button>--}}
{{--                                    <button class="button" data-filter=".ar">Model Photo</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div style="clear: both;"></div>

                            <div class="grid text-center">
                                @if(isset($users_with_images))
                                    @foreach($users_with_images as $user)
                                        <div class="grid-item transition metal ium alkali ar">
                                            <img alt="" src="{{Storage::disk('s3')->temporaryUrl($user->image[0], '+2 minutes')}}">
                                            <div class="grid_hover_area text-center">
                                                <div class="grid_hover_text m-top-110">
                                                    <h4 class="text-white">Sloggi’s collection</h4>
                                                    <h5 class="text-white"><em>Fashionista</em></h5>
                                                    <a href="{{Storage::disk('s3')->temporaryUrl($user->image[0], '+2 minutes')}}" class="text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div><!-- End off grid Hover area -->
                                        </div><!-- End off grid item -->
                                    @endforeach
                                @else
                                    <div class="grid-item transition metal ium alkali ar">
                                        <img alt="" src="{{asset('/images/porfolio-01.jpg')}}">
                                        <div class="grid_hover_area text-center">
                                            <div class="grid_hover_text m-top-110">
                                                <h4 class="text-white">Sloggi’s collection</h4>
                                                <h5 class="text-white"><em>Fashionista</em></h5>
                                                <a href="{{asset('/images/porfolio-01.jpg')}}" class="text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End off grid Hover area -->
                                    </div><!-- End off grid item -->

                                    <div class="grid-item transition metal ium alkali ar">
                                        <img alt="" src="{{asset('/images/porfolio-02.jpg')}}">
                                        <div class="grid_hover_area text-center">
                                            <div class="grid_hover_text m-top-150">
                                                <h4 class="text-white">Sloggi’s collection</h4>
                                                <h5 class="text-white"><em>Fashionista</em></h5>
                                                <a href="{{asset('/images/porfolio-02.jpg')}}" class="text-white m-top-50">View Project <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End off grid Hover area -->
                                    </div><!-- End off grid item -->

                                    <div class="grid-item transition metal ium alkali ar">
                                        <img alt="" src="{{asset('/images/porfolio-03.jpg')}}">
                                        <div class="grid_hover_area text-center">
                                            <div class="grid_hover_text m-top-50">
                                                <h4 class="text-white">Sloggi’s collection</h4>
                                                <h5 class="text-white"><em>Fashionista</em></h5>
                                                <a href="{{asset('/images/porfolio-03.jpg')}}" class="text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End off grid Hover area -->
                                    </div><!-- End off grid item -->

                                    <div class="grid-item transition metal ium alkali ar">
                                        <img alt="" src="{{asset('/images/porfolio-06.jpg')}}">
                                        <div class="grid_hover_area text-center">
                                            <div class="grid_hover_text m-top-50">
                                                <h4 class="text-white">Sloggi’s collection</h4>
                                                <h5 class="text-white"><em>Fashionista</em></h5>
                                                <a href="{{asset('/images/porfolio-06.jpg')}}" class="text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End off grid Hover area -->
                                    </div><!-- End off grid item -->

                                    <div class="grid-item transition metal ium alkali ar">
                                        <img alt="" src="{{asset('/images/porfolio-04.jpg')}}">
                                        <div class="grid_hover_area text-center">
                                            <div class="grid_hover_text m-top-150">
                                                <h4 class="text-white">Sloggi’s collection</h4>
                                                <h5 class="text-white"><em>Fashionista</em></h5>
                                                <a href="{{asset('/images/porfolio-04.jpg')}}" class="text-white m-top-50">View Project <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End off grid Hover area -->
                                    </div><!-- End off grid item -->


                                    <div class="grid-item transition metal ium alkali ar">
                                        <img alt="" src="{{asset('/images/porfolio-05.jpg')}}">
                                        <div class="grid_hover_area text-center">
                                            <div class="grid_hover_text m-top-110">
                                                <h4 class="text-white">Sloggi’s collection</h4>
                                                <h5 class="text-white"><em>Fashionista</em></h5>
                                                <a href="{{asset('/images/porfolio-05.jpg')}}" class="text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End off grid Hover area -->
                                    </div><!-- End off grid item -->
                                @endif
                            </div>

                            <div style="clear: both;"></div>

                        </div>
                    </div>
                </div><!-- Portfolio container end -->
            </section><!-- End off portfolio section -->

@endsection
