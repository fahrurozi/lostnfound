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
                                <tr>
                                    <td>Laptop</td>
                                    <td>Acer Extension 15</td>
                                    <td>Hitam</td>
                                    <td>Di dalam tas batik</td>
                                    <td>Musholla</td>
                                    <td>15:00</td>
                                    <td>
                                        <strong style="color: greenyellow;">On Progress</strong>
                                    </td>
                                </tr>
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