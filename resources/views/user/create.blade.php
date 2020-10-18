@extends('layout.main')

@section('title', 'NEW USER')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    {{--                    <h5>Form</h5>--}}
                </div>
                <div class="card-body">
                    <form id="validation-form123" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="form-control" name="first_name" value="{{old('first_name') ? old('first_name') : ""}}"
                                               placeholder="First name">
                                    </div>
                                    @error('first_name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="last_name"
                                               placeholder="Last name" value="{{old('last_name') ? old('last_name') : ""}}">
                                    </div>
                                    @error('last_name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">File</label>
                                        <div>
                                            <input type="file" class="validation-file form-control"
                                                   name="image_url" onchange="preview_image(event)"
                                                   accept="image/*">
                                        </div>
                                    </div>
                                    @error('image_url')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <img class="mr-auto" src="" style="width:250px;" id="output_image"/>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"
                                               placeholder="Password">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Confirm password</label>
                                        <input type="password" class="form-control"
                                               name="re_password" placeholder="Confirm password">
                                    </div>
                                    @error('re_password')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email"
                                               placeholder="Email"
                                               value="{{old('email') ? old('email') : ""}}">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Birthday</label>
                                        <input type="date" class="form-control" name="birthday" value="{{old('birthday') ? old('birthday') : ""}}"
                                               placeholder="Url">
                                    </div>
                                    @error('birthday')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address"
                                               placeholder="Address"
                                               value="{{old('address') ? old('address') : ""}}">
                                    </div>
                                    @error('address')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Role</label>
                                        <select class="js-example-basic-single form-control" name="role">
                                            <option value="0">Member</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Super Amin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select class="js-example-basic-single form-control" name="is_active">
                                            <option value="1">Activate</option>
                                            <option value="0">Deactivate</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn  btn-primary">Submit</button>
                        <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
