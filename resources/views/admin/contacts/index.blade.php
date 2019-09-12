@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Message</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/manager" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/manager/contacts" class="m-nav__link">
                        <span class="m-nav__link-text">Message</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a class="m-nav__link">
                        <span class="m-nav__link-text">Pending</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                Message
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="m-widget3">
            @foreach ($messages as $message)
            <div class="m-widget3__item">
                <div class="m-widget3__header">
                    <div class="m-widget3__user-img">
                        <img class="m-widget3__img" src="{{ asset('admin/app/media/img/users/user1.jpg')}}" alt="">
                    </div>
                    <div class="m-widget3__info">
                        <span class="m-widget3__username">
                            {{ $message->user->name}}
                        </span>
                        <br>
                        <span class="m-widget3__time">
                            {{ $message->updated_at->diffForHumans() }}
                        </span>
                    </div>
                    <a href="/manager/contacts/reply/{{$message->id}}">
                    <span class="m-widget3__status m--font-info">
                        Reply
                    </span>
                    </a>
                </div>
                <div class="m-widget3__body">
                    <h6 class="m-widget3__text">
                        {{ $message->subject }}
                    </h6>
                    <p class="m-widget3__text">
                        {{ $message->message }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
