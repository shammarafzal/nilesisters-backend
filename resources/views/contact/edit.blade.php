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
                        <h4 class="page-title">Contact</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Contact</a></li>
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
                <form method="post" action="{{route('contact.update', ['contact' => $contact])}}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="card-header">
                        <h4 class="card-title">Contact</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="office_name" class="col-sm-2 col-form-label text-right">Office Name</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->office_name }}" name="office_name" id="validatedCustomFile" placeholder="Office Name">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('office_name') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label text-right">Address</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->address }}" name="address" id="validatedCustomFile" placeholder="Address">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('address') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="english_phone" class="col-sm-2 col-form-label text-right">English Phone</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->english_phone }}" name="english_phone" id="validatedCustomFile" placeholder="English Phone">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('english_phone') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="spanish_phone" class="col-sm-2 col-form-label text-right">Spanish Phone</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->spanish_phone }}" name="spanish_phone" id="validatedCustomFile" placeholder="Spanish Phone">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('spanish_phone') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label text-right">Email</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->email }}" name="email" id="validatedCustomFile" placeholder="Email">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('email') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="facebook_page_1" class="col-sm-2 col-form-label text-right">Facebook Page 1</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->facebook_page_1 }}" name="facebook_page_1" id="validatedCustomFile" placeholder="Facebook Page 1">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('facebook_page_1') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="facebook_page_2" class="col-sm-2 col-form-label text-right">Facebook Page 2</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->facebook_page_2 }}" name="facebook_page_2" id="validatedCustomFile" placeholder="Facebook Page 2">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('facebook_page_2') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="instagram_page_1" class="col-sm-2 col-form-label text-right">Instagram Page 1</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->instagram_page_1 }}" name="instagram_page_1" id="validatedCustomFile" placeholder="Instagram Page 1">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('instagram_page_1') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="instagram_page_2" class="col-sm-2 col-form-label text-right">Instagram Page 2</label>
                                    <div class="col-sm">
                                        <input class="form-control" type="text" value="{{ $contact->instagram_page_2 }}" name="instagram_page_2" id="validatedCustomFile" placeholder="Instagram Page 2">
                                        <div style="color: #ff0000; font-size: x-small; margin-top: 3px;">{{ $errors->first('instagram_page_2') }}</div>
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