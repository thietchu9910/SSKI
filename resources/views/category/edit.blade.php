@extends('layout.main')

@section('title', 'Sua danh muc')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form id="validation-form123" method="post" enctype="multipart/form-data" action="{{route('category.update')}}">

                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Category's name</label>
                                <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Category's name">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <div class="switch d-inline m-r-10">
                                    <input type="checkbox" class="switcher-input" name="validation_switcher" id="switch-1">
                                    <label for="switch-1" class="cr"></label>
                                </div>
                                <label>Have Parent Cate</label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Parent Category</label>
                                <select class="js-example-basic-single form-control" name="parent_id" disabled id="parent_id">
                                    @foreach($cates as $key => $cate)
                                    <option @if($category->parent_id == $cate->id) selected @endif value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn  btn-primary">Submit</button>
                    <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        @if($category->parent_id != 0 && $cate->parent_id != null && $category->hasParentCate)
            let parentSelect = document.getElementById("parent_id");
            document.getElementById('switch-1').checked = true;
            parentSelect.disabled  = false;
        @endif

        $('#switch-1').on('change', function () {
            let checkBox = document.getElementById('switch-1');
            let parentSelect = document.getElementById("parent_id");
            if (checkBox.checked == true){
                parentSelect.disabled  = false;
            } else {
                parentSelect.disabled  = true;
            }
        })
    </script>
@endsection
