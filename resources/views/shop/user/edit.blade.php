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

                        <div class="mb-3">
                            @if($user->image)
                                <img class="img-fluid" style="max-width: 20rem;" src="{{ asset($user->image) }}" alt="Image"><br>
                            @endif
                            <label for="input3" class="form-label">{{ __('Image') }}</label>
                            <input id="input3" type="file" class="form-control" placeholder="{{ __('Image') }}" name="image" value="{{$user->image}}}">
                        </div>

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
                            <div class="col-md-6">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="formtabs-password">{{ __('Password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="formtabs-password" class="form-control" placeholder="············" aria-describedby="formtabs-password2" name="password" value="{{ $user->password}}" required>
                                        <span class="input-group-text cursor-pointer" id="formtabs-password2"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="formtabs-confirm-password">{{ __('Confirm Password') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="formtabs-confirm-password" class="form-control" placeholder="············" aria-describedby="formtabs-confirm-password2" name="password2" value="{{ $user->password2 }}" required>
                                        <span class="input-group-text cursor-pointer" id="formtabs-confirm-password2"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>

                            <div class="pt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">{{ __('Submit') }}</button>
                                <button type="reset" class="btn btn-label-secondary waves-effect">{{ __('Cancel') }}</button>
                            </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
