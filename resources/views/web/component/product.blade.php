  <!-- Product area start here -->
  <section class="product-area pt-130 pb-130">
    <div class="container">
        <div class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
            <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                <span class="title-icon mr-10"></span>
                <h2>latest arrival products</h2>
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
                </li>
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
<!-- Product area end here -->