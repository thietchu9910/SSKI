@extends('auth_layout.main')

@section('title', 'Signup')

@section('content')
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username">
    </div>
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email address">
    </div>
    <div class="input-group mb-4">
        <input type="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group text-left mt-2">
        <div class="checkbox checkbox-primary d-inline">
            <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
            <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
        </div>
    </div>
    <button class="btn btn-primary btn-block mb-4 rounded-pill">Sign up</button>
    <p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
@endsection

@section('script')@endsection
