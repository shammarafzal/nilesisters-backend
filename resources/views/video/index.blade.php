@extends('layouts.base')

@section('content')
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
                    <div class="card-title mt-4">Videos
                        <a href="{{ route('video.create') }}" class="btn btn-primary" style="float:right;margin-left: 10px"><i class="fa fa-plus"></i> New Video </a>
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
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $video)
                                <tr role="row">
                                    <td>{{ $video->id }}</td>
                                    <td>{{ $video->title }}</td>
                                    @if(isset($video->file))
                                    <td><img class="avatar-box" width="50px" height="50px" src="{{ asset('storage/'.$video->file) }}"></td>>
                                    @else
                                    <td></td>
                                    @endif
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('video.edit', ['video' => $video]) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form id="{{ 'delete_'.$video->id }}" method="post" action="{{ route('video.destroy', ['video' => $video]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <a onclick="document.getElementById('{{ 'delete_'.$video->id }}').submit()" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
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