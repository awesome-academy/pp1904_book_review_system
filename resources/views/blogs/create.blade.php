@extends('layouts.master')
@section('title', 'Home')
@section('content')
<!-- breadcrumbs-area-start -->
@include('blogs.layouts.breadcrumb')
<div class="skill-area mb-70">
    <div class="container">
        <div class="row">
            <form action="/blogs" method="post" enctype="multipart/form-data">
            @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input name="title" type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input name="short_desc" type="text" class="form-control" placeholder="Short description">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="demo1" ></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> submit</button>
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
