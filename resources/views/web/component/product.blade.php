<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
            <h4>Our products</h4>

        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane"
                      type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
                </li>
                @foreach ($categories as $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="{{ $category->id }}-tab" data-bs-toggle="tab"
                      data-bs-target="#{{ $category->id }}-tab-pane" type="button" role="tab"
                      aria-controls="{{ $category->id }}-tab-pane" aria-selected="false">{{ $category->title }}</button>
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
                @foreach ($categories as $category)
                <div class="tab-pane fade" id="{{ $category->id }}-tab-pane" role="tabpanel"
                  aria-labelledby="{{ $category->id }}-tab" tabindex="0">

                    <div class="row">
                        @foreach ($products->where('product_category',$category->id) as $product)
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
