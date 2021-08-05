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
