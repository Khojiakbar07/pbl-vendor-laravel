@extends('layouts.admin_login')

@section('content')
    <!-- Login -->
    <div class="card">
        <div class="card-body">

        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4 mt-2">
            <a href="{{ route('home') }}" class="app-brand-link gap-2">
                <image class="app-brand-logo" style="height: 30px;" src="{{ asset('images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}"></image>
            </a>
        </div>

          <!-- /Logo -->
          <h4 class="mb-1 pt-2">Welcome to {{ env('APP_NAME') }}! 👋</h4>
          <p class="mb-4">Please sign-in to your account and start the adventure</p>

            @if($errors->get('email'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <span class="alert-icon text-danger me-2">
                          <i class="ti ti-ban ti-xs"></i>
                        </span>
                    {{ $errors->get('email')[0] }}
                </div>
            @endif

          <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="email" class="form-label">{{ __('Email') }}</label>
              <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email or username"
                  value="{{ old('email') ?? env('ADMIN_MAIL', 'admin@example.com') }}"
                  required autocomplete="username"
                  autofocus
              />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">{{ __('Password') }}</label>
                <a href="{{ route('password.request') }}">
                  <small>{{ __('Forgot Password') }}?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  value="{{ env('ADMIN_PASS', 'password') }}"
                  aria-describedby="password"
                  required
                />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                <label class="form-check-label" for="remember-me"> {{ __('Remember Me') }} </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Sign in') }}</button>
            </div>
          </form>

          <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{ route('register') }}">
              <span>{{ __('Create an account') }}</span>
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
      <!-- /Register -->
@endsection
