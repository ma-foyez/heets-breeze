 <!-- About area start here -->
    <section class="discount-area about-area pt-95 pb-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image position-relative">
                            <img class="radius-10" src="{{ asset('') }}uploads/content/{{ $content->about_image }}" alt="image">
                            {{-- <img class="radius-10" src="{{ asset('')}}assets/web/images/about/about-image.jpg" alt="image"> --}}
                            <div class="video__btn-wrp">
                                <div class="video-btn video-pulse">
                                    <a class="video-popup secondary-bg">
                                        <img src="{{ asset('uploads/content/' . $content->website_favicon) }}" alt="" sizes="" srcset="">
                                        {{-- <i class="fa-solid fa-play"></i> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discount__item pl-30">
                            <div class="section-header">
                                <div class="section-title-icon">
                                    <span class="title-icon mr-10"></span>
                                    <h2>Welcome to {{ $content->website_name }}</h2>
                                </div>
                                <p class="mt-30 mb-55"> {!!$content->about_content !!} </p>
                                <a class="btn-one" href="{{ route('about') }}"><span>More About us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- About area end here -->