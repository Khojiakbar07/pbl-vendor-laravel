@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Edit') }}</h5>
                <form method="POST" action="{{ route('brand.update', $brand->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="input1" class="form-label">{{ __('Name') }}</label>
                            <input id="input1" type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ $brand->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="input2" class="form-label">{{ __('Slug') }}</label>
                            <input id="input2" type="text" class="form-control" placeholder="{{ __('Slug') }}" name="slug" value="{{ $brand->slug }}" required>
                        </div>

                        <div class="mb-3">
                            @if($brand->image)
                                <img class="img-fluid" style="max-width: 20rem;" src="{{ asset($brand->image) }}" alt="Image"><br>
                            @endif
                            <label for="input3" class="form-label">{{ __('Image') }}</label>
                            <input id="input3" type="file" class="form-control" placeholder="{{ __('Image') }}" name="image">
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
