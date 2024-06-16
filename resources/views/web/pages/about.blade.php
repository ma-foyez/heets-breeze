@extends('web.app.app')


@section('main-body')
<div class="main-body">
    <!-- Page Title -->
    @include('web.inc.page-cover', [
        'backgroundImage' => 'assets/web/images/about/inner-banner.jpg',
        'pageTitle' => 'About Us',
        'breadcrumb' => 'About',
    ])

    <!-- End Page Title -->
    @include('web.component.about')

           <!-- Service area start here -->
           <section class="service-area pt-130 pb-130 bg-image" data-background="{{ asset('') }}assets/web/images/bg/about-bg.jpg">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center justify-content-lg-start">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service__item mb-50">
                            <div class="service__icon">
                                <img src="{{ asset('') }}assets/web/images/icon/feature-icon1.png" alt="icon">
                            </div>
                            <div class="service__content">
                                <h4>Free delivery</h4>
                                <p>For all orders above $45</p>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__icon">
                                <img src="{{ asset('') }}assets/web/images/icon/feature-icon2.png" alt="icon">
                            </div>
                            <div class="service__content">
                                <h4>Secure payments</h4>
                                <p>Confidence on all your devices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 d-none d-lg-block">
                        <div class="service__image image">
                            <img src="{{ asset('') }}assets/web/images/icon/service-image.png" alt="image">
                            <div class="section-header service-header d-flex align-items-center">
                                <span class="title-icon mr-10"></span>
                                <h2>sign up & save 25%</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service__item mb-50">
                            <div class="service__icon">
                                <img src="{{ asset('') }}assets/web/images/icon/feature-icon3.png" alt="icon">
                            </div>
                            <div class="service__content">
                                <h4>Top-notch support</h4>
                                <p>sayhello&gazacom</p>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__icon">
                                <img src="{{ asset('') }}assets/web/images/icon/feature-icon4.png" alt="icon">
                            </div>
                            <div class="service__content">
                                <h4>180 Days Return</h4>
                                <p>money back guranry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->
</div>
@endsection