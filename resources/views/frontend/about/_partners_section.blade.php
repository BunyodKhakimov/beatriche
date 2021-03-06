<section id="testimonial" class="testimonial fix roomy-100">
    <div class="container">
        <div class="row">
            <div class="main_testimonial text-center">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @if(isset($reviews))
                            @foreach($reviews as $review)
                                <div class="item  @if($loop->first) active @endif testimonial_item">
                                    <div class="col-sm-10 col-sm-offset-1">

                                        <div class="test_authour">
                                            <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />
                                            <h6 class="m-top-20">{{$review->name}}</h6>
                                            <h5><em>Happy client</em> </h5>
                                        </div>
                                        <p class=" m-top-40">{{$review->body}}</p>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{--                                    <div class="item active testimonial_item">--}}
                        {{--                                        <div class="col-sm-10 col-sm-offset-1">--}}

                        {{--                                            <div class="test_authour">--}}
                        {{--                                                <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />--}}
                        {{--                                                <h6 class="m-top-20">Laingockien</h6>--}}
                        {{--                                                <h5><em>The most handsome men in the world</em> </h5>--}}
                        {{--                                            </div>--}}

                        {{--                                            <p class=" m-top-40">I???ve just wordked with Pouseidon last week. Uhm.--}}
                        {{--                                                I can say this is the best team that I have ever worked together.--}}
                        {{--                                                All of them are very, very professional and creative, their unbelieved--}}
                        {{--                                                plan made our concept become perfect. I recommend you to try one of--}}
                        {{--                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>--}}


                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="item testimonial_item">--}}
                        {{--                                        <div class="col-sm-10 col-sm-offset-1">--}}

                        {{--                                            <div class="test_authour">--}}
                        {{--                                                <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />--}}
                        {{--                                                <h6 class="m-top-20">Laingockien</h6>--}}
                        {{--                                                <h5><em>The most handsome men in the world</em> </h5>--}}
                        {{--                                            </div>--}}

                        {{--                                            <p class=" m-top-40">I???ve just wordked with Pouseidon last week. Uhm.--}}
                        {{--                                                I can say this is the best team that I have ever worked together.--}}
                        {{--                                                All of them are very, very professional and creative, their unbelieved--}}
                        {{--                                                plan made our concept become perfect. I recommend you to try one of--}}
                        {{--                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>--}}


                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="item testimonial_item">--}}
                        {{--                                        <div class="col-sm-10 col-sm-offset-1">--}}

                        {{--                                            <div class="test_authour">--}}
                        {{--                                                <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />--}}
                        {{--                                                <h6 class="m-top-20">Laingockien</h6>--}}
                        {{--                                                <h5><em>The most handsome men in the world</em> </h5>--}}
                        {{--                                            </div>--}}

                        {{--                                            <p class=" m-top-40">I???ve just wordked with Pouseidon last week. Uhm.--}}
                        {{--                                                I can say this is the best team that I have ever worked together.--}}
                        {{--                                                All of them are very, very professional and creative, their unbelieved--}}
                        {{--                                                plan made our concept become perfect. I recommend you to try one of--}}
                        {{--                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>--}}

                        {{--                                        </div>--}}
                        {{--                                    </div>--}}

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <span class="slash">/</span>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div><!--End off row-->
    </div><!--End off container -->

    <br />
    <br />
    <br />
    <hr />
    <br />
    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="main_cbrand text-center">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="cbrand_item m-bottom-10">
                        <a href=""><img src="{{asset('/images/brand-img1.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="cbrand_item m-bottom-10">
                        <a href=""><img src="{{asset('/images/brand-img2.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="cbrand_item m-bottom-10">
                        <a href=""><img class="" src="{{asset('/images/brand-img3.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="cbrand_item m-bottom-10">
                        <a href=""><img src="{{asset('/images/brand-img4.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="cbrand_item m-bottom-10">
                        <a href=""><img src="{{asset('/images/brand-img5.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="cbrand_item m-bottom-10">
                        <a href=""><img src="{{asset('/images/brand-img1.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section> <!--End off Partners section -->
