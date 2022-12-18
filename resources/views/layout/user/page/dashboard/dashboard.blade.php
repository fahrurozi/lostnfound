<?php 
use Carbon\Carbon;
?>
@extends('layout.user.page.dashboard.dashboardtemplate')

@section('profile')
<section id="profile" class="about section-bg">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <h2 class="section-title">Profile</h2>
            </div>
        </div>
        <div class="row justify-content-center small">
            <div class="col-12 col-md-6">
                <h5 class="mb-3">Customer Info</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body p-4">
                        <div class="row">
                            <span class="col-md-4">Nama</span>
                            <div class="col-md-8">
                                <a>{{$user->name}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">Email</span>
                            <div class="col-md-8">
                                <a>{{$user->email}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">No. Telp/WA</span>
                            <div class="col-md-8">
                                <a>{{$user->phone}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">Negara</span>
                            <div class="col-md-8">
                                <a>{{($user->country)?$user->country:"-"}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-5 mb-4">
                <h5 class="mb-3">Address Info</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body p-4">
                        <div class="row">
                            <span class="col-md-4">Negara</span>
                            <div class="col-md-8">
                                <a>{{($user->country)?$user->country:"-"}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">Provinsi</span>
                            <div class="col-md-8">
                                <a>{{($user->province)?$user->province:"-"}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">Kab./Kota</span>
                            <div class="col-md-8">
                                <a>{{($user->city)?$user->city:"-"}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">Alamat Lengkap</span>
                            <div class="col-md-8">
                                <a>{{($user->address)?$user->address:"-"}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class="col-md-4">Kode Pos</span>
                            <div class="col-md-8">
                                <a>{{($user->postal_code)?$user->postal_code:"-"}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('report_list')
<section id="report" class="report section-bg2">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <h2 class="section-title">Report List</h2>
            </div>
        </div>
        <div class="row justify-content-center small">
            <div class="col-12 col-md-6">
                <h5 class="mb-3">Customer Info</h5>
                <div class="card bg-light mb-3">
                    <div class="card-body p-4">
                        <div class="row table-responsive">
                            <table>
                                <tr>
                                    <th>Barang</th>
                                    <th>Merek</th>
                                    <th>Warna</th>
                                    <th>Deskripsi</th>
                                    <th>Lokasi</th>
                                    <th>Waktu</th>
                                    <th>Proses</th>
                                </tr>
                                @foreach($list_report as $report)
                                <tr>
                                    <td>{{$report->product_type}}</td>
                                    <td>{{$report->brand}}</td>
                                    <td>{{$report->color}}</td>
                                    <td>{{$report->description}}</td>
                                    <td>{{$report->location}} - {{$report->location_name}}</td>
                                    <td>{{Carbon::parse($report->missing_date)->format('d-m-Y')}} - {{$report->clock}}</td>
                                    <td>
                                        @if($report->status == 'lost')
                                        <strong style="color: red;">unclaimed</strong>
                                        @elseif($report->status == 'found')
                                        <strong style="color: green;">claimed</strong>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection