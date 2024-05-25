@extends('web.app.app')


@section('main-body')
<div class="main-body">
    <!-- Page Title -->
    <div class="bread-crumb">
        <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top"
          title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span>About Us</span> </h2>

            </div>
        </div>
    </div>
    <!-- End Page Title -->
    @include('web.component.about')

</div>
@endsection