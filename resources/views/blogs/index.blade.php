@extends('layouts.master')
@section('title', 'Blog')
@section('menu-area')
<div class="menu-area">
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/books">Book<i class="fa fa-angle-down"></i></a>
            </li>
            <li>
                <a href="/books">Audio books<i class="fa fa-angle-down"></i></a>
            </li>
            <li>
                <a href="/books">children’s books<i class="fa fa-angle-down"></i></a>
            </li>
            <li  class="active">
                <a href="/blogs">blog<i class="fa fa-angle-down"></i></a>
                <div class="sub-menu sub-menu-2">
                    <ul>
                        <li>
                            <a href="/blogs/create">White Blog</a>
                        </li>
                        <li>
                            <a>Another</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a>pages<i class="fa fa-angle-down"></i></a>
            </li>
            <li>
                <a>favorite<i class="fa fa-angle-down"></i></a>
            </li>
        </ul>
    </nav>
</div>
<div class="safe-area">
    <a>sale off</a>
</div>
@endsection
@section('content')
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/blogs" class="active">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- blog-main-area-start -->
<div class="blog-main-area mb-70">
    <div class="container">
        <div class="row">
            @include('blogs.layouts.leftaside')
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="blog-main-wrapper">
                    @foreach ($blogs as $blog)
                    <div class="single-blog-post">
                        <div class="author-destils mb-30">
                            <div class="author-left">
                                <div class="author-img">
                                    <a href="#"><img src="{{ asset('img/author/1.jpg') }}" alt="man" /></a>
                                </div>
                                <div class="author-description">
                                    <p>Posted by:
                                        <a><span>{{ $blog->user->name }}</span></a>
                                    </p>
                                    <span>{{ $blog->created_at->toFormattedDateString() }}</span>
                                </div>
                            </div>
                            <div class="author-right">
                                <span>Share this:</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-img mb-30">
                            <a href="/blogs/{{$blog->slug}}"><img src="{{ asset($blog->image) }}" alt="blog" /></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="single-blog-title">
                                <h3><a href="/blogs/{{$blog->slug}}">{{ $blog->title }}</a></h3>
                            </div>
                            <div class="blog-single-content">
                                <p>{{ $blog->short_desc }}</p>
                            </div>
                        </div>
                        <div class="blog-comment-readmore">
                            <div class="blog-readmore">
                                <a href="{{ action('BlogController@show', $blog->slug) }}">Read more<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="blog-pagination text-center">
                        {{ $blogs->render('vendor.pagination.default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-main-area-end -->
@endsection
