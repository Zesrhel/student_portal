@extends('layouts.app')

@section('title', 'Student Information')

@section('content')
<div class="portal-card p-4 p-md-5">
    <div class="d-flex align-items-center gap-3 mb-4 pb-4 border-bottom">
        <div class="brand-mark"><i class="bi bi-person-vcard-fill fs-5"></i></div>
        <div><p class="page-kicker mb-1">Profile</p><h1 class="h2 mb-0">Student Information</h1></div>
    </div>
    <div class="row g-4 mb-4">
        <div class="col-md-4"><div class="soft-card p-4 h-100"><div class="small text-secondary mb-2">Full Name</div><div class="fw-bold">Zesrhel Betacura</div></div></div>
        <div class="col-md-4"><div class="soft-card p-4 h-100"><div class="small text-secondary mb-2">Course and Year</div><div class="fw-bold">BS Information Technology — 3rd Year</div></div></div>
        <div class="col-md-4"><div class="soft-card p-4 h-100"><div class="small text-secondary mb-2">School</div><div class="fw-bold">College of Technology</div></div></div>
    </div>
    <div class="soft-card p-4"><h2 class="h5 mb-3"><i class="bi bi-lightning-charge-fill text-brand me-2"></i>Laravel Learning Experience</h2><p class="text-secondary mb-0">I have learned that Laravel organizes applications through routes, controllers, Blade templates, and MVC conventions. I also learned how route names make navigation easier and how Blade allows reusable, dynamic layouts.</p></div>
</div>
@endsection
