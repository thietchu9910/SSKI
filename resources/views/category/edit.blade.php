@extends('layout.main')

@section('title', 'Sua danh muc')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Form</h5>
                </div>
                <div class="card-body">
                    <form id="validation-form123" method="post" enctype="multipart/form-data" action="{{route('category.update')}}">

                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name" value="{{$category->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Parent_id</label>
                                    <input type="number" class="form-control" name="parent_id" placeholder="parent_id" value="{{$category->parent_id}}">
                                </div>
                            </div>
                        <button type="submit" class="btn  btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
