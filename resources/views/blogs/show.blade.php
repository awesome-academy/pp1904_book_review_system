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
                    <div class="author-destils mb-30">
                        <div class="author-left">
                            <div class="author-img">
                                <a href="#"><img src="{{ asset('img/author/1.jpg') }}" alt="man" /></a>
                            </div>
                            <div class="author-description">
                                <p>Posted by:
                                    <a href="#"><span>{{ $user_name }}</span>in</a>
                                    <a href="#">Fashion,</a>
                                    <a href="#">Fashion,</a>
                                    <a href="#">Fashion,</a>
                                </p>
                                <span>{{ $blogs->created_at->toFormattedDateString() }}</span>
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
                        <img src="{{ $book_image }}" alt="blog" />
                    </div>
                    <div class="single-blog-content">
                        <div class="single-blog-title">
                            <h3>{{ $blogs->title }}</h3>
                        </div>
                        <div class="blog-single-content">
                            <p>{{ $blogs->content }}</p>
                        </div>
                    </div>
                    <div class="comment-tag">
                        <p>03 Comments/Tags: Asian, t-shirt, teen </p>
                    </div>
                    <div class="sharing-post mt-20">
                        <div class="share-text">
                            <span>Share this post</span>
                        </div>
                        <div class="share-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment-title-wrap mt-30">
                        <h3>03 Comments</h3>
                    </div>
                    <div class="comment-reply-wrap mt-50">
                        <ul>
                            <li>
                                <div class="public-comment">
                                    <div class="comment-img">
                                        <a href="#"><img src="img/author/2.jpg" alt="man" /></a>
                                    </div>
                                    <div class="public-text">
                                        <div class="single-comm-top">
                                            <a href="#">Scott Salwolke</a>
                                            <p>March 08, 2017 at 1:38 am <a href="#">Reply</a></p>
                                        </div>
                                        <p>Thanks Marcus for the suggestions. I hadn't given much thought in how to craft my own blog entries in order to encourage responses. Yet, the goal is to generate followers and develop interactions so this makes perfect sense. I'll definitely incorporate some of these suggestions into my future writings.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="public-comment public-comment-2">
                                    <div class="comment-img">
                                        <a href="#"><img src="img/author/3.jpg" alt="man" /></a>
                                    </div>
                                    <div class="public-text">
                                        <div class="single-comm-top">
                                            <a href="#">Scott Salwolke</a>
                                            <p>March 08, 2017 at 1:38 am <a href="#">Reply</a></p>
                                        </div>
                                        <p>Thanks Marcus for the suggestions. I hadn't given much thought in how to craft my own blog entries in order to encourage responses. Yet, the goal is to generate followers and develop interactions so this makes perfect sense. I'll definitely incorporate some of these suggestions into my future writings.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="public-comment public-comment-2">
                                    <div class="comment-img">
                                        <a href="#"><img src="img/author/4.jpg" alt="man" /></a>
                                    </div>
                                    <div class="public-text">
                                        <div class="single-comm-top">
                                            <a href="#">Scott Salwolke</a>
                                            <p>March 08, 2017 at 1:38 am <a href="#">Reply</a></p>
                                        </div>
                                        <p>Thanks Marcus for the suggestions. I hadn't given much thought in how to craft my own blog entries in order to encourage responses. Yet, the goal is to generate followers and develop interactions so this makes perfect sense. I'll definitely incorporate some of these suggestions into my future writings.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-title-wrap mt-30">
                        <h3>Leave a comment </h3>
                    </div>
                    <div class="comment-input mt-40">
                        <p>We will not publish your email address. Required fields are marked*</p>
                        <div class="comment-input-textarea mb-30">
                            <form action="#">
                                <label>Comment</label>
                                <textarea name="massage" cols="30" rows="10" placeholder="Write your comment here"></textarea>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-comment-input mb-30">
                                    <form action="#">
                                        <label>Name*</label>
                                        <input type="text" placeholder="Name" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-comment-input mb-30">
                                    <form action="#">
                                        <label>Email*</label>
                                        <input type="text" placeholder="Email" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-comment-input mb-30">
                                    <form action="#">
                                        <label>Web</label>
                                        <input type="text" placeholder="Put your web address" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-post-button">
                        <a href="#">Post Comment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-main-area-end -->
@endsection
