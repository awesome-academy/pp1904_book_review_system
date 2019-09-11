@extends('layouts.master')
@section('title', 'Home')
@section('menu-area')
<div class="menu-area">
    <nav>
        <ul>
            <li class="active">
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
            <li>
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
<!-- slider-area-start -->
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(img/slider/1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="slider-content slider-animated-1 text-center">
                            <h1>Huge Sale</h1>
                            <h2>koparion</h2>
                            <h3>Now starting at £99.00</h3>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url(img/slider/2.jpg);">
            <div class="container">
                <div class="slider-content slider-content-2 slider-animated-1">
                    <h1>We can help get your</h1>
                    <h2>Books in Order</h2>
                    <h3>and Accessories</h3>
                    <a href="#">Contact Us Today!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-area-end -->
<!-- product-area-start -->
<div class="product-area pt-95 xs-mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h2>Top interesting</h2>
                    <p>Browse the collection of our best selling and top interresting products. <br /> ll definitely find what you are looking for..</p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- tab-menu-start -->
                <div class="tab-menu mb-40 text-center">
                    <ul>
                        <li class="active"><a href="#Audiobooks" data-toggle="tab">New Arrival  </a></li>
                        <li><a href="#books"  data-toggle="tab">Top Rating</a></li>
                        <li><a href="#bussiness" data-toggle="tab">Most View</a></li>
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            <div class="tab-pane active" id="Audiobooks">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    @foreach ($new_books as $new_book)
                    <div class="product-wrapper">
                        <div>
                            <a href="/books/{{ $new_book->slug }}">
                                <img src="{{ asset($new_book->image) }}" alt="book" class="primary" />
                            </a>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="/books/{{ $new_book->slug }}">{{ $new_book->title }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-product-end -->
                </div>
            </div>
            <div class="tab-pane fade" id="books">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    @foreach ($top_books as $top_book)
                    <div class="product-wrapper">
                        <div>
                            <a href="/books/{{ $top_book->slug }}">
                                <img src="{{ asset($top_book->image) }}" alt="book" class="primary" />
                            </a>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="/books/{{ $top_book->slug }}">{{ $top_book->title }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-product-end -->
                </div>
            </div>
            <div class="tab-pane fade" id="bussiness">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    @foreach ($most_views as $most_view)
                    <div class="product-wrapper">
                        <div>
                            <a href="/books/{{ $most_view->slug }}">
                                <img src="{{ asset($most_view->image) }}" alt="book" class="primary" />
                            </a>
                        </div>
                        <div class="product-details text-center">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="/books/{{ $most_view->slug }}">{{ $most_view->title }}</a></h4>
                            <div class="product-price">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-product-end -->
                </div>
            </div>
        </div>
        <!-- tab-area-end -->
    </div>
</div>
<!-- product-area-end -->
<!-- new-book-area-start -->
<div class="new-book-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                    <h2>Editor's Choice</h2>
                </div>
            </div>
        </div>
        <div class="tab-active owl-carousel">
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (90).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (91).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (92).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (93).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (94).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (95).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (96).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (97).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (98).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (99).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
            </div>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (100).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/book/book (101).jpg" alt="book" class="primary" />
                        </a>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                    </div>
                </div>
                <!-- single-product-end -->
            </div>
        </div>
    </div>
</div>
<!-- new-book-area-start -->
<!-- recent-post-area-start -->
<div class="recent-post-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-30 section-title-res">
                    <h2>Latest from our blog</h2>
                </div>
            </div>
            <div class="post-active owl-carousel text-center">
                @foreach ($new_blogs as $new_blog)
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="/blogs/{{$new_blog->slug}}"><img src="{{ asset($new_blog->image)}}" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">{{ $new_blog->created_at->isoFormat('D')}}</span>
                                <span class="moth-time">{{ $new_blog->created_at->isoFormat('MMM')}}</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="/blogs/{{$new_blog->slug}}">{{ $new_blog->title}}</a></h3>
                            <span class="meta-author"> {{ $new_blog->user->name}} </span>
                            <p>{{$new_blog->short_desc}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- recent-post-area-end -->
<!-- social-group-area-start -->
<div class="social-group-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="section-title-3">
                    <h3>Latest Tweets</h3>
                </div>
                <div class="twitter-content">
                    <div class="twitter-icon">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="twitter-text">
                        <p>
                            Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum notare quam
                        </p>
                        <a href="#">posthemes</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="section-title-3">
                    <h3>Stay Connected</h3>
                </div>
                <div class="link-follow">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li class="hidden-sm"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li class="hidden-sm"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- social-group-area-end -->
@endsection
