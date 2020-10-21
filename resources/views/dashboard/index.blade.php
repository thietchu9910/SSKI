@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body p-30">
                    <div class="d-flex pt-3 pb-2 no-block">
                        <div class="align-self-center mr-5 ml-4"><img src="{{asset('assets/images/icon/users.svg')}}" alt="" title="" width="55"></div>
                        <div class="align-slef-center mr-auto">
                            <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-warning">{{$user}}</h2>
                            <h6 class="text-muted m-b-0">User</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body p-30" onclick="location.href='{{route('category.index')}}'">
                    <div class="d-flex pt-3 pb-2 no-block">
                        <div class="align-self-center mr-5 ml-4"><img src="{{asset('assets/images/icon/note.svg')}}" alt="" title="" width="55"></div>
                        <div class="align-slef-center mr-auto">
                            <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-danger">{{$cate}}</h2>
                            <h6 class="text-muted m-b-0">Categories</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body p-30" onclick="location.href='{{route('product.index')}}'">
                    <div class="d-flex pt-3 pb-2 no-block">
                        <div class="align-self-center mr-5 ml-4"><img src="{{asset('assets/images/icon/badge.svg')}}" alt="" title="" width="55"></div>
                        <div class="align-slef-center mr-auto">
                            <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-primary">{{$prod}}</h2>
                            <h6 class="text-muted m-b-0">Products</h6>
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


    </div>
    <div class="clearfix"></div>
@endsection

@section('script')
    <script>
        @if (session('msg'))
            swal("Success!", "{{session('msg')}}", "success");
        @endif
    </script>
@endsection
