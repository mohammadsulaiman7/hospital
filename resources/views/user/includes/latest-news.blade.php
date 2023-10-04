<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
            @foreach ($newss as $news)
                
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="#">{{$news->category->name}}</a>
                        </div>
                        <a href="blog-details.html" class="post-thumb">
                            <img src="{{asset('storage/covers/'.$news->cover)}}" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="{{route('news.show',$news)}}">{{Str::limit($news->title,20)}}</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="{{asset('storage/profiles/'.$news->user->profile)}}" alt="">
                                </div>
                                <span>{{$news->user->name}}</span>
                            </div>
                            <span class="mai-time"></span> {{$news->created_at->format('Y-m-d')}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="{{route('news.index')}}" class="btn btn-primary">Read More</a>
            </div>

        </div>
    </div>
</div> <!-- .page-section -->