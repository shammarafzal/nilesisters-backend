@extends('layouts.base')

@section('content')
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
                    <div class="card-title mt-4">Events
                        <a href="{{ route('event.create') }}" class="btn btn-primary" style="float:right;margin-left: 10px"><i class="fa fa-plus"></i> New Event </a>
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
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Fee</th>
                                    <th>Benefits</th>
                                    <th>Details</th>
                                    <th>Flyer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr role="row">
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->time }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->fee }}</td>
                                    <td>{{ $event->beenfits }}</td>
                                    <td>{{ $event->details }}</td>
                                    @if(isset($staff->file))
                                    <td><img class="avatar-box" width="50px" height="50px" src="{{ asset('storage/'.$staff->file) }}"></td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('event.edit', ['event' => $event]) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form id="{{ 'delete_'.$event->id }}" method="post" action="{{ route('event.destroy', ['event' => $event]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <a onclick="document.getElementById('{{ 'delete_'.$event->id }}').submit()" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
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