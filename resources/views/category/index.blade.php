@extends('layout.main')

@section('title', 'Danh mục')


@section('content')
<div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Danh mục sản phẩm</h5>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        {{--                        simpletable--}}
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Parent id</th>
                                <th>Total Product</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--                            Nội dung ở đây--}}
                            @foreach($category as $cate)
                            <tr>
                                <td>{{$cate->id}}</td>
                                <td>{{$cate->name}}</td>

                                <td>{{$cate->parent_id}}</td>
                                <td>{{$cate->hasProducts->count()}}</td>
                                <td>
                                        <a href="{{route('category.edit',['id' =>$cate->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                        <button onclick='confirmDel("{{route('category.delete', ['id' => $cate->id])}}")' data-cate-id="{{$cate->id}}"
                                           class="btn btn-danger btn-sm btn-del">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                            <th>STT</th>
                                <th>Name</th>
                                <th>Parent id</th>
                                <th>Total Product</th>
                                <th>Action</th>

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
