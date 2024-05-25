<div class="about">
    <div class="container">
        <div class="commontop text-center">
            <h4>Welcome to <span>{{ $content->website_name }}</span></h4>

        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wid1">
                <div class="bg">
                    <img src="{{ asset('') }}uploads/content/{{ $content->about_image }}" alt="img" title="img"
                      class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wid2">{!!$content->about_content !!}</p>
                {{-- <a class="float-end" href="aboutus.html">Read More <i class="arrow_carrot-2right"></i></a> --}}
            </div>
        </div>
    </div>
</div>
