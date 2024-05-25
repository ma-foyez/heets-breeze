<header class="">
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 top">
                <ul class="list-inline float-start icon">
                    <li class="list-inline-item">
                        <a href="contactus.html">
                            <i class="icon_phone"></i> Call us : <span>{{ $content->website_phone }}</span>
            </a>
            </li>

            </ul>
        </div> --}}
        <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12">
            <div id="logo">
                <a href="{{ route('index') }}">
                    <img class="img-fluid logochange mx-auto"
                      src="{{asset('')}}uploads/content/{{ $content->website_logo }}" alt="logo" style="height: 80px" title="logo">
                </a>
            </div>
        </div>

    </div>
    </div>
</header>


<div class="menu1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <!-- menu start here -->
                <div id="menu">
                    <nav class="navbar navbar-expand-lg">
                        <span class="menutext visible-xs">Menu</span>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation"><span
                              class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse padd0" id="navbarSupportedContent">
                            <ul class="nav navbar-nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About us</a>
                                </li>


                                <li class="dropdown topheading">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                      aria-expanded="false">Products</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">

                                                @foreach ($categories as $k => $category)
                                                <li>
                                                    <a
                                                      href="{{ route('category.details',$category->id) }}">{{ $category->title }}</a>
                                                </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product.index') }}">Products</a>
                                </li> --}}


                                <li>
                                    <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blogs.all') }}">Blogs</a>
                                </li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- menu end here -->
            </div>
        </div>
    </div>
</div>
