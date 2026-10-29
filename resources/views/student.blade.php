@extends('layouts.app')

@section('title', 'Student Information')

@section('content')
<div class="portal-card card p-4">
    <div class="card-body">
        <h1 class="h2 text-primary mb-4">Student Information</h1>
        <dl class="row mb-4">
            <dt class="col-sm-3">Full Name</dt>
            <dd class="col-sm-9">Zesrhel Betacura</dd>
            <dt class="col-sm-3">Course and Year</dt>
            <dd class="col-sm-9">Bachelor of Science in Information Technology — 3rd Year</dd>
            <dt class="col-sm-3">School</dt>
            <dd class="col-sm-9">College of Technology</dd>
        </dl>
        <h2 class="h5">Laravel Learning Experience</h2>
        <p class="text-secondary mb-0">I have learned that Laravel organizes applications through routes, controllers, Blade templates, and MVC conventions. I also learned how route names make navigation easier and how Blade allows reusable, dynamic layouts.</p>
    </div>
</div>
@endsection
