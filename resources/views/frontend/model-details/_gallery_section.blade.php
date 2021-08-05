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
                    @if(isset($user->image))
                        @foreach($user->image as $img)
                            <div class="grid-item transition">
                                <img alt="" src="{{ Storage::disk('s3')->temporaryUrl($img, '+2 minutes') }}">
                            </div><!-- End off grid item -->
                        @endforeach
                    @else
                        <div class="grid-item">
                            <img alt="" src="{{asset('/images/porfolio-1.jpg')}}">
                        </div><!-- End off grid item -->

                        <div class="grid-item" >
                            <img alt="" src="{{asset('/images/porfolio-2.jpg')}}">
                        </div><!-- End off grid item -->

                        <div class="grid-item ">
                            <img alt="" src="{{asset('/images/porfolio-3.jpg')}}">
                        </div><!-- End off grid item -->

                        <div class="grid-item " >
                            <img alt="" src="{{asset('/images/porfolio-4.jpg')}}">
                        </div><!-- End off grid item -->

                        <div class="grid-item" >
                            <img alt="" src="{{asset('/images/porfolio-5.jpg')}}">
                        </div><!-- End off grid item -->

                        <div class="grid-item " >
                            <img alt="" src="{{asset('/images/porfolio-6.jpg')}}">
                        </div><!-- End off grid item -->
                    @endif
                </div>

                <div style="clear: both;"></div>

            </div>
        </div>
    </div><!-- Portfolio container end -->
</section><!-- End off portfolio section -->
