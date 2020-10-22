@extends('layout.main')

@section('title', 'Comment')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        {{--                        simpletable--}}
                        <table id="simpletable" class="table table-striped table-bordered nowrap ">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Content</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            Nội dung ở đây--}}
                            @foreach($cmts as $key => $cmt)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$cmt->hasUser->first_name}} {{$cmt->hasUser->last_name}}</td>
                                    <td>{{$cmt->hasProduct ? $cmt->hasProduct->name : ""}}</td>
                                    <td style="max-width: 300px; text-overflow: ellipsis; overflow: hidden">{{$cmt->content}}</td>
                                    <td>{{$cmt->created_at}}</td>
                                    <td>
                                        <a href="{{route('cmt.edit', ['id' => $cmt->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <button onclick='confirmDel("{{route('cmt.delete', ['id' => $cmt->id])}}")' data-user-id="{{$cmt->id}}"
                                                class="btn btn-danger btn-sm btn-del">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Content</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{--                    phân trang ở đây, dung` dc bootstrap, ko can tailwin --}}
{{--                    {{$cmts->links()}}--}}
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
