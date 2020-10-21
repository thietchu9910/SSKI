@extends('layout.main')

@section('title', 'DETAIL')

@section('content')
    <div class="row">
        <div class="card" row>
            <div class="card-body   card2 pt-3">
                <div class="row">
                    <div class="col-lg-6 col-md-9 f-18 font-weight-bold text-uppercase">{{$product->name}}</div>
                    <div class="col-lg-6 col-md-9 text-right f-16 font-weight-bold text-uppercase profile-social">
                        <ul>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="mdi mdi-twitter"></i> </a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                            <li><a href="{{route('product.index')}}" title="Back"><span class="pcoded-micon"><i
                                            class="feather icon-arrow-left "></i></span><span
                                        class="pcoded-mtext"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row col-12">
                    <div class="col-md-4 m-b-20 text-center"><img src="{{asset("/storage/$product->image_url")}}"
                                                                  class="img-fluid" alt="" title=""></div>
                    <div class="col-md-8">

                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Desc</div>
                            <div class="col">{{$product->description}}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3 font-weight-bold text-dark">Cate</div>
                            <div class="col">{{$product->hasCate->name}}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3 font-weight-bold text-dark">price</div>
                            <div class="col">{{$product->price}}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3 font-weight-bold text-dark">Sale_percent</div>
                            <div class="col">{{$product->sale_percent}} %</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3 font-weight-bold text-dark">Stocks</div>
                            <div class="col">{{$product->stocks}}</div>
                        </div>
                    </div>
                </div>

                <div class="dt-responsive table-responsive">
                    {{--                        simpletable--}}
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>User</th>
                            <th>Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                            Nội dung ở đây--}}
                        <tr>
                            @foreach ($comments as $key => $cmt)
                                <td>{{$key+1}}</td>
                                <td>{{$cmt->hasUser->first_name}}</td>
                                <td style="max-width: 680px; text-overflow: ellipsis; overflow: hidden">{{$cmt->content}}</td>
                            @endforeach
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>User</th>
                            <th>Content</th>

                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{--                    phân trang ở đây, dung` dc bootstrap, ko can tailwin --}}
                {{--                    {{$user->links()}}--}}
            </div>

        </div>

    </div>
    </div>
@endsection
