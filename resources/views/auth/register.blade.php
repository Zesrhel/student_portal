@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="portal-card p-4 p-md-5">
            <div class="text-center mb-4">
                <div class="brand-mark mx-auto mb-3" style="width:52px;height:52px;"><i class="bi bi-person-plus-fill fs-4"></i></div>
                <p class="page-kicker mb-2">Create account</p>
                <h1 class="h3 mb-2">Join the Student Portal</h1>
            </div>
                <form method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required minlength="8">
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required minlength="8">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-3">Create Account <i class="bi bi-arrow-right ms-2"></i></button>
                </form>
                <p class="text-center mt-3 mb-0">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
