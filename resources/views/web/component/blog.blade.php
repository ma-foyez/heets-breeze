<div class="blog">
    <div class="container">
        <div class="commontop text-center">
            <h4>Our Blog</h4>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <a href="{{ route('blog.details',$blog->id) }}">
                        <img class="img-fluid" src="{{asset('')}}uploads/blogs/{{ $blog->image }}" alt="image"
                          title="image">
                    </a>
                    <div class="caption">

                        <h4>{{ $blog->title }}</h4>
                        <p>{{ $blog->subtitle }}</p>
                        <div class="text-right">
                            <a href="{{ route('blog.details',$blog->id) }}">Read More >></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>