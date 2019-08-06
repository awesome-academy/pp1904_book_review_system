@extends('layouts.master')
@section('title', 'Login')
@section('content')
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#" class="active">login</a></li>
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
                    <h2>Login</h2>
                    <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi architecto beat</p>
                </div>
            </div>
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                 <form id="my_form_login" method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="login-form">
                    <div class="single-login">
                        <label>Username or email<span>*</span></label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="single-login">
                        <label>Passwords <span>*</span></label>
                         <input type="password" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="single-login single-login-2">
                        <a href="javascript:{}" onclick="document.getElementById('my_form_login').submit();">Login</a>
                        <input id="rememberme" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember me</span>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- user-login-area-end -->
@endsection
