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
                        <h4 class="page-title">Staff</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
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
                <form method="post" action="{{route('staff.update', ['staff' => $staff])}}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Staff Image</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <img src="{{ asset('storage/'.$staff->image) }}" style="height: 300px; width: auto" alt="" class="img-fluid mb-3">
                        <div class="custom-file mb-3">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('image') }}</div>
                    </div>
                    <!--end card-body-->
                    <div class="card-header">
                        <h4 class="card-title">Staff</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="staff_name" class="col-sm-2 col-form-label text-right">Staff Name</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $staff->name }}" name="name" id="validatedCustomFile" placeholder="Staff Name">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="bio" class="col-sm-2 col-form-label text-right">Bio</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $staff->bio }}" name="bio" id="validatedCustomFile" placeholder="Bio">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('bio') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="designation" class="col-sm-2 col-form-label text-right">Designation</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $staff->designation }}" name="designation" id="validatedCustomFile" placeholder="Designation">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('designation') }}</div>
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