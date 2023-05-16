@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Create') }}</h5>
                <form method="POST" action="{{ route('brand.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">{{ __('Image') }}</label>
                            <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" required />
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
