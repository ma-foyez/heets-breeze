<header class="header-section animated menu-fixed fadeInDown bg-dark" style="opacity: 0.6;">
        <div class="container">
            <div class="header-wrapper">
               <div class="d-flex justify-content-between align-items-center w-100">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="logo" class="d-block d-lg-none">
                    <a href="{{ route('index') }}">
                        <img class="img-fluid logochange mx-auto"
                          src="{{asset('')}}uploads/content/{{ $content->website_logo }}" alt="logo" style="height: 80px" title="logo">
                    </a>
                </div>
               </div>

                <div class="d-flex justify-content-between w-100">
                    <div id="logo" class="d-none d-lg-block">
                        <a href="{{ route('index') }}">
                            <img class="img-fluid logochange mx-auto"
                              src="{{asset('')}}uploads/content/{{ $content->website_logo }}" alt="logo" style="height: 80px" title="logo">
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li>
                            <a href="{{ route('index') }}">Home </a>
                        </li>
                        <li>
                            <a href="{{ route('product.index') }}"> Products </a>
                        </li>
                       
                        <li>
                            <a href="#0">Categories <i class="fa-regular fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                @foreach ($categories as $category)
                                <li class="subtwohober">
                                    <a href="{{ route('category.details',$category->id) }}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
              
             
            </div>
        </div>
    </header>