<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/mintone/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 09:20:13 GMT -->
<head>
    <title>Mintone</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    @include('layout.css')
</head>
<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
<!-- [ Header ] start -->
@include('layout.header')
<div class="content-main  container">
    <!-- [ Header ] end -->
    @include('layout.navbar')
    <!-- [ navigation menu ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-header-title">
                                <h5 class="m-b-10">@yield('title')</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Project</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
{{--                            <button type="button" class="btn btn-primary m-r-5"><i class="feather icon-plus"></i> Filter</button>--}}
                            <button type="button" onclick="location.reload()" class="btn btn-outline-primary"><i  class="feather icon-rotate-cw"></i> Reload</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->

            @yield('content')

            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

@include('layout.script')
@yield('script')
</body>


<!-- Mirrored from html.phoenixcoded.net/mintone/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 09:21:00 GMT -->
</html>
