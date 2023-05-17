@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Create') }}</h5>
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="formFile" class="form-label">{{ __('Image') }}</label>
                            <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" required />
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-username">{{ __('Username')}}</label>
                                <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="mt-2 mb-3">
                                <label for="largeSelect" class="form-label">{{ __('User type') }}</label>
                                <select id="largeSelect" class="form-select" name="user_type">
                                    <option value="admin">{{ __('Admin') }}</option>
                                    <option value="staff">{{ __('Staff') }}</option>
                                    <option value="cashier">{{ __('Cashier') }}</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-email">{{ __('Email') }}</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="formtabs-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="formtabs-email2" name="email" value="{{ old('email') }}" required>
                                    <span class="input-group-text" id="formtabs-email2">@example.com</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="formtabs-password">{{ __('Password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="formtabs-password" class="form-control" placeholder="············" aria-describedby="formtabs-password2" name="password" value="{{ old('password') }}" required>
                                        <span class="input-group-text cursor-pointer" id="formtabs-password2"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="formtabs-confirm-password">{{ __('Confirm Password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="formtabs-confirm-password" class="form-control" placeholder="············" aria-describedby="formtabs-confirm-password2" name="password_confirmation" value="{{ old('password2') }}" required>
                                        <span class="input-group-text cursor-pointer" id="formtabs-confirm-password2"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="user_type" value="staff">

                        <div>
                            <button type="submit" class="btn btn-lg btn-success my-3">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
