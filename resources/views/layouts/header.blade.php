<!-- header-area-start -->
<header>
    <!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="language-area">
                        <ul>
                            <li><img src="{{ asset('img/flag/1.jpg') }}" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('img/flag/2.jpg') }}" alt="flag" />france</a></li>
                                        <li><a href="#"><img src="{{ asset('img/flag/3.jpg') }}" alt="flag" />croatia</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub dolor">
                                    <ul>
                                        <li><a href="#">EUR €</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="account-area text-right">
                        <ul>
                            <li><a href="register.html">My Account</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            @guest
                            <li>
                                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search entire store here..." />
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.html"><img src="{{ asset('img/logo/logo.png') }}" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="my-cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <span>2</span>
                                <div class="mini-cart-sub">
                                    <div class="cart-product">
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/product/1.jpg" alt="book" /></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="#">Joust Duffle Bag</a></h5>
                                                <p>1 x £60.00</p>
                                            </div>
                                            <div class="cart-icon">
                                                <a href="#"><i class="fa fa-remove"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/product/3.jpg" alt="book" /></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
                                                <p>1 x £52.00</p>
                                            </div>
                                            <div class="cart-icon">
                                                <a href="#"><i class="fa fa-remove"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Total <span>£12.00</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a class="view-cart" href="cart.html">view cart</a>
                                        <a href="checkout.html">Check out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->
    <!-- main-menu-area-start -->
    <div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="index-2.html">Home-2</a></li>
                                            <li><a href="index-3.html">Home-3</a></li>
                                            <li><a href="index-4.html">Home-4</a></li>
                                            <li><a href="index-5.html">Home-5</a></li>
                                            <li><a href="index-6.html">Home-6</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="product-details.html">Book<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
                                        <span>
                                            <a href="#" class="title">Jackets</a>
                                            <a href="shop.html">Tops & Tees</a>
                                            <a href="shop.html">Polo Short Sleeve</a>
                                            <a href="shop.html">Graphic T-Shirts</a>
                                            <a href="shop.html">Jackets & Coats</a>
                                            <a href="shop.html">Fashion Jackets</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">weaters</a>
                                            <a href="shop.html">Crochet</a>
                                            <a href="shop.html">Sleeveless</a>
                                            <a href="shop.html">Stripes</a>
                                            <a href="shop.html">Sweaters</a>
                                            <a href="shop.html">hoodies</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Bottoms</a>
                                            <a href="shop.html">Heeled sandals</a>
                                            <a href="shop.html">Polo Short Sleeve</a>
                                            <a href="shop.html">Flat sandals</a>
                                            <a href="shop.html">Short Sleeve</a>
                                            <a href="shop.html">Long Sleeve</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Jeans Pants</a>
                                            <a href="shop.html">Polo Short Sleeve</a>
                                            <a href="shop.html">Sleeveless</a>
                                            <a href="shop.html">Graphic T-Shirts</a>
                                            <a href="shop.html">Hoodies</a>
                                            <a href="shop.html">Jackets</a>
                                        </span>
                                    </div>
                                </li>
                                <li><a href="product-details.html">Audio books<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
                                        <span>
                                            <a href="#" class="title">Shirts</a>
                                            <a href="shop.html">Tops & Tees</a>
                                            <a href="shop.html">Sweaters </a>
                                            <a href="shop.html">Hoodies</a>
                                            <a href="shop.html">Jackets & Coats</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Tops & Tees</a>
                                            <a href="shop.html">Long Sleeve </a>
                                            <a href="shop.html">Short Sleeve</a>
                                            <a href="shop.html">Polo Short Sleeve</a>
                                            <a href="shop.html">Sleeveless</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Jackets</a>
                                            <a href="shop.html">Sweaters</a>
                                            <a href="shop.html">Hoodies</a>
                                            <a href="shop.html">Wedges</a>
                                            <a href="shop.html">Vests</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Jeans Pants</a>
                                            <a href="shop.html">Polo Short Sleeve</a>
                                            <a href="shop.html">Sleeveless</a>
                                            <a href="shop.html">Graphic T-Shirts</a>
                                            <a href="shop.html">Hoodies</a>
                                        </span>
                                    </div>
                                </li>
                                <li><a href="product-details.html">children’s books<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu mega-menu-2">
                                        <span>
                                            <a href="#" class="title">Tops</a>
                                            <a href="shop.html">Shirts</a>
                                            <a href="shop.html">Florals</a>
                                            <a href="shop.html">Crochet</a>
                                            <a href="shop.html">Stripes</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Bottoms</a>
                                            <a href="shop.html">Shorts</a>
                                            <a href="shop.html">Dresses</a>
                                            <a href="shop.html">Trousers</a>
                                            <a href="shop.html">Jeans</a>
                                        </span>
                                        <span>
                                            <a href="#" class="title">Shoes</a>
                                            <a href="shop.html">Heeled sandals</a>
                                            <a href="shop.html">Flat sandals</a>
                                            <a href="shop.html">Wedges</a>
                                            <a href="shop.html">Ankle boots</a>
                                        </span>
                                    </div>
                                </li>
                                <li><a href="#">blog<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu sub-menu-2">
                                        <ul>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu sub-menu-2">
                                        <ul>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="product-details.html">product-details</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="safe-area">
                        <a href="product-details.html">sales off</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->
    <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul id="nav">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home-2</a></li>
                                        <li><a href="index-3.html">Home-3</a></li>
                                        <li><a href="index-4.html">Home-4</a></li>
                                        <li><a href="index-5.html">Home-5</a></li>
                                        <li><a href="index-6.html">Home-6</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">Book</a>
                                    <ul>
                                        <li><a href="shop.html">Tops & Tees</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="shop.html">Jackets & Coats</a></li>
                                        <li><a href="shop.html">Fashion Jackets</a></li>
                                        <li><a href="shop.html">Crochet</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Stripes</a></li>
                                        <li><a href="shop.html">Sweaters</a></li>
                                        <li><a href="shop.html">hoodies</a></li>
                                        <li><a href="shop.html">Heeled sandals</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Flat sandals</a></li>
                                        <li><a href="shop.html">Short Sleeve</a></li>
                                        <li><a href="shop.html">Long Sleeve</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">Audio books</a>
                                    <ul>
                                        <li><a href="shop.html">Tops & Tees</a></li>
                                        <li><a href="shop.html">Sweaters</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                        <li><a href="shop.html">Jackets & Coats</a></li>
                                        <li><a href="shop.html">Long Sleeve</a></li>
                                        <li><a href="shop.html">Short Sleeve</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Sweaters</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                        <li><a href="shop.html">Wedges</a></li>
                                        <li><a href="shop.html">Vests</a></li>
                                        <li><a href="shop.html">Polo Short Sleeve</a></li>
                                        <li><a href="shop.html">Sleeveless</a></li>
                                        <li><a href="shop.html">Graphic T-Shirts</a></li>
                                        <li><a href="shop.html">Hoodies</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">children’s books</a>
                                    <ul>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Florals</a></li>
                                        <li><a href="shop.html">Crochet</a></li>
                                        <li><a href="shop.html">Stripes</a></li>
                                        <li><a href="shop.html">Shorts</a></li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Trousers</a></li>
                                        <li><a href="shop.html">Jeans</a></li>
                                        <li><a href="shop.html">Heeled sandals</a></li>
                                        <li><a href="shop.html">Flat sandals</a></li>
                                        <li><a href="shop.html">Wedges</a></li>
                                        <li><a href="shop.html">Ankle boots</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">blog-details</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-details.html">Page</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-details.html">product-details</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">blog-details</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->
</header>
<!-- header-area-end -->
