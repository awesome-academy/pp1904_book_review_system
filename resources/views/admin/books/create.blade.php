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
<div class="m-portlet m-portlet--tab">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                Base Form Controls
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form class="m-form m-form--fit m-form--label-align-right" method="post" action="/manager/books">
        @csrf
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Title</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="text" name="title" class="form-control m-input" id="exampleInputEmail1">
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputPassword1">Author</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select name="publishing_company" class="form-control m-input" id="exampleSelect1">
                        @if ($authors->isEmpty())
                            <option value="0"> There is no author.</option>
                        @else
                            @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Public Date</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control m-input" readonly="" id="m_datepicker_3"
                        name="public_date">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleSelect1">Publishing Company</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select name="publishing_company" class="form-control m-input" id="exampleSelect1">
                        @if ($publishing_companies->isEmpty())
                            <option value="0"> There is no publishing company.</option>
                        @else
                            @foreach ($publishing_companies as $publishing_company)
                            <option value="{{ $publishing_company->id }}">{{ $publishing_company->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12" for="exampleSelect2">Category</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select name="category_id" class="form-control m-input" id="exampleSelect2">
                        @if ($categories->isEmpty())
                            <option value="0"> There is no category.</option>
                        @else
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Detail</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <textarea name="detail" class="form-control m-input" id="m_autosize_1" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Main Image</label>
                <div class="input-group col-lg-6 col-md-9 col-sm-12">
                    <input name="image-1" id="preview-name-image-1" type="text" class="form-control" readonly>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_1">Upload</button>
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Image 2</label>
                <div class="input-group col-lg-6 col-md-9 col-sm-12">
                    <input name="image-2" id="preview-name-image-2" type="text" class="form-control" readonly>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_2">Upload</button>
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Image 3</label>
                <div class="input-group col-lg-6 col-md-9 col-sm-12">
                    <input name="image-3" id="preview-name-image-3" type="text" class="form-control" readonly>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_3">Upload</button>
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Image 4</label>
                <div class="input-group col-lg-6 col-md-9 col-sm-12">
                    <input name="image-4" id="preview-name-image-4" type="text" class="form-control" readonly>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_4">Upload</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-success"> Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
<div class="modal fade show" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 16px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="upload-demo-1"></div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Select image to crop:</label>
                    <div class="custom-file col-lg-9 col-md-9 col-sm-12">
                        <input type="file" class="custom-file-input" id="image-1">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary upload-image-1">Upload Image</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 16px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="upload-demo-2"></div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Select image to crop:</label>
                    <div class="custom-file col-lg-9 col-md-9 col-sm-12">
                        <input type="file" class="custom-file-input" id="image-2">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary upload-image-2">Upload Image</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 16px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="upload-demo-3"></div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Select image to crop:</label>
                    <div class="custom-file col-lg-9 col-md-9 col-sm-12">
                        <input type="file" class="custom-file-input" id="image-3">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary upload-image-3">Upload Image</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 16px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="upload-demo-4"></div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">Select image to crop:</label>
                    <div class="custom-file col-lg-9 col-md-9 col-sm-12">
                        <input type="file" class="custom-file-input" id="image-4">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary upload-image-4">Upload Image</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var resize1 = $('#upload-demo-1').croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: {
        width: 316,
        height: 475
    },
    boundary: {
        width: 500,
        height: 475
    }
});
$('#image-1').on('change', function () {
    var reader = new FileReader();
        reader.onload = function (e) {
        resize1.croppie('bind',{
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
});
$('.upload-image-1').on('click', function (ev) {
    resize1.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (img) {
        $.ajax({
            url: "{{action('Manager\BookController@storeImage')}}",
            type: "POST",
            data: {"image":img},
            success: function (data) {
                name =  data.image_name;
                $("#preview-name-image-1").val(name);
            }
        });
    });
});
var resize2 = $('#upload-demo-2').croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: {
        width: 316,
        height: 475
    },
    boundary: {
        width: 500,
        height: 475
    }
});
$('#image-2').on('change', function () {
    var reader = new FileReader();
        reader.onload = function (e) {
        resize2.croppie('bind',{
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
});
$('.upload-image-2').on('click', function (ev) {
    resize2.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (img) {
        $.ajax({
            url: "{{action('Manager\BookController@storeImage')}}",
            type: "POST",
            data: {"image":img},
            success: function (data) {
                name =  data.image_name;
                $("#preview-name-image-2").val(name);
            }
        });
    });
});
var resize3 = $('#upload-demo-3').croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: {
        width: 316,
        height: 475
    },
    boundary: {
        width: 500,
        height: 475
    }
});
$('#image-3').on('change', function () {
    var reader = new FileReader();
        reader.onload = function (e) {
        resize3.croppie('bind',{
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
});
$('.upload-image-3').on('click', function (ev) {
    resize3.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (img) {
        $.ajax({
            url: "{{action('Manager\BookController@storeImage')}}",
            type: "POST",
            data: {"image":img},
            success: function (data) {
                name =  data.image_name;
                $("#preview-name-image-3").val(name);
            }
        });
    });
});
var resize4 = $('#upload-demo-4').croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: {
        width: 316,
        height: 475
    },
    boundary: {
        width: 500,
        height: 475
    }
});
$('#image-4').on('change', function () {
    var reader = new FileReader();
        reader.onload = function (e) {
        resize4.croppie('bind',{
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
});
$('.upload-image-4').on('click', function (ev) {
    resize4.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (img) {
        $.ajax({
            url: "{{action('Manager\BookController@storeImage')}}",
            type: "POST",
            data: {"image":img},
            success: function (data) {
                name =  data.image_name;
                $("#preview-name-image-4").val(name);
            }
        });
    });
});
</script>
@endsection
