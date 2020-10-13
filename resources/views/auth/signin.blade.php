@extends('auth_layout.main')

@section('title', 'Signup')

@section('content')
    <form action="{{route('login.post')}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email address" name="email">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="input-group mb-4">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group text-left mt-2">
            <div class="checkbox checkbox-primary d-inline">
                <input type="checkbox" name="keep_login" id="checkbox-fill-a1">
                <label for="checkbox-fill-a1" class="cr"> Keep Login </label>
            </div>
        </div>
        <button class="btn btn-block btn-primary mb-4 rounded-pill">Signin</button>
        <p class="mb-2 text-muted">Forgot password? <a href="#" class="f-w-400">Reset</a></p>
        <p class="mb-0 text-muted">Don’t have an account? <a href="{{route('signup.index')}}" class="f-w-400">Signup</a></p>
    </form>
@endsection

@section('script')
    <script>
        @if (isset($_GET['msg']))
        swal("Fail!", "{{$_GET['msg']}}", "warning");
        @endif

        @if (isset($msg))
        swal("Fail!", "{{$msg}}", "warning");
        @endif

        @if(session('msg'))
        swal("Success", "{{session('msg')}}", "success");
        @endif
    </script>
@endsection
