@extends('layouts.app')

@section('title', 'About the Developer')

@section('content')
<div class="portal-card p-4 p-md-5">
    <div class="d-flex align-items-center gap-3 mb-4 pb-4 border-bottom">
        <div class="brand-mark"><i class="bi bi-code-slash fs-5"></i></div>
        <div><p class="page-kicker mb-1">Creator</p><h1 class="h2 mb-0">About the Developer</h1></div>
    </div>
    <div class="row g-4">
        <div class="col-md-4"><div class="soft-card p-4 text-center h-100"><div class="brand-mark mx-auto mb-3" style="width:72px;height:72px;font-size:1.5rem;">ZB</div><div class="small text-secondary">Developer</div><div class="fw-bold fs-5">Zesrhel Betacura</div></div></div>
        <div class="col-md-8">
            <div class="soft-card p-4 mb-4"><div class="small text-secondary mb-2">Skills and Interests</div><div class="fw-semibold">HTML, CSS, JavaScript, responsive design, databases, and web application development</div></div>
            <div class="soft-card p-4"><div class="small text-secondary mb-2">Why Laravel?</div><div>I am learning Laravel because it provides an organized framework, useful built-in features, strong security tools, and a clear structure for building maintainable applications.</div></div>
        </div>
    </div>
</div>
@endsection
