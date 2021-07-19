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
                        <h4 class="page-title">Videos</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Videos</a></li>
                            <li class="breadcrumb-item active">Edit</li>
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
                <form method="post" action="{{route('video.update', ['video' => $video])}}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Resource Icon</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <img src="{{ asset('storage/'.$video->file) }}" style="height: 300px; width: auto" alt="" class="img-fluid mb-3">
                        <div class="custom-file mb-3">
                            <input type="file" name="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('file') }}</div>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title">Video</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="video_name" class="col-sm-2 col-form-label text-right">Video Name</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $video->title }}" name="title" id="validatedCustomFile" placeholder="video Name">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="col-sm text-right ml-auto">
                            <button type="submit" class="btn btn-soft-primary waves-effect waves-light">Save</button>
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