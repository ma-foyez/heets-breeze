@extends('web.app.app')


@section('main-body')
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>{{ $category->title }}</span> </h2>

        </div>
    </div>
</div>
<div class="container">
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
</div>
<!-- product end here -->
@endsection
