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
    </div>
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_report">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Comment</th>
                    <th>Number of Reporting</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->comment->user->name }}</td>
                    <td>{{ $report->comment->user->email }}</td>
                    <td>{{ $report->comment->content }}</td>
                    <td>{{ $report->total }}</td>
                    <td nowrap="">
                        <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" onclick="event.preventDefault();
                        document.getElementById('delete-comment-{{ $report->comment_id }}').submit();" title="Delete">
                            <i class="la la-trash"></i>
                        </a>
                        <a href="{{ route('reports.show', ['comment_id' => $report->comment_id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Detail">
                            <i class="la la-info-circle"></i>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@foreach ($reports as $report)
<form id="delete-comment-{{ $report->comment_id }}"
    action="{{ action('Manager\ReportController@destroy', $report->comment_id) }}" method="POST" style="display: none;">
    @method('DELETE')
    @csrf
</form>
@endforeach
@endsection
