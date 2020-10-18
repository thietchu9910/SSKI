@extends('layout.main')

@section('title', 'EDIT USER')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    {{--                    <h5>Form</h5>--}}
                </div>
                <div class="card-body">
                    <form id="validation-form123" action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}"
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
                                               placeholder="Last name" value="{{$user->last_name}}">
                                    </div>
                                    @error('last_name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Avatar</label>
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
                                            <img class="mr-auto p-b-20" src="{{asset("storage/$user->image_url")}}" style="width:250px;" id="output_image"/>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email"
                                               placeholder="Email"
                                               value="{{$user->email}}">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Birthday</label>
                                        <input type="date" class="form-control" name="birthday" value="{{$birthday}}"
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
                                               value="{{$user->address}}">
                                    </div>
                                    @error('address')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Role</label>
                                        <select class="js-example-basic-single form-control" name="role">
                                            <option value="0" @if($user->role == 0) selected @endif >Member</option>
                                            <option value="1" @if($user->role == 1) selected @endif >Admin</option>
                                            <option value="2" @if($user->role == 2) selected @endif >Super Amin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select class="js-example-basic-single form-control" name="is_active">
                                            <option value="1" @if($user->is_active == 1) selected @endif>Activate</option>
                                            <option value="0" @if($user->is_active == 0) selected @endif>Deactivate</option>
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
