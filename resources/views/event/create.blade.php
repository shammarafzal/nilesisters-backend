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
                        <h4 class="page-title">Events</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Events</a></li>
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
                <form method="post" action="{{route('event.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Flyer</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <input type="file" id="input-file-now" name="file" class="dropify" />
                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('file') }}</div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Event</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="event_name" class="col-sm-2 col-form-label text-right">Event Name</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('title') }}" name="title" id="validatedCustomFile" placeholder="Event Name">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('title') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-2 col-form-label text-right">Date</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('date') }}" name="date" id="validatedCustomFile" placeholder="Date Must Be In THis Format 22/05/2021 (DD/MM/YYYY)">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('date') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="time" class="col-sm-2 col-form-label text-right">Time</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('time') }}" name="time" id="validatedCustomFile" placeholder="Time">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('time') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="location" class="col-sm-2 col-form-label text-right">Location</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('location') }}" name="location" id="validatedCustomFile" placeholder="Location">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('location') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="fee" class="col-sm-2 col-form-label text-right">Fee</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('fee') }}" name="fee" id="validatedCustomFile" placeholder="Fee">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('fee') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="benefits" class="col-sm-2 col-form-label text-right">Benefits</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('benefits') }}" name="benefits" id="validatedCustomFile" placeholder="Benefits">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('benefits') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="details" class="col-sm-2 col-form-label text-right">Details</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ old('details') }}" name="details" id="validatedCustomFile" placeholder="Details">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('details') }}</div>
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