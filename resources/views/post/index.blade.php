@extends('layouts.base')

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Posts</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Posts</a></li>
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
                    <div class="card-title mt-4">Posts</div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Post Text</th>
                                    <th>Post Date</th>
                                    <th>Post Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr role="row">
                                    <td><a href="{{ route('post.show', ['post' => $post ]) }}">{{ $post->id }}</a></td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->post }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        @if($post->is_approved == 'Approved')
                                        <span class="badge badge-soft-success">{{ $post->is_approved }}</span>
                                        @endif
                                        @if($post->is_approved == 'Rejected')
                                        <span class="badge badge-soft-danger">{{ $post->is_approved }}</span>
                                        @endif
                                        @if($post->is_approved == 'Pending')
                                        <span class="badge badge-soft-info">{{ $post->is_approved }}</span>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                @if($post->is_approved != 'Rejected')
                                                <form id="{{ 'reject_'.$post->id }}" method="post" action="{{ route('post.updateApprove', ['post' => $post]) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="is_approved" value="2">
                                                    <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('{{'reject_'.$post->id}}').submit()">Reject</a>
                                                </form>
                                                @endif
                                                @if($post->is_approved != 'Approved')
                                                <form id="{{ 'approve_'.$post->id }}" method="post" action="{{ route('post.updateApprove', ['post' => $post]) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="is_approved" value="1">
                                                    <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('{{'approve_'.$post->id}}').submit()">Approved</a>
                                                </form>
                                                @endif
                                            </div>
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