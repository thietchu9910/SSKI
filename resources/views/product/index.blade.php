@extends('layout.main')

@section('title', 'product MANAGER')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{--                <div class="card-header">--}}
                {{--                    <h5>UPRODUCT</h5>--}}
                {{--                </div>--}}
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        {{--                        simpletable--}}
                        <table id="" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Cate</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            Nội dung ở đây--}}
                            @foreach($products as $key => $product)
                                <tr data-id="{{$product->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->hasCate->name}}</td>
                                    <td><img style="width: 100px" src="{{asset("storage/$product->image_url")}}" alt="none"></td>
                                    <td>
                                        @if($product->is_active == 1)
                                            <h4><span class="badge badge-success">Activate</span></h4>
                                        @else
                                            <h4><span class="badge badge-warning">Deactivate</span></h4>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('product.detail', ['id' => $product->id] )}}"
                                           class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <button onclick='confirmDel("{{route('product.delete', ['id' => $product->id])}}")' data-product-id="{{$product->id}}"
                                           class="btn btn-danger btn-sm btn-del">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                            <th>STT</th>
                                <th>Name</th>
                                <th>Cate</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{--                    phân trang ở đây, dung` dc bootstrap, ko can tailwin --}}
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        @if(session('msg'))
        swal("Thông báo", "{{session('msg')}}!", "info");
        @endif

        function confirmDel(redirectUrl) {
            // let redirectUrl = $(this).attr('id');
            console.log(redirectUrl);
            swal({
                title: "Are you sure?",
                // text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = redirectUrl;
                    } else {
                        swal("Your data is safe!", {
                            icon: "error",
                        });
                    }
                });
        }
    </script>
@endsection
