<?php 
use Carbon\Carbon;
?>
@extends('layout.admin.adminTemplate2')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Lost and Found Item</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Lost and Found Item</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Nama</th>
                                        <th>Barang</th>
                                        <th>Detail Barang</th>
                                        <th>Detail Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Gambar</th>
                                        <th>Claimed by</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lostnfounditem as $item)
                                    <tr>
                                        @if($item->status == 'lost')
                                        <td><strong style="color: red;">On Progress</strong></td>
                                        @elseif($item->status == 'found')
                                        <td><strong style="color: green;">Found</strong></td>
                                        @endif
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->product_type}}</td>
                                        <td>{{$item->brand}} {{$item->color}}, {{$item->description}}</td>
                                        <td>{{$item->location}}, {{$item->location_name}}, {{$item->detail_location}}
                                        </td>
                                        <td>{{Carbon::parse($item->missing_date)->format('d/m/Y')}}</td>
                                        <td>{{Carbon::parse($item->clock)->format('h:i A')}}</td>
                                        <td><img
                                                src="{{($item->image)?asset('img/data/'.$item->image):asset('img/no_image.jpg')}}">
                                        </td>
                                        <td>{{$item->user->name}}</td>
                                        <td>
                                            <a href="{{route('admin.lostnfounditem.edit_data', $item->id)}}"
                                                class="edit">
                                                <i class="far fa-edit fa-sm" title="Edit"></i>
                                            </a>
                                            <a href="#deleteEmployeeModal{{$item->id}}" class="delete" data-toggle="modal">
                                                <i class="far fa-trash-alt fa-sm" data-toggle="tooltip"
                                                    title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <div id="deleteEmployeeModal{{$item->id}}" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="post"
                                                    action="{{route('admin.lostnfounditem.delete_data', $item->id)}}">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Delete Employee</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete these Records?</p>
                                                        <p class="text-warning">
                                                            <small>This action cannot be undone.</small>
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="button" class="btn btn-default"
                                                            data-dismiss="modal" value="Cancel">
                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Edit Modal HTML -->
                            <div id="editEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form>
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Employee</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Gmabar</label>
                                                    <br>
                                                    <input type="file" class="control" onchange="previewFiles()"
                                                        id="inputUP" multiple>
                                                </div>
                                                <div class="row col-md-12 ml-auto mr-auto preview"></div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal"
                                                    value="Cancel">
                                                <input type="submit" class="btn btn-info" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if(count($lostnfounditem)>0)
                            @endif
                            <!-- Delete Modal HTML -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection