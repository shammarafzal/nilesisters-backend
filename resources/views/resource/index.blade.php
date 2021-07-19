@extends('layouts.base')

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Resources</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Resources</a></li>
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
                    <div class="card-title mt-4">Resources
                        <a href="{{ route('resource.create') }}" class="btn btn-primary" style="float:right;margin-left: 10px"><i class="fa fa-plus"></i> New Resource </a>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Edition</th>
                                    <th>Context</th>
                                    <th>Format</th>
                                    <th>Total Pages</th>

                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resources as $resource)
                                <tr role="row">
                                    <td>{{ $resource->id }}</td>
                                    <td>{{ $resource->title }}</td>
                                    <td>{{ $resource->edition }}</td>
                                    <td>{{ $resource->context }}</td>
                                    <td>{{ $resource->format }}</td>
                                    <td>{{ $resource->total_pages }}</td>
                                    @if(isset($resource->icon))
                                    <td><img class="avatar-box" width="50px" height="50px" src="{{ asset('storage/'.$resource->icon) }}"></td>>
                                    @endif
                                    <td>{{ $resource->icon }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('resource.edit', ['resource' => $resource]) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form id="{{ 'delete_'.$resource->id }}" method="post" action="{{ route('resource.destroy', ['resource' => $resource]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <a onclick="document.getElementById('{{ 'delete_'.$resource->id }}').submit()" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
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