<section id="gallery" class="gallery margin-top-120 bg-white">
    <!-- Portfolio container-->
    <div class="container">
        <div class="row">
            <div class="main-gallery main-model roomy-80">
                <div class="col-md-12">
                    <div class="head_title text-left sm-text-center wow fadeInDown">
                        <h2>@lang('front.models')</h2>
                        <h5><em>@lang('front.index_models_subtitle')</em></h5>
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
                                <a href="{{route('model-details', $user->id)}}" class="btn btn-default m-top-20">
                                    {{$user->name}} <i class="fa fa-long-arrow-right"></i>
                                </a>
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
