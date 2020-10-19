@extends('layout.main')

@section('title', 'NEW PRODUCT')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                {{-- <h5>Form</h5>--}}
            </div>
            <div class="card-body">
                <form id="validation-form123" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name') ? old('name') : ""}}" placeholder="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Desc</label>
                                    <input type="text" class="form-control" name="description" value="{{old('description') ? old('description') : ""}}" placeholder="description">
                                </div>
                                @error('description')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Cate</label>
                                    <select class="form-control" name="category_id" id="">
                                        @foreach($categories as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">File</label>
                                    <div>
                                        <input type="file" class="validation-file form-control" name="image_url" onchange="preview_image(event)" accept="image/*">
                                    </div>
                                </div>
                                @error('image_url')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <img class="mr-auto" src="" style="width:250px;" id="output_image" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="price">
                                </div>
                                @error('price')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Sale_percent</label>
                                    <input type="text" class="form-control" name="sale_percent" placeholder="sale_percent" value="{{old('sale_percent') ? old('sale_percent') : ""}}">
                                </div>
                                @error('sale_percent')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Stocks</label>
                                    <input type="number" class="form-control" name="stocks" value="{{old('stocks') ? old('stocks') : ""}}" placeholder="stocks">
                                </div>
                                @error('stocks')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
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
                            <div class="col-lg-12">
                                <button type="submit" class="btn  btn-primary">Submit</button>
                                <a href="{{route('product.index')}}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </div>

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
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection