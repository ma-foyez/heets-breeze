@extends('web.app.app')


@section('main-body')
<!-- Page Title -->

@include('web.inc.page-cover', [
    'backgroundImage' => 'assets/web/images/about/inner-banner.jpg',
    'pageTitle' => 'Contact Us',
    'breadcrumb' => 'Contact',
])

<!-- End Page Title -->
<section class="contact pt-130 pb-130">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="content radius-10 bg-image">
                    <h2>Have something in mind? <br>
                        Let's talk.</h2>
                    <p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore <br> et dolore magna
                        aliqua.
                        Ut enim ad minim.</p>
                    <div class="arry"><img src="assets/images/contact/arry.png" alt=""></div>
                    <ul>
                        <li>
                            <a href="https://maps.app.goo.gl/46eFbjPsGpxtiKX66" target="_blank">
                                <i class="fa-solid fa-location-dot"></i> {{ $content->office_address }} </a>
                        </li>
                        <li>
                            <a href="tel:{{ $content->website_phone }}">
                                <i class="fa-solid fa-phone-volume"></i>{{ $content->website_phone }}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ $content->website_email }}"><i class="fa-solid fa-envelope">
                            </i> {{ $content->website_email }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-area">
                    <form action="#0">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <select name="subject" id="subject" style="display: none;">
                            <option value="0">Select Subject</option>
                            <option value="0">Account</option>
                            <option value="0">Service</option>
                            <option value="0">Pricing</option>
                            <option value="0">Support</option>
                        </select><div class="nice-select" tabindex="0"><span class="current">Select Subject</span><ul class="list"><li data-value="0" class="option selected focus">Select Subject</li><li data-value="0" class="option">Account</li><li data-value="0" class="option">Service</li><li data-value="0" class="option">Pricing</li><li data-value="0" class="option">Support</li></ul></div>
                        <textarea name="Your Review" id="massage" placeholder="Message..."></textarea>
                        <div class="radio-btn mt-2">
                            <span></span>
                            <p>I accept your terms &amp; conditions</p>
                        </div>
                        <button class="mt-40 btn-one"><span>Submit Now</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14444.656910712387!2d55.409975!3d25.163932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f614eb88deb71%3A0x1639bd9727e18e15!2sDubai%20International%20City%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1718523772274!5m2!1sen!2sbd"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
