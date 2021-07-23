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
                <form method="post" action="{{route('staff.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Staff Image</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <input type="file" id="input-file-now" name="image" class="dropify" />
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('image') }}</div>
                    </div>

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
                                        <input class="form-control" type="text" value="{{ old('name') }}" name="name" id="validatedCustomFile" placeholder="Staff Name">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="education" class="col-sm-2 col-form-label text-right">Education</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('education') }}" name="education" id="validatedCustomFile" placeholder="Education">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('education') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="designation" class="col-sm-2 col-form-label text-right">Designation</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('designation') }}" name="designation" id="validatedCustomFile" placeholder="Designation">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('designation') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="age" class="col-sm-2 col-form-label text-right">Age</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('age') }}" name="age" id="validatedCustomFile" placeholder="Age">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('age') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="country" class="col-sm-2 col-form-label text-right">Country</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('country') }}" name="country" id="validatedCustomFile" placeholder="Country">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('country') }}</div>
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