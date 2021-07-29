@extends('layouts.app')

@section('preloader')
    @include('partials._preloader2')
@endsection

@section('content')

    <!--Home Sections-->

    <section id="hello" class="home bg-mega">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="home_text">
                        <h4 class="text-white text-uppercase">a new creative studio</h4>
                        <h1 class="text-white text-uppercase">good design is always in season</h1>

                        <div class="separator"></div>

                        <h5 class=" text-uppercase text-white"><em>One day, the dream will come true with lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, nummy nibh euismod tincidunt laoreet.</em></h5>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->


    <!--About Sections-->
    <section id="feature" class="feature p-top-100">
        <div class="container">
            <div class="row">
                <div class="main_feature">

                    <div class="col-md-6 m-top-120">
                        <!-- Head Title -->
                        <div class="head_title">
                            <h2>From Ocean</h2>
                            <h5><em>Открыв двери нашего салона, вы попадаете в волшебный мир красоты.</em></h5>
                            <div class="separator_left"></div>
                        </div><!-- End off Head Title -->

                        <div class="feature_content wow fadeIn m-top-40">
                            <p>Eusus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores
                                legere me lius quod ii legunt saepius. Duis autem vel eum iriure dolor in hendrerit vulputate
                                velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                accumsan et iusto odio dignissim qui blandit praesent luptatum</p>

                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</p>

{{--                            <p>--}}
{{--                                Невероятно уютная атмосфера и стильный интерьер, вежливые и внимательные администраторы и--}}
{{--                                высококвалифицированные специалисты — все, что необходимо для создания вашего совершенного образа--}}
{{--                            </p>--}}

{{--                            <p>--}}
{{--                                Наши парикмахеры помогут подобрать подходящую стрижку--}}
{{--                                и удачный вариант прически, на профессиональном уровне--}}
{{--                                выполнят окрашивание, мастера ногтевого сервиса отлично--}}
{{--                                знают секреты ухоженных рук и будут рады предложить--}}
{{--                                полный перечень услуг--}}
{{--                            </p>--}}

                            <div class="feature_btns m-top-30">
                                <a href="" class="btn btn-default text-uppercase">Забронировать <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature_photo wow fadeIn sm-m-top-40">
                            <div class="photo_border"></div>
                            <div class="feature_img">
                                <img src="{{asset('images/feature-img.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
        <br />
        <br />
        <br />
        <br />
        <hr />
        <br />
        <br />

        <div class="container">
            <div class="row">
                <div class="main_counter text-center">
                    <div class="col-md-3">
                        <div class="counter_item">
                            <h2 class="statistic-counter"><em> 2 </em></h2>
                            <div class="separator_small"></div>
                            <h5>Open Filials</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item sm-m-top-40">
                            <h2 class="statistic-counter"><em>9</em> </h2>
                            <div class="separator_small"></div>
                            <h5>Partners</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item sm-m-top-40">
                            <h2 class="statistic-counter"><em>23</em></h2>
                            <div class="separator_small"></div>
                            <h5>Masters</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item sm-m-top-40">
                            <h2 class="statistic-counter"><em>328</em></h2>
                            <div class="separator_small"></div>
                            <h5>Happy Clients</h5>
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->

        <br />
        <br />
        <br />

{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="service_content_area">--}}
{{--                    <!-- Service LEFT SIDE -->--}}
{{--                    <div class="col-md-4 service_left wow fadeInLeft">--}}
{{--                        <!-- Service -->--}}

{{--                        <div class="service_items">--}}
{{--                            <div class="row">--}}

