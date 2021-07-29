@extends('layouts.app')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

            <!--Home Sections-->

            <section id="hello" class="service-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="about_text">
                                <h1 class="text-white text-uppercase">Service</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="active"><a href="{{route('service')}}">Service</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="feature" class="sv_feature roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_sv_feature">

                            <div class="col-md-12">
                                <!-- Head Title -->
                                <div class="head_title text-center">
                                    <h2>We are Pouseidon.</h2>
                                    <h5><em>With the waves from Ocean. Always love what we do and just do what we love</em></h5>
                                    <div class="separator_auto"></div>
                                </div><!-- End off Head Title -->

                                <div class="sv_feature_content wow fadeIn m-top-40 text-center fix">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                        ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit
                                        in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                        facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                                        luptatum zzril delenit augue duis dolore te feugaitam soluta nobis eleifend
                                        option congue.</p>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="sv_feature_photo wow fadeIn m-top-60 text-center fix">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="sv_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/s-team-img1.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Fashionista</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="sv_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/s-team-img2.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Model Photo</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="sv_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/s-team-img3.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Catwalk</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="sv_feature_item sm-m-top-20">
                                                <img src="{{asset('/images/s-team-img4.jpg')}}" alt="" />
                                                <h6 class="m-top-20">Advertisement</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section>

            <!--SV Service Section-->
            <section id="sv_service" class="sv_service bg-grey roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_service">

                            <div class="col-md-4 col-sm-6">
                                <div class="sv_service_item">
                                    <h4><i class="fa fa-desktop"></i> Perfect Responsive</h4>
                                    <p class="m-top-20">Quam putamusiana parum claram, anteposuerit litterarum formas humanitatis seacula
                                        quarta decima et quinta decima. Eodem modo sollemnes</p>
                                </div>
                            </div><!-- End off col-md-4 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="sv_service_item xs-m-top-40">
                                    <h4><i class="fa fa-diamond"></i> unique design</h4>
                                    <p class="m-top-20">Quam putamusiana parum claram, anteposuerit litterarum formas humanitatis seacula
                                        quarta decima et quinta decima. Eodem modo sollemnes</p>
                                </div>
                            </div><!-- End off col-md-4 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="sv_service_item sm-m-top-40">
                                    <h4><i class="fa fa-bug"></i> clean & clear</h4>
                                    <p class="m-top-20">Quam putamusiana parum claram, anteposuerit litterarum formas humanitatis seacula
                                        quarta decima et quinta decima. Eodem modo sollemnes</p>
                                </div>
                            </div><!-- End off col-md-4 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="sv_service_item m-top-40">
                                    <h4><i class="fa fa-cut"></i> Perfect Responsive</h4>
                                    <p class="m-top-20">Quam putamusiana parum claram, anteposuerit litterarum formas humanitatis seacula
                                        quarta decima et quinta decima. Eodem modo sollemnes</p>
                                </div>
                            </div><!-- End off col-md-4 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="sv_service_item m-top-40">
                                    <h4><i class="fa fa-headphones"></i> Perfect Responsive</h4>
                                    <p class="m-top-20">Quam putamusiana parum claram, anteposuerit litterarum formas humanitatis seacula
                                        quarta decima et quinta decima. Eodem modo sollemnes</p>
                                </div>
                            </div><!-- End off col-md-4 -->

                            <div class="col-md-4 col-sm-6">
                                <div class="sv_service_item m-top-40">
                                    <h4><i class="fa fa-bullhorn"></i> Perfect Responsive</h4>
                                    <p class="m-top-20">Quam putamusiana parum claram, anteposuerit litterarum formas humanitatis seacula
                                        quarta decima et quinta decima. Eodem modo sollemnes</p>
                                </div>
                            </div><!-- End off col-md-4 -->

                        </div>
                    </div>
                </div>
            </section><!-- End off sv service section -->


            <!--Pricing Section-->
            <section id="pricing" class="pricing roomy-100 fix">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing ">
                            <div class="col-md-12">
                                <div class="head_title m-bottom-30 sm-text-center">
                                    <h2>Table Price</h2>
                                    <h5><em>Here are some our pricing packet. Select your most suitable service.</em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing_item text-center m-top-30">
                                    <div class="pricing_head p-top-30">
                                        <h3 class=""><sup>$</sup><span>29</span></h3>
                                        <p class="text-uppercase m-top-20">basic packet</p>
                                    </div>
                                    <hr />
                                    <div class="pricing_body bg-white">
                                        <ul>
                                            <li> 2 events</li>
                                            <li> 3 models available</li>
                                            <li> 5 days in use</li>
                                            <li> 1 studio</li>
                                            <li> Limited support</li>
                                        </ul>
                                        <div class="pricing_btn m-top-40">
                                            <a href="" class="btn btn-primary">register <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing_item m-top-30 text-center">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30">
                                        <h3 class=""><sup>$</sup><span>42</span></h3>
                                        <p class="text-uppercase m-top-20">standard packet</p>
                                    </div>
                                    <hr />
                                    <div class="pricing_body bg-white">
                                        <ul>
                                            <li> 5 events</li>
                                            <li> 8 models available</li>
                                            <li> 10 days in use</li>
                                            <li> 2 studio</li>
                                            <li> Limited support</li>
                                        </ul>
                                        <div class="pricing_btn m-top-40">
                                            <a href="" class="btn btn-primary">register <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing_item m-top-30 text-center">
                                    <div class="pricing_head p-top-30">
                                        <h3 class=""><sup>$</sup><span>69</span></h3>
                                        <p class="text-uppercase m-top-20">premium packet</p>
                                    </div>
                                    <hr />
                                    <div class="pricing_body bg-white">
                                        <ul>
                                            <li> 10 events</li>
                                            <li> 15 models available</li>
                                            <li> 20 days in use</li>
                                            <li> 2 studio</li>
                                            <li> Premium support</li>
                                        </ul>
                                        <div class="pricing_btn m-top-40">
                                            <a href="" class="btn btn-primary">register <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing_item m-top-30 text-center">
                                    <div class="pricing_head p-top-30">
                                        <h3 class=""><sup>$</sup><span>99</span></h3>
                                        <p class="text-uppercase m-top-20">business packet</p>
                                    </div>
                                    <hr />
                                    <div class="pricing_body bg-white">
                                        <ul>
                                            <li> 15 events</li>
                                            <li> 20 models available</li>
                                            <li> 30 days in use</li>
                                            <li> 5 studio</li>
                                            <li> Unlimited support</li>
                                        </ul>
                                        <div class="pricing_btn m-top-40">
                                            <a href="" class="btn btn-primary">register <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off col-md-3 -->

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Pricing section -->

            <!--Our Work Section-->
            <div class="container">
                <div class="row">
                    <div class="main_work">

                        <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                        <div class="work_item_img">
                                            <img src="{{asset('/images/work-img1.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator1"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off work-item -->

                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="work_item_img sm-text-center sm-m-top-40">
                                            <img src="{{asset('/images/work-img2.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator2"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End off work-item -->

                        <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                        <div class="work_item_img sm-m-top-40">
                                            <img src="{{asset('/images/work-img3.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator1"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off work-item -->

                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="work_item_img sm-text-center sm-m-top-40">
                                            <img src="{{asset('/images/work-img4.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator2"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End off work-item -->

                    </div>
                </div>
            </div>


@endsection
