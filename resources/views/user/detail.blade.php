@extends('layout.main')

@section('title', 'DETAIL')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body  card2 pt-3">
                <div class="row">
                    <div class="col-lg-6 col-md-9 f-18 font-weight-bold text-uppercase">Profile</div>
                    <div class="col-lg-6 col-md-9 text-right f-16 font-weight-bold text-uppercase profile-social">
                        <ul>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="mdi mdi-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="mdi mdi-twitter"></i> </a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-google-plus"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-behance" data-name="mdi-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 m-b-20 text-center"><img src="{{asset('assets/images/widget/profile-person1.jpg')}}" class="img-fluid" alt="" title=""></div>
                    <div class="col-md-8">
                        <h2 class="f-24 font-medium">Brian Summerhoold</h2>
                        <p class="m-b-20">Trạng thái</p>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Bỉthday</div>
                            <div class="col">23/9/1996</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Address</div>
                            <div class="col">New York, Lancer St. 15/10, USA</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Email</div>
                            <div class="col"><a href="mailto:johndonov@gmail.com" class="text-inverse">johndonov@gmail.com</a></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Web site</div>
                            <div class="col"><a href="#" class="text-inverse">joedonovan.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
