{{-- <div class="slide">
    <div class="slideshow1 owl-carousel">
        @foreach ($heros as $hero)
        <div class="item position-relative">
            <img src="{{ asset('uploads/heros/' . $hero->image) }}" alt="banner" title="banner" class="img-fluid sliderchange" />
            <div class="hero-caption d-none d-md-block">
                <h1 class="hero-title">{{ $hero->title }}</h1>
                <h5 class="hero-subtitle">{{ $hero->subtitle }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}


        <!-- Banner area start here -->
        <section class="banner-two">
            <div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <img src="{{ asset('assets/web/images/shape/vape1.png') }}" alt="shape">
            </div>
            <div class="banner-two__shape-right d-none d-lg-block wow bounceInRight" data-wow-duration="1s" data-wow-delay=".1s">
                <img class="sway_Y__animation " src="{{ asset('assets/web/images/shape/vape2.png') }}" alt="shape">
            </div>
            <div class="swiper banner-two__slider">
                <div class="swiper-wrapper">
                    @foreach ($heros as $hero)
                    {{-- <div class="item position-relative">
                        <img src="{{ asset('uploads/heros/' . $hero->image) }}" alt="banner" title="banner" class="img-fluid sliderchange" />
                        <div class="hero-caption d-none d-md-block">
                            <h1 class="hero-title">{{ $hero->title }}</h1>
                            <h5 class="hero-subtitle">{{ $hero->subtitle }}</h5>
                        </div>
                    </div> --}}
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="{{ asset('uploads/heros/' . $hero->image) }}"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s">
                                    {{-- <img src="assets/images/icon/fire.svg" alt="icon">  --}}
                                    <img src="{{ asset('assets/web/images/icon/fire.svg') }}" alt="icon"> 
                                    GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br> for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s"> {{ $hero->subtitle }} </p>
                                {{-- <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp" data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp" data-delay="1.9s"><span>View Details</span></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <div class="banner-two__arry-btn">
                <button class="arry-prev mb-15 banner-two__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                <button class="arry-next active banner-two__arry-next"><i
                        class="fa-light fa-chevron-right"></i></button>
            </div>
        </section>
        <!-- Banner area end here -->

{{-- <script>
// Initialize Owl Carousel
$('.slideshow1').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    smartSpeed: 1500,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        991: {
            items: 1
        },
        1180: {
            items: 1
        }
    },
    onChanged: function (event) {
        // Remove animation classes from all elements
        $('.hero-title, .hero-subtitle').removeClass('animate__animated animate__fadeInUp animate__fadeInDown');

        // Add animation classes to elements in the current slide
        var currentSlide = event.item.index;
        var animationClassTitle = currentSlide % 2 === 0 ? 'animate__fadeInUp' : 'animate__fadeInDown';
        var animationClassSubtitle = currentSlide % 2 === 0 ? 'animate__fadeInDown' : 'animate__fadeInUp';

        $('.slideshow1 .owl-item').eq(currentSlide).find('.hero-title').addClass('animate__animated ' + animationClassTitle);
        $('.slideshow1 .owl-item').eq(currentSlide).find('.hero-subtitle').addClass('animate__animated ' + animationClassSubtitle);
    }
});
</script> --}}
