@extends('layouts.base')

@section('content')
<!-- Page Content -->
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Home Page</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home page</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form method="post" action="{{route('homepage.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Image</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <input type="file" id="input-file-now" name="image" class="dropify" />
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('image') }}</div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">News</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label text-right">Title</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('title') }}" name="title" id="validatedCustomFile" placeholder="Title">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('title') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label text-right">Description</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('description') }}" name="description" id="validatedCustomFile" placeholder="Description">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('description') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="category" class="col-sm-2 col-form-label text-right">Category</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('category') }}" name="category" id="validatedCustomFile" placeholder="Category">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('category') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="news_link" class="col-sm-2 col-form-label text-right">Link</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('news_link') }}" name="news_link" id="validatedCustomFile" placeholder="Link">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('news_link') }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end card-body-->
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="col-sm text-right ml-auto">
                            <button type="submit" class="btn btn-soft-primary waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div><!-- container -->
@endsection