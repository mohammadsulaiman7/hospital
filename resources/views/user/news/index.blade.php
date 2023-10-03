<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body> -->
    @extends('user.layout')
    @section('content')
        
    <!-- Back to top button -->
    <div class="back-to-top"></div>
  
    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
      <div class="banner-section">
        <div class="container text-center wow fadeInUp">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
          <h1 class="font-weight-normal">News</h1>
        </div> <!-- .container -->
      </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->
  
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              {{-- News  --}}
            @foreach ($newss as $news)
              <div class="col-sm-6 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="post-category">
                      <a href="#">{{$news->category->name}}</a>
                    </div>
                    <a href="blog-details" class="post-thumb">
                      <img src="{{asset('storage/covers/'.$news->cover)}}" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <h5 class="post-title"><a href="blog-details.html">{{Str::limit($news->title,30)}}</a></h5>
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
            </div> <!-- .row -->
          </div>
              
          {{-- End news --}}




          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-block">
                <h3 class="sidebar-title">Search</h3>
                <form action="#" class="search-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                    <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                  </div>
                </form>
              </div>
              <div class="sidebar-block">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="categories">
                  @foreach ($categories as $category)
                  <li><a href="#">{{$category->name}}<span>{{$category->news->count()}}</span></a></li>
                  @endforeach
                </ul>
              </div>
  
              
            </div>
          </div> 
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
  
  {{-- <script src="../assets/js/jquery-3.5.1.min.js"></script>
  
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
  <script src="../assets/vendor/wow/wow.min.js"></script>
  
  <script src="../assets/js/theme.js"></script> --}}
  {!! $newss->links() !!}
  @endsection
  