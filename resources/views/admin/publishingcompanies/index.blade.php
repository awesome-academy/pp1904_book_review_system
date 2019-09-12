@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Publishing Company</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/manager" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/manager/publishingcompanies" class="m-nav__link">
                        <span class="m-nav__link-text">Publishing Company</span>
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
                All Publishing Company
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="/manager/publishingcompanies/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                            <i class="la la-book"></i>
                            <span>New Publishing Company</span>
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
                    <th>Publishing Company Name</th>
                    <th>Publishing Company’s books</th>
                    <th>Address</th>
                    <th>Website</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publishing_companies as $publishing_company)
                <tr>
                    <td>{{ $publishing_company->name }}</td>
                    <td>{{ $publishing_company->books->count() }}</td>
                    <td>439 {{ $publishing_company->name }} Karley Loaf Suite 897</td>
                    <td>{{ $publishing_company->name }}.com</td>
                    <td>0999000099</td>
                    <td nowrap>
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ action('Manager\PublishingCompanyController@edit', $publishing_company->id) }}">
                                <i class="la la-edit"></i> Edit</a>
                                <a class="dropdown-item"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form-{{$publishing_company->id}}').submit();">
                                <i class="la la-trash"></i> Delete</a>
                            </div>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($publishing_companies as $publishing_company)
    <form id="delete-form-{{ $publishing_company->id }}" action="{{ action('Manager\PublishingCompanyController@destroy', $publishing_company->id) }}" method="POST" style="display: none;">
        @method('DELETE')
        @csrf
    </form>
    @endforeach
</div>
@endsection
