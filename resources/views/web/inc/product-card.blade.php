@php
    // Assuming $content->whatsapp_number contains the WhatsApp number
    $whatsappNumber = str_replace([' ', '-', '+'], '', $content->whatsapp_number); // Remove spaces, dashes, and plus signs
    $productUrl = route('product.details', $product->id);
    $whatsappMessage = urlencode("Hello! I'm interested to purchasing {$product->title}.\nHere is the link: {$productUrl}");
    $whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . $whatsappMessage;
@endphp

<div class="product__item bor">
    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
    <a href="{{ $productUrl }}" class="product__image pt-20 d-block">
        <img class="font-image" src="{{ asset('') }}uploads/products/{{ $product->image }}"
            alt="{{ $product->title }}">
        <img class="back-image" src="{{ asset('') }}uploads/products/{{ $product->image }}"
            alt="{{ $product->title }}">
    </a>
    <div class="product__content">
        <h4 class="mb-15"><a class="primary-hover" href="{{ $productUrl }}"> {{ $product->title }} </a></h4>
        <del>AED {{ $product->regular_price }}</del><span class="primary-color ml-10">AED {{ $product->offer_price }}</span>
        <div class="star mt-20">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>

    </div>


    <a href="{{ $whatsappUrl }}" target="_blank" class="product__cart d-block bor-top"><i
            class="fa-regular fa-cart-shopping primary-color me-1"></i>
        <span>Buy Now</span></a>
</div>