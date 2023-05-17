@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Edit') }}</h5>
                <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset($user->avatar) }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-3 waves-effect waves-light" tabindex="0">
                                    <span class="d-none d-sm-block">{{ __('Upload new photo') }}</span>
                                    <i class="ti ti-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload"  name="image" value="{{$user->avatar}}" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                                </label>
                                <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                        </div>

                        <div class="mb-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-username">{{ __('Username')}}</label>
                                <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" name="name" value="{{$user->name }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-email">{{ __('Email') }}</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="formtabs-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="formtabs-email2" name="email" value="{{ $user->email }}" required>
                                    <span class="input-group-text" id="formtabs-email2">@example.com</span>
                                </div>
                            </div>

                            <div class="mt-2 mb-3">
                                <label for="largeSelect" class="form-label">{{ __('User type') }}</label>
                                <select id="largeSelect" class="form-select" name="user_type">
                                    <option value="admin">{{ __('Admin') }}</option>
                                    <option value="staff">{{ __('Staff') }}</option>
                                    <option value="cashier">{{ __('Cashier') }}</option>
                                </select>
                            </div>


                                <h5 class="card-header">{{ __('Change Password') }}</h5>
                                <div class="card-body">
                                    <form id="formAccountSettings" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                        <div class="row">
                                            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                                <label class="form-label" for="currentPassword">{{ __('Current Password') }}</label>
                                                <div class="input-group input-group-merge has-validation">
                                                    <input class="form-control" type="password" name="currentPassword" id="currentPassword"   placeholder="············">
                                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                                </div><div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                                <label class="form-label" for="newPassword">{{ __('New Password') }}</label>
                                                <div class="input-group input-group-merge has-validation">
                                                    <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="············">
                                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                                </div><div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                            <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                                <label class="form-label" for="confirmPassword">{{ __('Confirm New Password') }}</label>
                                                <div class="input-group input-group-merge has-validation">
                                                    <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="············">
                                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                                </div><div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <h6>{{ __('Password Requirements:') }}</h6>
                                                <ul class="ps-3 mb-0">
                                                    <li class="mb-1">{{ __('Minimum 8 characters long - the more, the better') }}</li>
                                                    <li class="mb-1">{{ __('At least one lowercase character') }}</li>
                                                    <li>{{ __('At least one number, symbol, or whitespace character') }}</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">{{ __('Save changes') }}</button>
                                                <button type="reset" class="btn btn-label-secondary waves-effect">{{ __('Cancel') }}</button>
                                            </div>
                                        </div>
                                        <input type="hidden">



                </form>
            </div>
        </div>
    </div>

@endsection
