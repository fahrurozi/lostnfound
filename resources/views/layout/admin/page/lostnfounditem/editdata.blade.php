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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if($lostnfounditem->status == 'lost')
                                        <td><strong style="color: red;">On Progress</strong></td>
                                        @elseif($lostnfounditem->status == 'found')
                                        <td><strong style="color: green;">Found</strong></td>
                                        @endif
                                        <td>{{$lostnfounditem->user->name}}</td>
                                        <td>{{$lostnfounditem->product_type}}</td>
                                        <td>{{$lostnfounditem->brand}} {{$lostnfounditem->color}},
                                            {{$lostnfounditem->description}}</td>
                                        <td>{{$lostnfounditem->location}}, {{$lostnfounditem->location_name}},
                                            {{$lostnfounditem->detail_location}}
                                        </td>
                                        <td>{{Carbon::parse($lostnfounditem->missing_date)->format('d/m/Y')}}</td>
                                        <td>{{Carbon::parse($lostnfounditem->clock)->format('h:i A')}}</td>
                                        <td><img
                                                src="{{($lostnfounditem->image)?asset('img/data/'.$lostnfounditem->image):asset('img/no_image.jpg')}}">
                                        </td>
                                        <td>{{$lostnfounditem->user->name}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <br>
                            <form action="{{route('admin.lostnfounditem.update_data',$lostnfounditem->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{$lostnfounditem->user->name}}" name="name">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <br>
                                    <input type="file" class="control" name="image" >
                                </div>
                                <div class="form-group">
                                    <label for="form_kategori">Status</label>
                                    <select id="form_kategori" name="status" class="form-control" required="required"
                                        data-error="Please specify your need.">
                                        <option value="lost" {{($lostnfounditem->status=='lost')?"selected":""}}>unclaimed</option>
                                        <option value="found" {{($lostnfounditem->status=='found')?"selected":""}}>claimed</option>
                                    </select>
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>
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