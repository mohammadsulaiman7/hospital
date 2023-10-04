{{-- <!DOCTYPE html>
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
<body> --}}
@extends('user.layout')
@section('title', 'News details')
@section('content')

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-thumb">
                            <img src="{{ asset('storage/covers/' . $news->cover) }}" alt="">
                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey">By</span> <a href="#">{{ $news->user->name }}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <a href="#">{{ $news->created_at->format('Y-m-d') }}</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <a href="{{ route('categories.show', $news->category) }}">{{ $news->category->name }}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">
                                <a href="#">8 Comments</a>
                            </div>
                        </div>
                        <h2 class="post-title h1">{{ $news->title }}</h2>
                        <div class="post-content">
                            <p>{{$news->content}}.</p>
                        </div>
                        <div class="post-tags">
                            <a href="{{route('categories.show',$news->category)}}" class="tag-link">{{$news->category->name}}</a>
                        </div>
                    </article> <!-- .blog-details -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="">
                            <div class="form-row form-group">
                            </div>

                            <div class="form-group">
                                <label for="message">Comment</label>
                                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
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
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    
    {{-- 
  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
  <script src="../assets/vendor/wow/wow.min.js"></script>
  
  <script src="../assets/js/theme.js"></script> --}}
@endsection
