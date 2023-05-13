@extends('layouts.admin_login')

@section('content')
    <!-- Reset Password -->
    <div class="card">
    <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4 mt-2">
        <a href="{{ route('home') }}" class="app-brand-link gap-2">
            <image class="app-brand-logo" style="height: 30px;" src="{{ asset('images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}"></image>

        </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-1 pt-2">Reset Password 🔒</h4>
        <p class="mb-4">for <span class="fw-bold">john.doe@email.com</span></p>
        <form id="formAuthentication" action="auth-login-basic.html" method="POST">
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">New Password</label>
            <div class="input-group input-group-merge">
            <input
                type="password"
                id="password"
                class="form-control"
                name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password"
            />
            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="confirm-password">Confirm Password</label>
            <div class="input-group input-group-merge">
            <input
                type="password"
                id="confirm-password"
                class="form-control"
                name="confirm-password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password"
            />
            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
        </div>
        <button class="btn btn-primary d-grid w-100 mb-3">Set new password</button>
        <div class="text-center">
            <a href="{{ route('login') }}">
            <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
            Back to login
            </a>
        </div>
        </form>
    </div>
    </div>
    <!-- /Reset Password -->
@endsection
