@extends('layout.main')

@section('title', 'USER MANAGER')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{--                <div class="card-header">--}}
                {{--                    <h5>USER</h5>--}}
                {{--                </div>--}}
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        {{--                        simpletable--}}
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            Nội dung ở đây--}}
                            @foreach($users as $key => $user)
                                <tr data-id="{{$user->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><img style="width: 100px" src="{{asset("storage/$user->image_url")}}" alt="none"></td>
                                    <td>
                                        @if($user->is_active == 1)
                                            <h4><span class="badge badge-success">Activate</span></h4>
                                        @else
                                            <h4><span class="badge badge-warning">Deactivate</span></h4>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('user.detail', ['id' => $user->id] )}}"
                                           class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        @if(\Illuminate\Support\Facades\Auth::user()->id != $user->id)
                                            <button onclick='confirmDel("{{route('user.delete', ['id' => $user->id])}}")' data-user-id="{{$user->id}}"
                                                    class="btn btn-danger btn-sm btn-del">Delete</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{--                    phân trang ở đây, dung` dc bootstrap, ko can tailwin --}}
{{--                    {{ $users->links() }}--}}
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
