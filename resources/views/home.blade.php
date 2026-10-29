@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="portal-card card p-4 p-md-5 text-center">
    <div class="card-body">
        <h1 class="display-5 fw-bold text-primary mb-3">Student Portal</h1>
        <p class="lead mb-4">Welcome to the Student Information Portal.</p>
        <p class="text-secondary mb-4">Explore the student profile and learn more about the developer behind this application.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('student') }}" class="btn btn-primary btn-lg">View Student Information</a>
            <a href="{{ route('developer') }}" class="btn btn-outline-primary btn-lg">About the Developer</a>
        </div>
    </div>
</div>
@endsection
