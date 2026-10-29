@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="portal-card card p-4">
    <div class="card-body">
        <h1 class="h2 text-primary mb-3">Student Dashboard</h1>
        <div class="alert alert-success py-2">Logged In</div>
        <h2 class="h4 mt-4">Welcome, {{ $user->name }}!</h2>
        <p class="text-secondary">You have successfully logged in to your account.</p>
        <dl class="row mt-4">
            <dt class="col-sm-2">Name</dt>
            <dd class="col-sm-10">{{ $user->name }}</dd>
            <dt class="col-sm-2">Email</dt>
            <dd class="col-sm-10">{{ $user->email }}</dd>
        </dl>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection
