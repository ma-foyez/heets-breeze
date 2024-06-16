<div class="product__item bor">
    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
    <a href="{{ route('product.details',$product->id) }}" class="product__image pt-20 d-block">
        <img class="font-image" src="{{ asset('') }}uploads/products/{{ $product->image }}"
            alt="{{ $product->title }}">
        <img class="back-image" src="{{ asset('') }}uploads/products/{{ $product->image }}"
            alt="{{ $product->title }}">
    </a>
    <div class="product__content">
        <h4 class="mb-15"><a class="primary-hover" href="{{ route('product.details',$product->id) }}"> {{ $product->title }} </a></h4>
        <del>Dhs. {{ $product->regular_price }}</del><span class="primary-color ml-10">Dhs. {{ $product->offer_price }}</span>
        <div class="star mt-20">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>

    </div>
    <a class="product__cart d-block bor-top" href="#0"><i
            class="fa-regular fa-cart-shopping primary-color me-1"></i>
        <span>Add to
            cart</span></a>
</div>