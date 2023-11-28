@extends('layouts.niceadmin')

@section('content')

        <div class="card mb-3">

            <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Enter your email & password to login</p>
            </div>

            <form method="POST" action="{{ route('login') }}" 
                class="row g-3 needs-validation" novalidate>
                @csrf

                <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <input type="email" name="email" class="form-control" id="email" required>
                    <input-error :messages="$errors->get('password')" class="mt-2" />
                    <div class="invalid-feedback">Please enter your email.</div>
                </div>
                </div>

                <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember_me" value="true" id="remember_me">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
                </div>
                <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Forgot your password? <a href="{{ route('password.request') }}">Reset Password</a></p>
                </div>
            </form>

            </div>
        </div>

@endsection