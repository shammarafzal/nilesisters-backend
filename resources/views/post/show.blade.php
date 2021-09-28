@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Post</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Post</a></li>
                                <li class="breadcrumb-item">Comment</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title mt-4">{{ $post->post }}</div>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Comment</th>
                                    <th>Comment Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($post->comments as $comment)
                                    <tr role="row">
                                        <td>{{ $comment->id }}</a></td>
                                        <td>{{ $comment->user->name }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td>
                                            @if($comment->status == 'Approved')
                                                <span class="badge badge-soft-success">{{ $comment->status }}</span>
                                            @endif
                                            @if($comment->status == 'Rejected')
                                                <span class="badge badge-soft-danger">{{ $comment->status }}</span>
                                            @endif
                                            @if($comment->status == 'Pending')
                                                <span class="badge badge-soft-info">{{ $comment->status }}</span>
                                            @endif
                                        </td>
                                        <td class="text-left">
                                            <div class="dropdown d-inline-block">
                                                <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                    @if($comment->status != 'Rejected')
                                                        <form id="{{ 'reject_'.$comment->id }}" method="post" action="{{ route('comment.updateStatus', ['comment' => $comment]) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="2">
                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('{{'reject_'.$comment->id}}').submit()">Reject</a>
                                                        </form>
                                                    @endif
                                                    @if($comment->status != 'Approved')
                                                        <form id="{{ 'approve_'.$comment->id }}" method="post" action="{{ route('comment.updateStatus', ['comment' => $comment]) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="1">
                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('{{'approve_'.$comment->id}}').submit()">Approved</a>
                                                        </form>
                                                    @endif
                                                    <form id="{{ 'delete_'.$comment->id }}" method="post" action="{{ route('comment.destroy', ['comment' => $comment]) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <a style="cursor: pointer;" onclick="document.getElementById('{{ 'delete_'.$comment->id }}').submit()" class="dropdown-item">Delete</a>
                                                    </form>
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
            </div><!--end col-->
        </div><!--end row-->
    </div>
@endsection
