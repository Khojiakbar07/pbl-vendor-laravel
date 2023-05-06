@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Brand</h5>
                <form method="POST" action="{{ route('brand.store') }}">
                    @csrf
                    <div class="card-body">

                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Brand Image</label>
                            <input type="text" class="form-control" placeholder="Brand image" name="image" value="{{ old('image') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" placeholder="Brand Name" name="name" value="{{ old('name') }}">
                        </div>

                            <button type="submit" class="btn btn-lg btn-success my-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
