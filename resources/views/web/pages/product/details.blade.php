@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>{{ $product->title }}</span> </h2>

        </div>
    </div>
</div>
<!-- End Page Title -->
<div class="shopdetail pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <div class="row">
                    <!--thumb image code start-->
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                        <a class="thumbnail" href="#"><img src="{{ asset('') }}uploads/products/{{ $product->image }}"
                              title="img" alt="img"></a>

                    </div>
                    <!--thumb image code end-->

                    <!--Product detail code start-->
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                        <h5><span>{{ $product->title }}</span></h5>

                        <p class="shortdes">
                            {!!$product->description !!}
                        </p>
                        <hr>

                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contactus">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                                <h4>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    Ask For Pricing
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                </h4>
                            </div>
                            <div class="offset-lg-2 offset-md-0 col-md-8 col-sm-8  col-xs-12">
                                <form method="post" action="{{ route('contact') }}" class="form-horizontal">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="name" value="" id="input-name"
                                                  class="form-control" placeholder="Name *" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="email" value="" id="input-email"
                                                  class="form-control" placeholder="Email *" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="phone" value="" class="form-control"
                                                  placeholder="Your Phone *" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="product" class="form-control"
                                                  value="{{ $product->title }}" required="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <i class="icofont icofont-pencil-alt-5"></i>
                                                <textarea name="messege" id="input-enquiry" class="form-control"
                                                  placeholder="Your Comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons text-right">
                                        <input class="btn btn-primary" type="submit" value="Send Message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection