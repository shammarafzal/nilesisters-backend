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
                                        <td class="text-left">
                                            <div class="row">
                                                <form id="{{ 'delete_'.$comment->id }}" method="post" action="{{ route('comment.update', ['comment' => $comment]) }}">
                                                    @method('patch')
                                                    @csrf
                                                    <input value="{{ $post->id }}" name="post" type="hidden">
                                                    <a onclick="document.getElementById('{{ 'delete_'.$comment->id }}').submit()" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
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
            </div><!--end col-->
        </div><!--end row-->
    </div>
@endsection
