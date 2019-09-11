@extends('layouts.master')
@section('title', '404')
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
<!-- section-element-area-start -->
<div class="section-element-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-header text-center mb-20">
                    <img src="{{ asset('img/3.jpg') }}" alt="not-found-img" />
                    <p>Oops! That page can’t be found.</p>
                </div>
                <div class="entry-content text-center mb-30">
                    <p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.</p>
                    <a href="/">GO TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section-element-area-end -->
@endsection
