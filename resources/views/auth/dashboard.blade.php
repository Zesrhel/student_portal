@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-md-items-center gap-3 mb-4">
    <div>
        <p class="page-kicker mb-2">Student dashboard</p>
        <h1 class="h2 mb-1">Welcome, {{ $user->name }}!</h1>
        <p class="text-secondary mb-0">Here is your account overview.</p>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-danger px-3 py-2"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
    </form>
</div>
<div class="row g-4 mb-4">
    <div class="col-md-7">
        <div class="soft-card p-4 h-100 d-flex align-items-center gap-3">
            <div class="brand-mark"><i class="bi bi-person-fill fs-5"></i></div>
            <div><div class="small text-secondary mb-1">Signed-in account</div><div class="fw-bold">{{ $user->name }}</div><div class="small text-secondary">{{ $user->email }}</div></div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="soft-card p-4 h-100 d-flex align-items-center justify-content-between">
            <div><div class="small text-secondary mb-1">Active accounts</div><div class="h3 mb-0">{{ $activeUsers->count() }}</div></div>
            <div class="brand-mark" style="background:#198754;"><i class="bi bi-people-fill fs-5"></i></div>
        </div>
    </div>
</div>
<div class="portal-card p-4">
    <div class="mb-3"><p class="page-kicker mb-1">Directory</p><h2 class="h4 mb-0">Active Users</h2></div>
        @if ($activeUsers->isEmpty())
            <div class="alert alert-info">No active users are available.</div>
        @else
            <div class="table-responsive rounded-3">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Account Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activeUsers as $activeUser)
                            <tr>
                                <td>{{ $activeUser->id }}</td>
                                <td>{{ $activeUser->name }}</td>
                                <td>{{ $activeUser->email }}</td>
                                <td><span class="badge rounded-pill bg-success-subtle text-success-emphasis px-3 py-2">Active</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

</div>
@endsection
