<section id="contact" class="contact fix">
    <div class="container">
        <div class="row">
            <div class="main_contact p-top-100">
                <div class="col-md-12">
                    <div class="head_title text-left sm-text-center wow fadeInDown">
                        <h2>@lang('front.contact_review_title')</h2>
                        <h5><em>@lang('front.contact_review_subtitle')</em></h5>
                        <div class="separator_left"></div>
                    </div>
                </div>

                <div class="col-md-6 sm-m-top-30">
                    <form class="" action="{{ route('public.review.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('front.index_order_name') *</label>
                                    <input id="name" name="name" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('front.index_order_phone') *</label>
                                    <input id="phone" name="phone" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>@lang('front.index_order_message') *</label>
                                    <textarea id="body" name="body" class="form-control" rows="6" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">@lang('front.send_message') <i class="fa fa-long-arrow-right"></i></button>
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
