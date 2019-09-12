@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">User</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/manager" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/manager/users" class="m-nav__link">
                        <span class="m-nav__link-text">User</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">All</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                All User
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="/manager/users/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                            <i class="la la-book"></i>
                            <span>New User</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_author">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Image</th>
                    <th>Website</th>
                    <th>Date Of Birth</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>img/user/{{$user->name}}.png</td>
                    <td>{{ $user->name }}.com</td>
                    <td>05/20/1990</td>
                    <td nowrap>
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ action('Manager\UserController@edit', $user->id) }}">
                                <i class="la la-edit"></i> Edit</a>
                                <a class="dropdown-item"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{$user->id}}').submit();">
                                <i class="la la-trash"></i> Delete</a>
                            </div>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($users as $user)
    <form id="delete-form-{{ $user->id }}" action="{{ action('Manager\UserController@destroy', $user->id) }}" method="POST" style="display: none;">
        @method('DELETE')
        @csrf
    </form>
    @endforeach
</div>
@endsection
