@extends('layout.main')

@section('title', 'TABLE')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tên bảng</h5>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        {{--                        simpletable--}}
                        <table id="" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            Nội dung ở đây--}}
                            <tr>
                                <td>1</td>
                                <td>DEMO</td>
                                <td>DEMO</td>
                                <td>DEMO</td>
                                <td>DEMO</td>
                                <td>DEMO</td>
                                <td>DEMO</td>
                                <td>DEMO</td>
                                <td>
                                    <a href="" class="btn">
                                        <i class="fas fa-edit  fa-md"></i>
                                    </a>
                                    or
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>Status</th>
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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="wrapper">
                        <input type="file" accept="image/*" onchange="preview_image(event)">
                        <img style="max-width:300px;" id="output_image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
