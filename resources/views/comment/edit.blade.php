@extends('layout.main')

@section('title', 'EDIT COMMENT')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form id="validation-form123" action="{{route('cmt.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$cmt->id}}">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Product</label>
                                    <select class="js-example-basic-single form-control" name="product_id">
                                        @foreach($products as $key => $prod)
                                            <option
                                                value="{{$prod->id}}"
                                                @if($cmt->product_id == $prod->id) selected @endif
                                            >{{$prod->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @can('choice-user')
                                    <div class="form-group">
                                        <label class="form-label">User</label>
                                        <select class="js-example-basic-single form-control" name="user_id">
                                            @foreach($users as $key => $user)
                                                <option
                                                    value="{{$user->id}}"
                                                    @if($cmt->user_id == $user->id) selected @endif
                                                > {{$user->first_name}} {{$user->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endcan
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Nội dung bình luận</label>
                                    <textarea cols="10" rows="6" class="form-control" name="content" > {{$cmt->content}} </textarea>
                                </div>
                                @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <button type="submit" class="btn  btn-primary">Submit</button>
                        <a href="{{route('cmt.index')}}" class="btn btn-warning">Back</a>
                    </form>
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
