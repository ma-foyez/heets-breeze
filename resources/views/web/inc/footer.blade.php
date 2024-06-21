<footer class="footer-area bg-image" data-background="{{ asset('assets/web/images/footer/footer-bg.jpg') }}">
    <div class="container">
        <div class="footer__wrp pt-65 pb-65 bor-top bor-bottom">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".1s">
                    <div class="footer__item">
                        <img src="{{asset('')}}uploads/content/{{ $content->website_logo }}" class="img-fluid" title="logo"
                        alt="logo" style="width: 180px">
                      <small class="d-block">{{ $content->website_description }}</small>
                        {{-- <h4 class="footer-title">Customer Service</h4>
                        <ul>
                            <li><a href="contact.html"><span></span>Help Portal</a></li>
                            <li><a href="contact.html"><span></span>Contact Us</a></li>
                            <li><a href="error.html"><span></span>Delivery Information</a></li>
                            <li><a href="error.html"><span></span>Click and Collect</a></li>
                            <li><a href="error.html"><span></span>Refunds and Returns</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div class="footer__item">
                        <h4 class="footer-title">Categories</h4>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{ route('category.details',$category->id) }}"><span></span>{{ $category->title }}</a></li>
                           
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <div class="footer__item">
                        <h4 class="footer-title">Menu</h4>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}"> <span></span> Home</a>
                            </li>

                            <li>
                                <a href="{{ route('product.index') }}"> <span></span> Products</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"> <span></span> About us</a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}"> <span></span> Contact us</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('blogs.all') }}"> <span></span> Blogs</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".4s">
                    <div class="footer__item newsletter">
                        <h4 class="footer-title">Stay Connected</h4>
                       
                        <div class="">
                            <ul>
                                
                                <li>
                                    <a href="https://maps.app.goo.gl/46eFbjPsGpxtiKX66" target="_blank">
                                        <i class="fa-solid fa-map me-2"></i> {{ $content->office_address }}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{ $content->website_phone }}">
                                        <i class="fas fa-phone-alt me-2"></i> {{ $content->website_phone }}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $content->website_email }}">
                                        <i class="fa-solid fa-envelope-open-text me-2"></i> {{ $content->website_email }}
                                    </a>
                                </li>
                            </ul>
                        </div> 
                        <hr>
           
                        <div class="social-icon mt-40">
                            {{-- WhatsApp --}}
                            @if (!empty($content->whatsapp_number))
                            @php
                                $whatsappNumber = str_replace([' ', '-', '+'], '', $content->whatsapp_number); // Remove spaces, dashes, and plus signs
                                $whatsappMessage = urlencode("Hello! I am interested in discussing business with you."); // Default message text
                                $whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . $whatsappMessage;
                            @endphp
                            <a href="{{ $whatsappUrl }}" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            @endif
                            {{-- <a href="{{ $content->whatsapp }}" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a> --}}
                             {{-- Instagam  --}}
                            <a href="{{ $content->instagram_page }}" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                              {{-- Facebook  --}}
                            <a href="{{ $content->facebook_page }}" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy-text pt-50 pb-50">
            <a href="index.html" class="logo d-block">
                <img src="{{asset('')}}uploads/content/{{ $content->website_logo }}" class="img-fluid" title="logo"
                alt="logo">
            </a>
            <p>&copy; Copyright 2023 <a href="#0" class="primary-hover">odor</a> All Rights Reserved</p>
            <a href="#0" class="payment d-block image">
                <img src="{{ asset('assets/web/images/icon/payment.png') }}" alt="icon">
            </a>
        </div>
    </div>
</footer>

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

  <!-- Back to top area start here -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to top area end here -->