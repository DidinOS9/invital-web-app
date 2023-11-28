@extends('layouts.niceadmin')

@section('content')

    <div class="card mb-3">

        <div class="card-body">

        <div class="pt-4 pb-2">
            <p class="text-center small">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="row g-3 needs-validation" novalidate>
            @csrf

            <div class="col-12">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
            </div>

            <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
            </div>
            <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Email Password Reset Link</button>
            </div>
        </form>

        </div>
    </div>

@endsection