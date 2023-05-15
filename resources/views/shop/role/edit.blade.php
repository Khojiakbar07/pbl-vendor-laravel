@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Edit') }}</h5>
                <form method="POST" action="{{ route('role.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Permissions') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Permissions') }}" name="permissions" value="{{ old('permissions') }}" required>
                        </div>
                        <div class="col-md p-4">
                            <small class="text-light fw-semibold">{{ __('Permissions') }}</small>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="defaultCheck1" value="{{ old('defaultCheck1') }}" required>
                                <label class="form-check-label" for="defaultCheck1">{{ __('1-permission') }} </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked="" name="defaultCheck2" value="{{ old('defaultCheck2') }}" required>
                                <label class="form-check-label" for="defaultCheck2"> {{ __('2-Permission') }} </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked="" name="defaultCheck2" value="{{ old('defaultCheck2') }}" required>
                                <label class="form-check-label" for="defaultCheck3"> {{ __('3-Permission') }} </label>
                            </div>
                            {{--                            <div class="form-check">--}}
                            {{--                                <input class="form-check-input" type="checkbox" value="" id="disabledCheck1" disabled="">--}}
                            {{--                                <label class="form-check-label" for="disabledCheck1"> Disabled Unchecked </label>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="form-check">--}}
                            {{--                                <input class="form-check-input" type="checkbox" value="" id="disabledCheck2" disabled="" checked="">--}}
                            {{--                                <label class="form-check-label" for="disabledCheck2"> Disabled Checked </label>--}}
                            {{--                            </div>--}}
                        </div>
                                                <div class="mt-2 mb-3">
                                                    <label for="largeSelect" class="form-label">{{ __('Status') }}</label>
                                                    <select id="largeSelect" class="form-select form-select-lg" name="status" value="{{ old('status') }}" required>>
                                                        <option>{{ __('Status') }}</option>
                                                        <option value="1">{{ __('Active') }}</option>
                                                        <option value="0">{{ __('Not active') }}</option>

                                                    </select>
                                                </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-success my-3">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
