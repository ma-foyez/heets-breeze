@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
@include('web.inc.page-cover', [
    'backgroundImage' => 'assets/web/images/about/inner-banner.jpg',
    'pageTitle' => $product->title,
    'breadcrumb' => $product->title,
])

<section class="shop-single pt-130 pb-130">
    <div class="container">
        <!-- product-details area start here -->
        <div class="product-details-single pb-40">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="image img">
                        <img class="back-image" src="{{ asset('') }}uploads/products/{{ $product->image }}" alt="{{ $product->title }}">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content h24">
                        <h3 class="pb-2 primary-color">{{ $product->title }}</h3>

                        <h2 class="pb-3">Dhs. <del>{{ $product->regular_price }} <span class="primary-color ml-10">{{ $product->offer_price }}</span></h2>
                        <h4 class="pb-2 primary-color">Product Description</h4>
                        <p class="text-justify mb-10"> {!!$product->description !!}  </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="details-area">
                                <div class="category flex-wrap mt-4 d-flex py-3 bor-top bor-bottom">
                                    <h4 class="pe-3">Categories :</h4>
                                    @php
                                        $category = $categories->find($product->product_category);
                                    @endphp
                                    @if($category)
                                        <li>
                                            <a href="#0" class="primary-hover">{{ $category->title }}</a>
                                        </li>
                                    @endif
                                </div>
                               
                                <div class="d-flex flex-wrap align-items-center py-3 bor-bottom">
                                    <h4 class="pe-3">Share:</h4>
                                   <div class="social-media">
                                        @php
                                            $currentUrl = url()->current();
                                        @endphp
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}" target="_blank" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url={{ $currentUrl }}" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $currentUrl }}" target="_blank" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="https://www.instagram.com/?url={{ $currentUrl }}" target="_blank" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="https://pinterest.com/pin/create/button/?url={{ $currentUrl }}" target="_blank" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                             
                                <a href="https://wa.me/?text={{ urlencode('I want to buy this product: ' . $currentUrl) }}" target="_blank" class="d-block text-center btn-two mt-40">
                                    <span><i class="fa-solid fa-basket-shopping pe-2"></i>  Buy Now </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details area end here -->

    </div>
    <!-- description review area end here -->
</section>

@endsection