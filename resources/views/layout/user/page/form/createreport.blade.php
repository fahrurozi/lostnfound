@extends('layout.user.page.form.templateForm')

@section('form')
<form id="contact-form" role="form" action="{{route('report.post_report')}}">
    @csrf
    <div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_barang">Jenis Barang *</label>
                    <input id="form_barang" type="text" name="product_type" class="form-control" placeholder="Contoh : Laptop"
                        required="required" data-error="Masukkan Jenis Barang">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_model">Merek/Model *</label>
                    <input id="form_model" type="text" name="brand" class="form-control"
                        placeholder="Contoh : Acer Extensia 15" required="required" data-error="Lastname is required.">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_kategori">Kategori *</label>
                    <select id="form_kategori" name="category" class="form-control" required="required"
                        data-error="Please specify your need.">
                        <option selected disabled>--Pilih--</option>
                        <option value="Sangat Penting">Sangat Penting</option>
                        <option value="Penting">Penting</option>
                        <option value="Biasa">Biasa</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_warna">Warna</label>
                    <input id="form_warna" type="text" name="color" class="form-control" placeholder="Contoh : Hitam"
                        required="required" data-error="Valid email is required.">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_deskripsi">Detail Deskripsi *</label>
                    <textarea id="form_deskripsi" name="description" class="form-control"
                        placeholder="Deskripsikan lebih detail. Anda tidak perlu menulis tentang situasi kehilangan dalam formulir ini."
                        rows="4" required="required" data-error="Please, leave us a message."></textarea>
                </div>
            </div>
        </div>
        <!--Tanggal dan Lokasi-->
        <hr style="height: 3px;">
        <h5>Tanggal dan Lokasi</h5>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_tanggal">Tanggal kehilangan</label>
                    <input id="form_tanggal" type="date" name="missing_date" class="form-control" required="required"
                        data-error="Harap isi tanggal">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_waktu">Perkiraan Waktu *</label>
                    <div class="col-md-6">
                        <input id="form_waktu" type="time" name="clock" class="form-control" required="required"
                            data-error="Harap isi waktu">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_lokasi">Lokasi *</label>
                    <select id="form_lokasi" name="location" class="form-control" required="required"
                        data-error="Harap pilih lokasi">
                        <option value selected>--Pilih--</option>
                        <option value="Stasiun" style="vertical-align: inherit;">Stasiun</option>
                        <option value="Kereta" style="vertical-align: inherit;">Kereta</option>
                        <option value="TIdak Tercantum" style="vertical-align: inherit;">- TIdak Tercantum
                            -</option>
                    </select>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="form_nama_lokasi">Nama Lokasi *</label>
                    <input id="form_nama_lokasi" type="text" name="location_name" class="form-control"
                        placeholder="Contoh : Gerbong, Masjid, Kantin" required="required"
                        data-error="Harap isi detail lokasi">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form-detail-lokasi">Detail Lokasi *</label>
                    <textarea id="form-detail-lokasi" name="detail_location" class="form-control"
                        placeholder="Contoh : Nomor gerbong, nomor kursi, detail lokasi hilang." rows="4"
                        required="required" data-error="Please, leave us a message."></textarea>
                </div>
            </div>
        </div>
        <!--Alamat dan Kontak-->
        <hr style="height: 3px;">
        <h5>Alamat dan Kontak</h5>
        <br>
        <div class="col-md-8">
            <div class="form-group">
                <label for="form_quest">Apakah Anda masih berada di Yogyakarta ?</label>
                <div class="col-md-6 form-check-inline">
                    <input id="form_quest" type="radio" name="still_yogyakarta" class="form-check-input" required="required"
                        data-error="Harap pilih" value="true">
                    <label for="quest" class="form-check-label">Ya, saya di
                        Yogayakarta.</label>
                </div>
                <div class="col-md-6 form-check-inline">
                    <input id="form_quest" type="radio" name="still_yogyakarta" class="form-check-input" required="required"
                        data-error="Harap pilih" value="false">
                    <label for="quest" class="form-check-label">Tidak, sudah pergi.</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_negara">Negara</label>
                    <form autocomplete="off" action="#">
                        <input id="myInput" type="text" name="country" class="form-control" placeholder="Negara">
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_provinsi">Provinsi *</label>
                    <input id="form_provinsi" type="text" name="province" class="form-control" required="required"
                        data-error="Masukkan provinsi">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_kota">Kabupaten dan Kota *</label>
                    <input id="form_kota" type="text" name="city" class="form-control" required="required"
                        data-error="Masukkan Kabupaten/Kota">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_kecamatan">Kecamatan *</label>
                    <input id="form_kecamatan" type="text" name="district" class="form-control" required="required"
                        data-error="Masukkan Kecamatan">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_pos">Kode Pos *</label>
                    <input id="form_pos" type="number" name="postal_code" class="form-control" required="required"
                        data-error="Masukkan Kabupaten/Kota">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_jalan">Nama Jalan/Gedung/No Rumah *</label>
                    <input id="form_jalan" type="text" name="address" class="form-control" required="required"
                        data-error="Masukkan Kecamatan">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_no">No Telp/WA *</label>
                    <input id="form_no" type="tel" name="phone" class="form-control" placeholder="(999)-99999999"
                        required="required" data-error="Masukkan Nomor" value="{{$user->phone}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email</label>
                    <input id="form_email" type="text" name="email" class="form-control"
                        placeholder="example@domain.com" required="required" value="{{$user->email}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12" style="text-align: center;">
            <input type="submit" class="btn btn-send pt-2 btn-block"
                style="background-color: #007bff; border-color: #007bff; color: white;" value="Kirim">
            <br>
            <a href="{{route('welcome')}}">Kembali ke Website</a>
        </div>
    </div>
</form>
@endsection