@extends('web.app.app')


@section('main-body')
@include('web.inc.page-cover', [
    'backgroundImage' => 'assets/web/images/about/inner-banner.jpg',
    'pageTitle' => $category->title,
    'breadcrumb' => $category->title,
])

{{-- <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
            <h4>{{ $category->title }}</h4>

        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane"
                      type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
                </li>
                @foreach ($subcategories as $data)
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="{{ $data->id }}-tab" data-bs-toggle="tab"
                      data-bs-target="#{{ $data->id }}-tab-pane" type="button" role="tab"
                      aria-controls="{{ $data->id }}-tab-pane" aria-selected="false">{{ $data->title }}</button>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                  tabindex="0">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                            <div class="product-box">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="{{ route('product.details',$product->id) }}">
                                            <img src="{{ asset('') }}uploads/products/{{ $product->image }}" alt="image"
                                              title="image" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="caption text-center text-dark">

                                        <h5><a
                                              href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a>
                                        </h5>


                                    </div>

                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
                @foreach ($subcategories as $data)
                <div class="tab-pane fade" id="{{ $data->id }}-tab-pane" role="tabpanel"
                  aria-labelledby="{{ $data->id }}-tab" tabindex="0">

                    <div class="row">
                        @foreach ($products->where('product_sub_category',$data->id) as $product)
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="{{ route('product.details',$product->id) }}">
                                        <img src="{{ asset('') }}uploads/products/{{ $product->image }}" alt="image"
                                          title="image" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="float-start">
                                        <h5><a
                                              href="{{ route('product.details',$product->id) }}">{{ $product->title }}</a>
                                        </h5>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div> --}}

<section class="product-area pt-130 pb-130">
    <div class="container">
        <div class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
            <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                <span class="title-icon mr-10"></span>
                <h2>{{ $category->title }}</h2>
            </div>
            <ul class="nav nav-pills mt-4 mt-xl-0">
                <li class="nav-item wow fadeInUp" data-wow-delay=".1s">
                    <a href="#all-items" data-bs-toggle="tab" class="nav-link px-4 active">
                        All
                    </a>
                </li>
                @foreach ($categories as $category)
                <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                    <a href="#{{ $category->id }}-tab-pane" data-bs-toggle="tab" class="nav-link px-4 bor-left bor-right">
                        {{ $category->title }}
                    </a>
                @endforeach
            </ul>
        </div>
        <div class="tab-content">
            <div id="all-items" class="tab-pane fade show active">
                <div class="row g-4">
                   
                    @foreach ($products as $product)
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        @include('web.inc.product-card', [
                            'product' => $product,
                        ])
                    </div>
                    @endforeach

                </div>
            </div>


            {{-- filtering items  --}}
            @foreach ($categories as $category)

            <div id="{{ $category->id }}-tab-pane" class="tab-pane">
                <div class="row g-4">
                   
                    @foreach ($products->where('product_category',$category->id) as $product)
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        @include('web.inc.product-card', [
                            'product' => $product,
                        ])
                    </div>
                    @endforeach

                </div>
            </div>
            @endforeach
            {{-- filtering items close --}}
        </div>
    </div>
</section>
<!-- product end here -->
@endsection
