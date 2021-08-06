<nav class="navbar navbar-default navbar-fixed white no-background bootsnav text-uppercase">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
{{--                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                        <span>{{Session::get('locale')}}</span>
                        <i class="fa fa-globe"></i>
                        <span class="badge"></span>
                    </a>
                    <ul class="dropdown-menu cart-list">
                        <!---- Language List ---->
                        <li class="total">
                            <span class="pull-right">@lang('front.russian')</span>
                            <a href="{{ route('switch-lang', 'ru') }}" class="btn btn-cart">@lang('front.select')</a>
                        </li>
                        <li class="total">
                            <span class="pull-right">@lang('front.uzbek')</span>
                            <a href="{{ route('switch-lang', 'uz') }}" class="btn btn-cart">@lang('front.select')</a>
                        </li>
                        <li class="total">
                            <span class="pull-right">@lang('front.english')</span>
                            <a href="{{ route('switch-lang', 'en') }}" class="btn btn-cart">@lang('front.select')</a>
                        </li>
                    </ul>
{{--                    <ul class="dropdown-menu cart-list">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="photo"><img src="{{asset('/images/thumb01.jpg')}}" class="cart-thumb" alt="" /></a>--}}
{{--                            <h6><a href="#">Delica omtantur </a></h6>--}}
{{--                            <p class="m-top-10">2x - <span class="price">$99.99</span></p>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="photo"><img src="{{asset('/images/thumb01.jpg')}}" class="cart-thumb" alt="" /></a>--}}
{{--                            <h6><a href="#">Delica omtantur </a></h6>--}}
{{--                            <p class="m-top-10">2x - <span class="price">$99.99</span></p>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="photo"><img src="{{asset('/images/thumb01.jpg')}}" class="cart-thumb" alt="" /></a>--}}
{{--                            <h6><a href="#">Delica omtantur </a></h6>--}}
{{--                            <p class="m-top-10">2x - <span class="price">$99.99</span></p>--}}
{{--                        </li>--}}
{{--                        <!---- More List ---->--}}
{{--                        <li class="total">--}}
{{--                            <span class="pull-right"><strong>Total</strong>: $0.00</span>--}}
{{--                            <a href="#" class="btn btn-cart">Cart</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </li>

            </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">

                <img src="{{asset('/images/logo.png')}}" class="logo logo-display" alt="">
                <img src="{{asset('/images/logo-black.png')}}" class="logo logo-scrolled" alt="">

            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="{{route('home')}}">@lang('front.home')</a></li>
                <li><a href="{{route('about')}}">@lang('front.about')</a></li>
                <li><a href="{{route('models')}}">@lang('front.models')</a></li>
{{--                <li><a href="{{route('blog')}}">@lang('front.blog')</a></li>--}}
{{--                <li><a href="{{route('service')}}">@lang('front.service')</a></li>--}}
                <li><a href="{{route('contact')}}">@lang('front.contact')</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
