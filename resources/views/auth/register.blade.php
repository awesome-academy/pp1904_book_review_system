@extends('layouts.master')
@section('title', 'Register')
@section('content')
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#" class="active">Register</a></li>
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
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Register</h2>
                    <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi architecto beat</p>
                </div>
            </div>
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                <form id="my_form_register" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="login-form">
                        <div class="single-login">
                            <label>Full name<span>*</span></label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="single-login">
                            <label>Username or email<span>*</span></label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="single-login">
                            <label>Passwords <span>*</span></label>
                             <input id="password" type="password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="single-login">
                            <label>Password Comfirm <span>*</span></label>
                             <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="single-login single-login-2">
                            <a href="javascript:{}" onclick="document.getElementById('my_form_register').submit();">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- user-login-area-end -->
@endsection
