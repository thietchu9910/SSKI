<!DOCTYPE html>
<html lang="en">
<head>

    <title>Mintone</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    @include('auth_layout.css')
</head>
<body>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" class="img-fluid mb-4">
        <form action="">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">@yield('title')</h4>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center">
            <div class="saprator my-4"><span>OR</span></div>
            <button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
            <button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
            <button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
        </div>
    </div>
    <svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
        <title>Wave</title>
        <defs></defs>
        <path id="feel-the-wave" d="" />
    </svg>
    <svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
        <title>Wave</title>
        <defs></defs>
        <path id="feel-the-wave-two" d="" />
    </svg>
    <svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
        <title>Wave</title>
        <defs></defs>
        <path id="feel-the-wave-three" d="" />
    </svg>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
@include('auth_layout.script')
@yield('script')
</body>
</html>

