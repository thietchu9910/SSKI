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
                                <h5 class="m-b-10">Dashboard Project</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Project</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            {{--                            <button type="button" class="btn btn-primary m-r-5"><i class="feather icon-plus"></i> Filter</button>--}}
                            <button type="button" class="btn btn-outline-primary"><i class="feather icon-rotate-cw"></i> Reload</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->

            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-30">
                            <div class="d-flex pt-3 pb-2 no-block">
                                <div class="align-self-center mr-5 ml-4"><img src="assets/images/icon/note.svg" alt="" title="" width="55"></div>
                                <div class="align-slef-center mr-auto">
                                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-danger">458</h2>
                                    <h6 class="text-muted m-b-0">Daily orders</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-30">
                            <div class="d-flex pt-3 pb-2 no-block">
                                <div class="align-self-center mr-5 ml-4"><img src="assets/images/icon/badge.svg" alt="" title="" width="55"></div>
                                <div class="align-slef-center mr-auto">
                                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-primary">$156</h2>
                                    <h6 class="text-muted m-b-0">Daily sales</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-30">
                            <div class="d-flex pt-3 pb-2 no-block">
                                <div class="align-self-center mr-5 ml-4"><img src="assets/images/icon/users.svg" alt="" title="" width="55"></div>
                                <div class="align-slef-center mr-auto">
                                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-warning">2167</h2>
                                    <h6 class="text-muted m-b-0">Total users</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div class="refresh-container">
                            <div class="preloader">
                                <div class="loader">

                                </div>
                            </div>
                        </div>
                        <div class="card-body panel-wrapper">
                            <div class="d-flex m-b-10 no-block">
                                <h5 class="card-title m-b-0 align-self-center text-uppercase">activity</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-13 d-none d-xl-inline-block d-lg-inline-block">
                                        <li class="text-c-blue">Last year</li>
                                        <li class="text-muted">Last month</li>
                                        <li class="text-muted">Last week</li>
                                        <li class="text-muted"><i class="flaticon-calendar"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-14">
                                <li><i class="fas fa-square m-r-5 text-primary"></i> Sales</li>
                                <li><i class="fas fa-square m-r-5 text-danger"></i> Orders</li>
                                <li><i class="fas fa-square m-r-5 text-success"></i> New visitors </li>
                            </ul>
                            <div id="extra-area-chart-last-week"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-6 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div class="refresh-container">
                            <div class="preloader">
                                <div class="loader">

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-body panel-wrapper">
                                <div class="d-flex m-b-10 no-block">
                                    <h5 class="card-title m-b-3 mt-3 align-self-center">Popular categories</h5>
                                    <div class="ml-auto text-muted-blue mt-3"> <a href="#" class="pull-left text-muted-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                                </div>
                                <div id="slimtest4" style="height:460px;">
                                    <div class="table-responsive">
                                        <table class="table color-table m-b-0">
                                            <thead class="bg-transparent">
                                            <tr>
                                                <th>Customer</th>
                                                <th>Delivery type</th>
                                                <th>QTV</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div>
                            <div class="card-body panel-wrapper">
                                <div class="d-flex m-b-10 no-block">
                                    <h5 class="card-title m-b-3 mt-3  align-self-center">Top product sales</h5>
                                    <div class="ml-auto text-muted-blue mt-3"> <a href="#" class="pull-left text-muted-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                                </div>
                                <div id="slimtest2" style="height:460px;">
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table color-table">
                                                <tbody>
                                                <tr>
                                                    <td><img src="assets/images/product/prod-1.jpg" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$9 375</span> <br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/product/prod-2.html" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$5 612</span><br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/product/prod-3.html" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$3 800</span><br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/product/prod-4.html" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$3 024</span><br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/product/prod-5.html" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$1 200</span><br>
                                                        25 sales</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- End chart box one -->
                <!-- chart box two -->

            </div>
            <div class="clearfix"></div>

            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
<!-- Warning Section start -->
<!-- Older IE warning message -->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/menu-setting.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{asset('assets/js/plugins/apexcharts.min.js')}}"></script>
<!-- peity chart js -->
<script src="{{asset('assets/js/plugins/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.knob.min.js')}}"></script>
<script src="{{asset('assets/js/pages/jquery.knob-custom.min.js')}}"></script>
<!--c3 JavaScript -->
<script src="{{asset('assets/plugins/vendors/d3/d3.min.js')}}"></script>
<script src="{{asset('assets/plugins/vendors/c3-master/c3.min.js')}}"></script>

<!--Sparkline JavaScript -->
<script src="{{asset('assets/plugins/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('assets/plugins/vendors/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets/plugins/vendors/morrisjs/morris.js')}}"></script>
<script src="{{asset('assets/plugins/vendors/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- custom-chart js -->
<script src="{{asset('assets/js/pages/dashboard-shop.js')}}"></script>
</body>


<!-- Mirrored from html.phoenixcoded.net/mintone/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 09:21:00 GMT -->
</html>
