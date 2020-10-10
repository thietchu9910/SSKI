@extends('auth_layout.main')

@section('title', 'Signup')

@section('content')
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email address">
    </div>
    <div class="input-group mb-4">
        <input type="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group text-left mt-2">
        <div class="checkbox checkbox-primary d-inline">
            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1">
            <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
        </div>
    </div>
    <button class="btn btn-block btn-primary mb-4 rounded-pill">Signin</button>
    <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
    <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
@endsection

@section('script')@endsection
