@extends('layouts.master')
@section('title', 'Contact')
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
                            <a href="/blogs/myblog">My Blog</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a>pages<i class="fa fa-angle-down"></i></a>
            </li>
            <li>
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
                        <li><a href="/contacts" class="active">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- user-login-area-start -->
<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info">
                    <h3>Contact info</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address: </span>
                            1234 Pall Mall Street, England
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>Phone: </span>
                            (800) 0123 4567 890
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            <span>Email: </span>
                            <a href="#">info@bootexperts.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <h3><i class="fa fa-envelope-o"></i>Leave a Message</h3>
                    <form id="contact-form" action="/contacts" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-form-3">
                                    <input name="subject" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-form-3">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button class="submit" type="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
