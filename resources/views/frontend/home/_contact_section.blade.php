<section id="order" class="contact fix">
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

                <div class="col-md-6 sm-m-top-10">
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
                                    <input id="phone" name="phone" type="tel" prefix="ov:+998" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="user_id" @error('user_id') style="color: red" @enderror>
                                        Master * @error('user_id')( {{ $message }} )@enderror
                                    </label>
                                    <select name="user_id" class="form-control form-select">
                                        @if(isset($masters))
                                            <option selected>Choose master</option>
                                            @foreach($masters as $master)
                                                <option value="{{$master->id}}">{{$master->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    {{--                                        <input id="user_id" name="user_id" type="number" class="form-control">--}}
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="service_id" @error('service_id') style="color: red" @enderror>
                                        Service * @error('service_id') ( {{ $message }} )@enderror
                                    </label>
                                    <select name="service_id" class="form-control form-select">
                                        <option selected>Choose service</option>
                                        @if(isset($services))
                                            @foreach($services as $service)
                                                <option value="{{$service->id}}">{{$service->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    {{--                                        <input id="service" name="service_id" type="number" class="form-control" required="">--}}
                                </div>
                            </div>

                            <div class="col-sm-12">
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label>Your Message *</label>--}}
                                {{--                                        <textarea class="form-control" rows="6"></textarea>--}}
                                {{--                                    </div>--}}
                                <div class="form-group m-top-10">
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
