@extends('layouts.app')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

            <!--Home Sections-->

            <section id="hello" class="model-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="model_text">
                                <h1 class="text-white text-uppercase"> Our Model</h1>
                                <ol class="breadcrumb text-uppercase">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><a href="{{route('home')}}">Our Model</a></li>
                                    <li class="active"><a href="#">Angela Baby</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--Model Details Section-->
            <section id="m_details" class="m_details roomy-100 fix">
                <div class="container">
                    <div class="row">
                        <div class="main_details">
                            <div class="col-md-6">
                                <div class="m_details_img">
                                    <img src="{{asset('/images/angela-img.jpg')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m_details_content m-bottom-40">
                                    <h2>Angela Baby</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                        enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                        dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                        dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                        dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</p>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                        decima.</p>
                                </div>
                                <hr />
                                <div class="person_details m-top-40">
                                    <div class="row">
                                        <div class="col-md-5 text-left">
                                            <p>Real name:</p>
                                            <p>Born:</p>
                                            <p>Height:</p>
                                            <p>Weight:</p>
                                            <p>C / W / H:</p>
                                            <p>Eyes color:</p>
                                            <p>Hair color:</p>
                                        </div>
                                        <div class="col-md-7 text-left">
                                            <p>Angela  Baby</p>
                                            <p>Feb 29th 1992</p>
                                            <p>180cm</p>
                                            <p>52kg</p>
                                            <p>96 / 60 / 96</p>
                                            <p>Blue</p>
                                            <p>Brown / Voilet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="skill_bar m-top-70">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="teamskillbar clearfix m-top-50" data-percent="63%">
                                                <h6 class="one">Fashionista <span class="pull-right">63%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->

                                            <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                                                <h6 class="two">catwalk <span class="pull-right">75%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->
                                        </div>

                                        <div class="col-md-6">
                                            <div class="teamskillbar clearfix m-top-50" data-percent="88%">
                                                <h6 class="three">photo models <span class="pull-right">88%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->

                                            <div class="teamskillbar clearfix m-top-50" data-percent="76%">
                                                <h6 class="foure">catwalk <span class="pull-right">76%</span></h6>
                                                <div class="teamskillbar-bar"></div>
                                            </div> <!-- End Skill Bar -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End off row -->
                </div> <!-- End off container -->
            </section> <!-- End off Model Details Section -->


            <!--Gallery Section-->
            <section id="gallery" class="gallery margin-top-120 bg-grey">
                <!-- Gallery container-->
                <div class="container">
                    <div class="row">
                        <div class="main-gallery roomy-80">
                            <div class="col-md-12 m-bottom-70">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Recent Works</h2>
                                    <h5><em>Some our recent works is here. Discover them now!</em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>


                            <div style="clear: both;"></div>

                            <div class="grid text-center">
                                <div class="grid-item transition metal ium">
                                    <img alt="" src="{{asset('/images/porfolio-1.jpg')}}">
                                </div><!-- End off grid item -->

                                <div class="grid-item metalloid " >
                                    <img alt="" src="{{asset('/images/porfolio-2.jpg')}}">
                                </div><!-- End off grid item -->

                                <div class="grid-item post-transition metal numberGreaterThan50">
                                    <img alt="" src="{{asset('/images/porfolio-3.jpg')}}">
                                </div><!-- End off grid item -->

                                <div class="grid-item post-transition metal ium" >
                                    <img alt="" src="{{asset('/images/porfolio-4.jpg')}}">
                                </div><!-- End off grid item -->

                                <div class="grid-item metal ar" >
                                    <img alt="" src="{{asset('/images/porfolio-5.jpg')}}">
                                </div><!-- End off grid item -->

                                <div class="grid-item alkali ar" >
                                    <img alt="" src="{{asset('/images/porfolio-6.jpg')}}">
                                </div><!-- End off grid item -->

                            </div>

                            <div style="clear: both;"></div>

                        </div>
                    </div>
                </div><!-- Portfolio container end -->
            </section><!-- End off portfolio section -->






            <!--Contact Us Section-->
            <section id="contact" class="contact fix">
                <div class="container">
                    <div class="row">
                        <div class="main_contact p-top-100">

                            <div class="col-md-6 sm-m-top-30">
                                <form class="" action="subcribe.php">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Your Name *</label>
                                                <input id="first_name" name="name" type="text" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Your Email *</label>
                                                <input id="email" name="email" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Your Message *</label>
                                                <textarea class="form-control" rows="6"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <a href="" class="btn btn-default">SEND MESSAGE <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="contact_img">
                                    <img src="{{asset('/images/contact-img.png')}}" alt="" />
                                </div>
                            </div>


                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->

@endsection
