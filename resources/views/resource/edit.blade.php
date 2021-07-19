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
                        <h4 class="page-title">Resource</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resource</a></li>
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
                <form method="post" action="{{route('resource.update', ['resource' => $resource])}}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Resource Icon</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <img src="{{ asset('storage/'.$resource->icon) }}" style="height: 300px; width: auto" alt="" class="img-fluid mb-3">
                        <div class="custom-file mb-3">
                            <input type="file" name="icon" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('icon') }}</div>
                    </div>
                    <!--end card-body-->
                    <div class="card-header">
                        <h4 class="card-title">Resource</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <input type="file" id="input-file-now" name="icon" class="dropify" />
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('icon') }}</div>
                    </div>
                    <!--end card-body-->
                    <div class="card-header">
                        <h4 class="card-title">Resource File</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <input type="file" id="input-file-now" name="file" class="dropify" />
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('file') }}</div>
                    </div>
                    <!--end card-body-->
                    <div class="card-header">
                        <h4 class="card-title">Resource</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="resource_name" class="col-sm-2 col-form-label text-right">Resource Name</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('title') }}" name="resource_name" id="validatedCustomFile" placeholder="Resource Name">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('title') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="edition" class="col-sm-2 col-form-label text-right">Edition</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('title') }}" name="edition" id="validatedCustomFile" placeholder="Edition">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('edition') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="context" class="col-sm-2 col-form-label text-right">Context</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('context') }}" name="context" id="validatedCustomFile" placeholder="Context">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('context') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="format" class="col-sm-2 col-form-label text-right">Format</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('format') }}" name="format" id="validatedCustomFile" placeholder="Format">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('format') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="total_pages" class="col-sm-2 col-form-label text-right">Total Pages</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('total_pages') }}" name="category_name" id="validatedCustomFile" placeholder="Total Pages">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('total_pages') }}</div>
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