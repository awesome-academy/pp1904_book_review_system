<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <div class="shop-left">
        <div class="left-title mb-20">
            <h4>Search</h4>
        </div>
        <div class="side-form">
            <form id="search-form" action="/books/search" method="post">
                @csrf
                <input type="text" name="search" placeholder="Search...." />
                <a href="javascript:{}" onclick="document.getElementById('search-form').submit();">
                    <i class="fa fa-search"></i>
                </a>
            </form>
        </div>
        <br>
        <div class="left-title mb-20">
            <h4>Category</h4>
        </div>
        <div class="left-menu mb-30">
            <ul>
                @foreach ($categories as $category)
                <li>
                    <a href="{{ action('BookController@category', $category->slug) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="left-title mb-20">
            <h4>Random</h4>
        </div>
        <div class="random-area mb-30">
            <div class="product-active-2 owl-carousel">
                <div class="product-total-2">
                    <div class="single-most-product bd mb-18">
                        <div class="most-product-img">
                            <a href="#"><img src="{{ asset('img/book/book (50).jpg') }}" alt="book" /></a>
                        </div>
                        <div class="most-product-content">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Endeavor Daytrip</a></h4>
                        </div>
                    </div>
                    <div class="single-most-product bd mb-18">
                        <div class="most-product-img">
                            <a href="#"><img src="{{ asset('img/book/book (51).jpg') }}" alt="book" /></a>
                        </div>
                        <div class="most-product-content">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Savvy Shoulder Tote</a></h4>
                        </div>
                    </div>
                    <div class="single-most-product">
                        <div class="most-product-img">
                            <a href="#"><img src="{{ asset('img/book/book (52).jpg') }}" alt="book" /></a>
                        </div>
                        <div class="most-product-content">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Compete Track Tote</a></h4>
                        </div>
                    </div>
                </div>
                <div class="product-total-2">
                    <div class="single-most-product bd mb-18">
                        <div class="most-product-img">
                            <a href="#"><img src="{{ asset('img/book/book (53).jpg') }}" alt="book" /></a>
                        </div>
                        <div class="most-product-content">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Voyage Yoga Bag</a></h4>
                        </div>
                    </div>
                    <div class="single-most-product bd mb-18">
                        <div class="most-product-img">
                            <a href="#"><img src="{{ asset('img/book/book (54).jpg') }}" alt="book" /></a>
                        </div>
                        <div class="most-product-content">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Impulse Duffle</a></h4>
                        </div>
                    </div>
                    <div class="single-most-product">
                        <div class="most-product-img">
                            <a href="#"><img src="{{ asset('img/book/book (55).jpg') }}" alt="book" /></a>
                        </div>
                        <div class="most-product-content">
                            <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h4><a href="#">Fusion Backpack</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area mb-30">
            <div class="banner-img-2">
                <a href="#"><img src="{{ asset('img/banner/31.jpg') }}" alt="banner" /></a>
            </div>
        </div>
        <div class="left-title-2">
            <h2>My Wish List</h2>
            <p>You have no items in your wish list.</p>
        </div>
    </div>
</div>
