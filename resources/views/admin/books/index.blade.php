@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Book</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Book</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">example</span>
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
                Select DataTable
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="/manager/books/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                            <i class="la la-book"></i>
                            <span>New Book</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Rate Avg</th>
                    <th>Number Of Reviews</th>
                    <th>Image</th>
                    <th>Public Date</th>
                    <th>Author</th>
                    <th>Publishing Company</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->rate_average }}</td>
                    <td>{{ $book->user_rate_total }}</td>
                    <td>{{ $book->image }}</td>
                    <td>{{ $book->public_date }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publishing_company }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td nowrap>
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ action('Manager\BookController@edit', $book->slug) }}">
                                <i class="la la-edit"></i> Edit</a>
                                <a class="dropdown-item"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{ $book->slug }}').submit();">
                                <i class="la la-trash"></i> Delete</a>
                            </div>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($books as $book)
    <form id="delete-form-{{ $book->slug }}" action="{{ action('Manager\BookController@destroy', $book->slug) }}" method="POST" style="display: none;">
        @method('DELETE')
        @csrf
    </form>
    @endforeach
</div>
@endsection
