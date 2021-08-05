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
                        <li class="active">
                            <a href="#">
                                @if(isset($user)){{$user->name}}@endif
                                {{--                                            Angela Baby--}}
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!--End off row-->
    </div><!--End off container -->
</section> <!--End off Home Sections-->
