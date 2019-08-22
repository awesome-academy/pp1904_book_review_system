@extends('layouts.master')
@section('title', 'Home')
@section('content')
<!-- breadcrumbs-area-start -->
@include('blogs.layouts.breadcrumb')
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
                                        <a href="#"><span>{{ $blog->user->name }}</span>in</a>
                                        <a href="#">Fashion,</a>
                                        <a href="#">Fashion,</a>
                                        <a href="#">Fashion,</a>
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
                            <a href="#"><img src="{{ $blog->book->image }}" alt="blog" /></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="single-blog-title">
                                <h3><a href="#">{{ $blog->title }}</a></h3>
                            </div>
                            <div class="blog-single-content">
                                <p>{{ $blog->content }}</p>
                            </div>
                        </div>
                        <div class="blog-comment-readmore">
                            <div class="blog-readmore">
                                <a href="{{ action('BlogController@show', $blog->slug) }}">Read more<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="blog-com">
                                <a href="#">3 comments</a>
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
