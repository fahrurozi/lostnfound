<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reporting</title>
    <link rel="stylesheet" href="{{asset('report/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="{{asset('report/img/L&F.png')}}" rel="icon">
    <link href="{{asset('report/img/L&F.png')}}" rel="apple-touch-icon">
</head>

<body>
    <div class="con">
        <div class="brand">
            <a href="{{route('welcome')}}"><img src="{{asset('report/img/lostnfound.png')}}" alt="logo"></a>
        </div>
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <h5>Detail Barang</h5>
                    <div class="card-body bg-light">
                        <div class="container">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.8 -->
        </div>
        <!-- /.row-->
    </div>
    </div>
    <!--JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('report/js/country.js')}}"></script>
</body>

</html>