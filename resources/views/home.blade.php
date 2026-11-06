@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="portal-card overflow-hidden">
    <div class="row g-0 align-items-stretch">
        <div class="col-lg-7 p-4 p-md-5">
            <div class="py-lg-4">
                <p class="page-kicker mb-3">Welcome to your portal</p>
                <h1 class="display-5 fw-bold mb-4" style="line-height:1.08;">Your student profile, <span class="text-brand">all in one place.</span></h1>
                <p class="lead text-secondary mb-4">Explore student information, meet the developer, and manage your account from one clean workspace.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('student') }}" class="btn btn-primary px-4 py-3"><i class="bi bi-person-badge me-2"></i>Student Information</a>
                    <a href="{{ route('developer') }}" class="btn btn-light border px-4 py-3"><i class="bi bi-code-slash me-2"></i>About the Developer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center justify-content-center p-5" style="background:linear-gradient(145deg,#edf2ff,#dce7ff);">
            <div class="text-center">
                <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width:150px;height:150px;background:white;color:#3559e0;font-size:4rem;box-shadow:0 20px 40px rgba(53,89,224,.16);"><i class="bi bi-mortarboard-fill"></i></div>
                <div class="d-inline-flex align-items-center gap-2 rounded-pill bg-white px-3 py-2 shadow-sm"><span class="bg-success rounded-circle" style="width:9px;height:9px;"></span><span class="small fw-bold">Portal Ready</span></div>
            </div>
        </div>
    </div>
</div>
@endsection
