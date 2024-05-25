@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>{{ $blog->title }}</span> </h2>

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
                        <a class="thumbnail" href="#"><img src="{{ asset('') }}uploads/blogs/{{ $blog->image }}"
                              title="img" alt="img"></a>

                    </div>
                    <!--thumb image code end-->

                    <!--Blog detail code start-->
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                        <h5><span>{{ $blog->title }}</span></h5>

                        <p class="shortdes">
                            {!!$blog->description !!}
                        </p>
                        <hr>

                    </div>
                </div>
            </div>
            <hr>

        </div>

    </div>
</div>
@endsection