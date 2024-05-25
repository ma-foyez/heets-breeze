@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Contact Us</span> </h2>

        </div>
    </div>
</div>
<!-- End Page Title -->
<div class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    Contact us
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>
       
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="address">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icon_map_alt"></i>
                        {{ $content->office_address }}
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-envelope"></i>
                        {{ $content->website_email }}
                    </div>
                    <div class="col-md-4">
                        <i class="icon_mobile"></i>
                        {{ $content->website_phone }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.576728425693!2d90.38286427528378!3d23.869159578589496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41a98002459%3A0xddd1a4f2cc9f9ea6!2s1230%20Gausul%20Azam%20Ave%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1692684587754!5m2!1sen!2sbd"></iframe>
</div>
@endsection
