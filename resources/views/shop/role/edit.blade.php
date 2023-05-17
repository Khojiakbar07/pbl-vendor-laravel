@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Edit') }}</h5>
                <form method="POST" action="{{ route('role.update', $role->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ $role->name }}" required>
                        </div>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="information[]">
                            <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Users management')  }}</label>
                        </div>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="information[]">
                            <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('POS terminal')  }}</label>
                        </div>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="information[]">
                            <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Product')  }}</label>
                        </div>


                            <button type="submit" class="btn btn-lg btn-success my-3">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
