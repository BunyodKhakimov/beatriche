@extends('layouts.app')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

            <!--Home Sections-->

            <section id="hello" class="about-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="about_text">
                                <h1 class="text-white text-uppercase">About Us</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="active"><a href="{{route('about')}}">About Us</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="feature" class="ab_feature roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_ab_feature">

                            <div class="col-md-6">
                                <!-- Head Title -->
                                <div class="head_title">
                                    <h2>Story about us</h2>
                                    <h5><em>Pouseidon brings the waves to somewhere so far,
                                            with beautiful & elegant</em></h5>
                                    <div class="separator_left"></div>
                                </div><!-- End off Head Title -->

                                <div class="ab_feature_content wow fadeIn m-top-40">
                                    <p>Eusus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores
                                        legere me lius quod ii legunt saepius. Duis autem vel eum iriure dolor in hendrerit vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                        accumsan et iusto odio dignissim qui blandit praesent luptatum</p>

                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                        vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</p>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab_feature_photo wow fadeIn sm-m-top-40">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/ab-f-img1.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/ab-f-img2.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/ab-f-img3.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{asset('/images/ab-f-img4.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{asset('/images/ab-f-img5.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{asset('/images/ab-f-img6.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{asset('/images/ab-f-img7.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{asset('/images/ab-f-img8.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{asset('/images/ab-f-img9.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section>


            <!--Simple Section-->
            <section id="simple" class="simple bg-grey roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_simple text-center">
                            <div class="col-md-12">
                                <h2>Simplicity isn’t simple</h2>
                                <p>Eusus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere
                                    me lius quod ii legunt saepius. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse
                                    molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan blandit
                                    praesent luptatum.</p>

                                <a href="{{route('contact')}}" class="btn btn-default m-top-40">Contact Us <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--Models section-->
            <section id="teams" class="teams roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_teams">
                            <div class="col-md-12">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Meet our team</h2>
                                    <h5><em>Behind the cussess of Pouseidon is not th one-man work but the work of many creative and smart people</em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="team_item m-top-30">
                                    <div class="team_img">
                                        <img src="{{asset('/images/model-img1.jpg')}}" alt="" />
                                        <div class="team_caption">
                                            <h4 class="">Redikiel</h4>
                                            <h5><em>Founder at Pousiedon</em></h5>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="team_item m-top-30">
                                    <div class="team_img">
                                        <img src="{{asset('/images/model-img2.jpg')}}" alt="" />
                                        <div class="team_caption">
                                            <h4 class="">Christina Angela</h4>
                                            <h5><em>Graphic Director</em></h5>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="team_item m-top-30">
                                    <div class="team_img">
                                        <img src="{{asset('/images/model-img3.jpg')}}" alt="" />
                                        <div class="team_caption">
                                            <h4 class="">Kevin Andrew</h4>
                                            <h5><em>Photographer</em></h5>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
            </section>


            <!--Testimonial Section-->
            <section id="testimonial" class="testimonial fix roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_testimonial text-center">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Laingockien</h6>
                                                <h5><em>The most handsome men in the world</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I’ve just wordked with Pouseidon last week. Uhm.
                                                I can say this is the best team that I have ever worked together.
                                                All of them are very, very professional and creative, their unbelieved
                                                plan made our concept become perfect. I recommend you to try one of
                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Laingockien</h6>
                                                <h5><em>The most handsome men in the world</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I’ve just wordked with Pouseidon last week. Uhm.
                                                I can say this is the best team that I have ever worked together.
                                                All of them are very, very professional and creative, their unbelieved
                                                plan made our concept become perfect. I recommend you to try one of
                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="{{asset('/images/test-img.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Laingockien</h6>
                                                <h5><em>The most handsome men in the world</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I’ve just wordked with Pouseidon last week. Uhm.
                                                I can say this is the best team that I have ever worked together.
                                                All of them are very, very professional and creative, their unbelieved
                                                plan made our concept become perfect. I recommend you to try one of
                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>

                                        </div>
                                    </div>

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
            </section> <!--End off Testimonial section -->

@endsection
