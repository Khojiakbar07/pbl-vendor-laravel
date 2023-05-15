@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
<<<<<<< HEAD
                <h5 class="card-header">{{ __('Edit Category') }}</h5>
=======
                <h5 class="card-header">{{ __('Edit') }}</h5>
>>>>>>> 4b01e5ba81eb2091d801f71b73f27a29b2d37489
                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Category Name') }}</label>
                            <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{ $category->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">{{ __('Default file input example') }}</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">{{ __('Default file input example') }}</label>
                            <input class="form-control" type="file" id="icon" name="icon" />
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
