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
                                    <a href="#"><span>{{ $user_name }} </span>in</a>
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
                        <img src="{{ $book_image }}" alt="blog" />
                    </div>
                    <div class="single-blog-content">
                        <div class="single-blog-title">
                            <h3>{{ $blog->title }}</h3>
                        </div>
                        <div class="blog-single-content">
                            <p>{{ $blog->content }}</p>
                        </div>
                    </div>
                    <div class="comment-tag">
                        <p>{{ $count_comment }} Comments/Tags: Asian, t-shirt, teen </p>
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
                        <h3>{{ $count_comment }} Comments</h3>
                    </div>
                    <div class="comment-reply-wrap mt-50">
                        <ul>
                            @foreach ($comments as $comment)
                            <li>
                                <div class="public-comment">
                                    <div class="comment-img">
                                        <a href="#"><img src="{{ asset('img/author/2.jpg') }}" alt="man" /></a>
                                    </div>
                                    <div class="public-text">
                                        <div class="single-comm-top">
                                            <a href="#">{{ $comment->user->name }}</a>
                                            <p>{{ $comment->created_at->toDayDateTimeString() }}
                                                <a data-toggle="collapse"
                                                    href="#collapseExample-{{ $comment->id }}"
                                                    aria-expanded="false"
                                                aria-controls="collapseExample">Reply</a>
                                            </p>
                                        </div>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </div>
                            </li>
                            @php
                                $comment_childs = App\Models\Comment::where([
                                    ['parent_id', $comment->id],
                                    ['post_type', 'App\Models\Blog'],
                                    ['post_id', $comment->post_id]
                                ])->with('user')->get();
                            @endphp
                            @foreach ($comment_childs as $comment_child)
                            <li>
                                <div class="public-comment public-comment-2">
                                    <div class="comment-img">
                                        <a href="#"><img src="{{ asset('img/author/2.jpg') }}" alt="man" /></a>
                                    </div>
                                    <div class="public-text">
                                        <div class="single-comm-top">
                                            <a href="#">{{ $comment_child->user->name }}</a>
                                            <p>{{ $comment_child->created_at->toDayDateTimeString() }} </p>
                                        </div>
                                        <p>{{ $comment_child->content }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <div class="collapse" id="collapseExample-{{ $comment->id }}">
                                <div class="comment-input mt-40">
                                    <div class="comment-input-textarea mb-30">
                                        <form id="my_form_comment_{{ $comment->id }}" method="post" action="/comment">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $blog->id }}">
                                            <input type="hidden" name="post_type" value="App\Models\Blog">
                                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                            <label>Comment</label>
                                            <textarea name="content" cols="30" rows="10" placeholder="Write your comment here"></textarea>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-post-button">
                                    <a style="margin-bottom: 30px" href="javascript:{}" onclick="document.getElementById('my_form_comment_{{ $comment->id }}').submit();">Post Comment</a>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                    <div class="comment-title-wrap mt-30">
                        <h3>Leave a comment </h3>
                    </div>
                    <div class="comment-input mt-40">
                        <div class="comment-input-textarea mb-30">
                            <form id="my_form_comment" method="post" action="/comment">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $blog->id }}">
                                <input type="hidden" name="post_type" value="App\Models\Blog">
                                <label>Comment</label>
                                <textarea name="content" cols="30" rows="10" placeholder="Write your comment here"></textarea>
                            </form>
                        </div>
                    </div>
                    <div class="single-post-button">
                        <a href="javascript:{}" onclick="document.getElementById('my_form_comment').submit();">Post Comment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-main-area-end -->
@endsection
