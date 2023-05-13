@extends('layouts.admin_login')

@section('content')
    <!-- Register Card -->
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="{{ route('home') }}" class="app-brand-link gap-2">
                    <image class="app-brand-logo" style="height: 30px;" src="{{ asset('images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}"></image>
                </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-1 pt-2">Adventure starts here 🚀</h4>
            <p class="mb-4">Make your app management easy and fun!</p>

            <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                        value="{{ old('name') }}"
                        required autofocus autocomplete="name"
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                           placeholder="Enter your email" required autocomplete="email"/>
                </div>
                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password"
                            role="presentation" autocomplete="off"
                            required
                        />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                </div>

                <div class="mb-3 form-password-toggle">
                    <label class="form-label"
                           for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <div class="input-group input-group-merge">
                        <input
                            type="password"
                            id="password_confirmation"
                            class="form-control"
                            name="password_confirmation"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password"
                            role="presentation" autocomplete="off"
                            required
                        />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms"/>
                        <label class="form-check-label" for="terms-conditions">
                            I agree to
                            <a href="javascript:void(0);">privacy policy & terms</a>
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary d-grid w-100">{{ __('Sign up') }}</button>
            </form>

            <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}">
                    <span>Sign in instead</span>
                </a>
            </p>

            <div class="divider my-4">
                <div class="divider-text">or</div>
            </div>

            <div class="d-flex justify-content-center">
                <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                    <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                    <i class="tf-icons fa-brands fa-google fs-5"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                    <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Register Card -->
@endsection
