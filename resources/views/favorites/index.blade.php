@extends('layouts.master')
@section('title', 'Book')
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
            <li   class="active">
                <a href="/favorites">favorite<i class="fa fa-angle-down"></i></a>
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
                        <li><a href="/favorites" class="active">Favorite</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
    <div class="container">
        <div class="row">
            @include('books.layouts.leftaside')
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="category-image mb-30">
                    <a href="#"><img src="{{ asset('img/banner/32.jpg') }}" alt="banner" /></a>
                </div>
                <div class="section-title-5 mb-30">
                    <h2>Book</h2>
                </div>
                <div class="toolbar mb-30">
                    <div class="shop-tab">
                        <div class="tab-3">
                            <ul>
                                <li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
                                <li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
                            </ul>
                        </div>
                        <div class="list-page">
                            <p>Items 1-9 of 11</p>
                        </div>
                    </div>
                    <div class="field-limiter">
                        <div class="control">
                            <span>Show</span>
                            <!-- chosen-start -->
                            <select data-placeholder="Default Sorting" style="width:50px;" class="chosen-select" tabindex="1">
                                <option value="Sorting">1</option>
                                <option value="popularity">2</option>
                                <option value="rating">3</option>
                                <option value="date">4</option>
                            </select>
                            <!-- chosen-end -->
                        </div>
                    </div>
                    <div class="toolbar-sorter">
                        <span>Sort By</span>
                        <select id="sorter" class="sorter-options" data-role="sorter">
                            <option selected="selected" value="position"> Position </option>
                            <option value="name"> Product Name </option>
                            <option value="rate"> Rate </option>
                        </select>
                        <a href="#"><i class="fa fa-arrow-up"></i></a>
                    </div>
                </div>
                <!-- tab-area-start -->
                <div class="tab-content">
                    <div class="tab-pane active" id="th">
                        <div class="row">
                            @if ($favorites->isEmpty())
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <p>You have no items in your wish list.</p>
                            </div>
                            @else
                            @foreach ($favorites as $favorite)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- single-product-start -->
                                <div class="product-wrapper mb-40">
                                    <div>
                                        <a href="/books/{{ $favorite->book->slug }}">
                                            <img src="{{ asset($favorite->book->image) }}" alt="book" class="primary" />
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
                                        <h4><a href="/books/{{ $favorite->book->slug }}">{{ $favorite->book->title }}</a></h4>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- tab-area-end -->
                    <!-- pagination-area-start -->
                    @if ($favorites->isEmpty())
                    @else
                    <div class="pagination-area mt-50">
                        <div class="page-number">
                            {{ $favorites->render('vendor.pagination.book') }}
                        </div>
                    </div>
                    @endif
                    <!-- pagination-area-end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop-main-area-end -->
@endsection