{{--                                <!-- ICON -->--}}
{{--                                <div class="col-xs-3">--}}
{{--                                    <div class="hexagon">--}}
{{--                                        <div class="about-content">--}}
{{--                                            <span class="fa fa-leaf"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-xs-9">--}}
{{--                                    <div class="text-left service_left_text">--}}
{{--                                        <h4 class="main-color">Perfect Responsive</h4>--}}
{{--                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- end Single Service item -->--}}

{{--                        <!-- Service -->--}}
{{--                        <div class="service_items">--}}
{{--                            <div class="row">--}}
{{--                                <!-- ICON -->--}}
{{--                                <div class="col-xs-3">--}}
{{--                                    <div class="hexagon">--}}
{{--                                        <div class="about-content">--}}
{{--                                            <span class="fa fa-diamond"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-xs-9">--}}
{{--                                    <div class="text-left service_left_text">--}}
{{--                                        <h4 class="main-color">Unique Design</h4>--}}
{{--                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- end Single Service item -->--}}

{{--                        <!-- Service -->--}}
{{--                        <div class="service_items">--}}
{{--                            <div class="row">--}}
{{--                                <!-- ICON -->--}}
{{--                                <div class="col-xs-3">--}}
{{--                                    <div class="hexagon">--}}
{{--                                        <div class="about-content">--}}
{{--                                            <span class="fa fa-android"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-xs-9">--}}
{{--                                    <div class="text-left service_left_text">--}}
{{--                                        <h4 class="main-color">Clean & Clear</h4>--}}
{{--                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- end Single Service item -->--}}


{{--                    </div>--}}
{{--                    <!-- /END Service LEFT -->--}}

{{--                    <!-- PHONE IMAGE -->--}}
{{--                    <div class="col-md-4 sm-m-top-40 sm-text-center">--}}
{{--                        <div class="service-img wow bounceIn">--}}
{{--                            <img src="{{asset('/images/service-img.png')}}" alt="Architect Img">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Service RIGHT -->--}}
{{--                    <div class="col-md-4 service_right wow fadeInRight sm-m-top-40" >--}}

{{--                        <!-- Service -->--}}
{{--                        <div class="service_items">--}}
{{--                            <div class="row">--}}

{{--                                <div class="col-xs-9">--}}
{{--                                    <div class="service_right_text p-l-15 text-right">--}}
{{--                                        <h4 class="main-color">Easy install</h4>--}}
{{--                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- ICON -->--}}
{{--                                <div class="col-xs-3">--}}
{{--                                    <div class="hexagon">--}}
{{--                                        <div class="about-content">--}}
{{--                                            <span class="fa fa-cut"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div> <!-- end Single Service item -->--}}



{{--                        <!-- Service -->--}}
{{--                        <div class="service_items">--}}
{{--                            <div class="row">--}}

{{--                                <div class="col-xs-9">--}}
{{--                                    <div class="service_right_text p-l-15 text-right">--}}
{{--                                        <h4 class="main-color">Premium Support</h4>--}}
{{--                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <!-- ICON -->--}}
{{--                                <div class="col-xs-3">--}}
{{--                                    <div class="hexagon">--}}
{{--                                        <div class="about-content">--}}
{{--                                            <span class="fa fa-bullhorn"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div><!-- end Single Service item -->--}}

{{--                        <!-- Service -->--}}
{{--                        <div class="service_items">--}}
{{--                            <div class="row">--}}


{{--                                <div class="col-xs-9">--}}
{{--                                    <div class="service_right_text p-l-15 text-right">--}}
{{--                                        <h4 class="main-color">And much more</h4>--}}
{{--                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- ICON -->--}}
{{--                                <div class="col-xs-3">--}}
{{--                                    <div class="hexagon">--}}
{{--                                        <div class="about-content">--}}
{{--                                            <span class="fa fa-paper-plane"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div><!-- end Single Service item -->--}}


{{--                    </div><!-- /END Service RIGHT -->--}}
{{--                </div>--}}
{{--            </div> <!--End off row -->--}}
{{--        </div>--}}
{{--        <hr />--}}
{{--        <br />--}}

    </section> <!--End off About section -->

    <!--Models section-->
    <section id="models" class="models bg-grey roomy-80">
        <div class="container">
            <div class="row">
                <div class="main_models text-center">
                    <div class="col-md-12">
                        <div class="head_title text-left sm-text-center wow fadeInDown">
                            <h2>Our Models</h2>
                            <h5><em>The success of Beatriche is passion and love. Meet them now!</em></h5>
                            <div class="separator_left"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="model_item m-top-30">
                            <div class="model_img">
                                <img src="{{asset('/images/model-img04.jpg')}}" alt="" />
                                <div class="model_caption">
                                    <h5 class="text-white">Angela Baby</h5>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="model_item m-top-30">
                            <div class="model_img">
                                <img src="{{asset('/images/model-img05.jpg')}}" alt="" />
                                <div class="model_caption">
                                    <h5 class="text-white">Angela Baby</h5>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="model_item m-top-30">
                            <div class="model_img">
                                <img src="{{asset('/images/model-img07.jpg')}}" alt="" />
                                <div class="model_caption">
                                    <h5 class="text-white">Angela Baby</h5>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="model_item meet_team m-top-30">
                            <a href="{{route('models')}}">Meet All Them <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div><!-- End off col-md-3 -->

                </div>
            </div>
        </div>
    </section>


    <!--Contact Us Section-->
    <section id="contact" class="contact fix">
        <div class="container">
            <div class="row">
                <div class="main_contact p-top-100">
                    <div class="col-md-12">
                        <div class="head_title text-left sm-text-center wow fadeInDown">
                            <h2>Make Order</h2>
                            <h5><em>The success of Pouseidon is passion and love. Meet them now!</em></h5>
                            <div class="separator_left"></div>
                        </div>
                    </div>

                    <div class="col-md-6 sm-m-top-30">
                        <form class="" action="{{route('public.order.store')}}" method="post">
                            <div class="row">
                                @csrf
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" @error('name') style="color: red" @enderror>
                                            Your Name * @error('name') ( {{ $message }} )@enderror
                                        </label>
                                        <input id="name" name="name" type="text" class="form-control" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone" @error('phone') style="color: red" @enderror>
                                            Your Phone * @error('phone') ( {{ $message }} ) @enderror
                                        </label>
                                        <input id="phone" name="phone" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="service" @error('service_id') style="color: red" @enderror>
                                            Service ID * @error('service_id') ( {{ $message }} )@enderror
                                        </label>
                                        <input id="service" name="service_id" type="number" class="form-control" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="user_id" @error('user_id') style="color: red" @enderror>
                                            Master ID * @error('user_id')( {{ $message }} )@enderror
                                        </label>
                                        <input id="user_id" name="user_id" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
{{--                                    <div class="form-group">--}}
{{--                                        <label>Your Message *</label>--}}
{{--                                        <textarea class="form-control" rows="6"></textarea>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit <i class="fa fa-long-arrow-right"></i></button>
{{--                                        <a href="{{route('order.store')}}" type="submit" class="btn btn-default">Submit <i class="fa fa-long-arrow-right"></i></a>--}}
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
