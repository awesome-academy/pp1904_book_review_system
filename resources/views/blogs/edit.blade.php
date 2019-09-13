@extends('layouts.master')
@section('title', 'Create Blog')
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
            <li  class="active">
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
                        <li><a href="/blogs" >Blog</a></li>
                        <li><a href="/blogs/create" class="active">Create</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<div class="skill-area mb-70">
    <div class="container">
        <div class="row">
            <form action="/blogs/{{$blog->slug}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input name="title" type="text" value="{{$blog->title}}" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control">
                            @if ($categories->isEmpty())
                                <option value="0"> There is no category.</option>
                            @else
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if($category->id == $blog->category_id)
                                        selected="selected"
                                    @endif >{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="short_desc" type="text" value="{{$blog->short_desc}}" class="form-control" placeholder="Short description">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="demo1" >{{$blog->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Save</button>
                        <button type="reset" class="btn btn-primary"> Cancel</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    var simplemde = new SimpleMDE();
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endsection
