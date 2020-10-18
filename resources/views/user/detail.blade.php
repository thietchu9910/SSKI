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
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="mdi mdi-twitter"></i> </a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                            <li><a href="{{route('user.index')}}" title="Back"><span class="pcoded-micon"><i
                                            class="feather icon-arrow-left"></i></span><span
                                        class="pcoded-mtext"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 m-b-20 text-center"><img
                            src="{{asset("/storage/$user->image_url")}}" class="img-fluid" alt=""
                            title=""></div>
                    <div class="col-md-8">
                        <h2 class="f-24 font-medium">{{$user->first_name}} {{$user->last_name}}</h2>
                        <p class="m-b-20">
                            @if($user->role == 0)
                                Member
                            @elseif($user->role == 1)
                                Admin
                            @else
                                Super Amin
                            @endif
                        </p>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Birthday</div>
                            <div class="col">{{$birthday->day}}/{{$birthday->month}}/{{$birthday->year}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Address</div>
                            <div class="col">{{$user->address}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Email</div>
                            <div class="col"><a href="mailto:johndonov@gmail.com"
                                                class="text-inverse">{{$user->email}}</a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Web site</div>
                            <div class="col"><a href="#" class="text-inverse">{{$user->first_name}}.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
