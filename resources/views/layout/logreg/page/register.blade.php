@extends('layout.logreg.templatelogreg')

@section('content')
<div class="card-body">
    <h4 class="card-title">Daftar</h4>
    <form method="POST" class="my-login-validation" action="{{route('register.post_register')}}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" class="form-control" name="name" required autofocus>
            <div class="invalid-feedback">
                Tulis Nama Lengkap
            </div>
        </div>

        <div class="form-group ">
                <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" name="gender" id="" required>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>

        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" required>
            <div class="invalid-feedback">
                Email kamu salah
            </div>
        </div>
        <div class="form-group">
            <label for="no">No Telpon</label>
            <input id="no" type="tel" class="form-control" name="phone" required>
            <div class="invalid-feedback">
                No Telpon diperlukan
            </div>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input id="password" type="password" class="form-control" name="password" required data-eye>
            <div class="invalid-feedback">
                Kata sandi diperlukan
            </div>
        </div>

        <div class="form-group">
            <div class="custom-checkbox custom-control">
                <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                <label for="agree" class="custom-control-label">Saya setuju dengan <a href="#">Syarat dan Ketentuan</a></label>
                <div class="invalid-feedback">
                    Anda harus setuju dengan Syarat dan Ketentuan kami
                </div>
            </div>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                Daftar
            </button>
        </div>
        <div class="mt-4 text-center">
            Sudah punya akun?<a href="login.html"> Masuk</a>
            <br>
              <a href="{{route('welcome')}}">Kembali ke Website</a>
        </div>
    </form>
</div>
@endsection