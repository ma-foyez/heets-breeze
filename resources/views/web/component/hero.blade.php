<div class="slide">
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
</div>

<script>
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
</script>
