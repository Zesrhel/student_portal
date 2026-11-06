@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-5">
        <div class="portal-card p-4 p-md-5">
            <div class="text-center mb-4">
                <div class="brand-mark mx-auto mb-3" style="width:52px;height:52px;"><i class="bi bi-person-fill fs-4"></i></div>
                <p class="page-kicker mb-2">Welcome back</p>
                <h1 class="h3 mb-2">Sign in to your account</h1>
                <p class="text-secondary small">Enter your credentials to continue.</p>
            </div>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->has('auth'))
                    <div class="alert alert-danger">{{ $errors->first('auth') }}</div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3">Sign In <i class="bi bi-arrow-right ms-2"></i></button>
                </form>

                <p class="text-center mt-3 mb-0">No account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
