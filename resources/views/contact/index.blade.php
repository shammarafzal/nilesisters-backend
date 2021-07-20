@extends('layouts.base')

@section('content')
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
                            <li class="breadcrumb-item active">List</li>
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
                <div class="card-header">
                    <div class="card-title mt-4">Contact
                        <a href="{{ route('contact.create') }}" class="btn btn-primary" style="float:right;margin-left: 10px"><i class="fa fa-plus"></i> New Contact </a>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Office Name</th>
                                    <th>Address</th>
                                    <th>English Phone</th>
                                    <th>Spanish Phone</th>
                                    <th>Email</th>
                                    <th>Facebook Page 1</th>
                                    <th>Facebook Page 2</th>
                                    <th>Instagram Page 1</th>
                                    <th>Instagram Page 2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr role="row">
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->office_name }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>{{ $contact->english_phone }}</td>
                                    <td>{{ $contact->spanish_phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->facebook_page_1 }}</td>
                                    <td>{{ $contact->facebook_page_2 }}</td>
                                    <td>{{ $contact->instagram_page_1 }}</td>
                                    <td>{{ $contact->instagram_page_2 }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('contact.edit', ['contact' => $contact]) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form id="{{ 'delete_'.$contact->id }}" method="post" action="{{ route('contact.destroy', ['contact' => $contact]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <a onclick="document.getElementById('{{ 'delete_'.$contact->id }}').submit()" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                    <!--end /tableresponsive-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection