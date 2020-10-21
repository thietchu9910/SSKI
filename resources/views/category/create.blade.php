@extends('layout.main')

@section('title', 'NEW CATEGORY')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Category's name</label>
                                <input type="text" class="form-control" name="name" placeholder="Category's name">
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
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
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
    $('#switch-1').on('change', function() {
        let checkBox = document.getElementById('switch-1');
        let parentSelect = document.getElementById("parent_id");
        if (checkBox.checked == true) {
            parentSelect.disabled = false;
        } else {
            parentSelect.disabled = true;
        }
    })
</script>
@endsection
