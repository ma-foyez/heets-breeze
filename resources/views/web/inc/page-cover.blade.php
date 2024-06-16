<!-- Page banner area start here -->
<section class="page-banner bg-image pt-130 pb-130" data-background="{{ asset($backgroundImage) }}">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">{{ $pageTitle }}</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="{{ route('index') }}" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i class="fa-regular text-white fa-angle-right"></i></a>
            <span>{{ $breadcrumb }}</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->
