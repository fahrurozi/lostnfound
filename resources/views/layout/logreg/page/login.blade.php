@extends('layout.logreg.templatelogreg')

@section('content')
<div class="card-body">
    <h4 class="card-title">Masuk</h4>
    <form method="POST" class="my-login-validation" action="{{route('login.post_login')}}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
            <div class="invalid-feedback">
                Email salah
            </div>
        </div>

        <div class="form-group">
            <label for="password">Kata Sandi
                <a href="forgot.html" class="float-right">
                    Lupa Kata Sandi ?
                </a>
            </label>
            <input id="password" type="password" class="form-control" name="password" required data-eye>
            <div class="invalid-feedback">
                Membutuhkan Kata Sandi
            </div>
        </div>

        <div class="form-group">
            <div class="custom-checkbox custom-control">
                <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                <label for="remember" class="custom-control-label">Remember Me</label>
            </div>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                <!--Nyobo Langsung -->
                Masuk
                {{-- <a href="#" style="color: white;">Masuk</a> --}}
            </button>
        </div>
        <div class="mt-4 text-center">
            Belum memiliki akun ? <a href="{{route('register.index')}}">Buat Akun</a>
            <br>
            <a href="{{route('welcome')}}">Kembali ke Website</a>
        </div>
    </form>
</div>
@endsection