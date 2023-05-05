@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Category</h5>
                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <div class="card-body">

                        @if($errors->any())
                            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                        @endif

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" class="form-control @error('name') form-danger @enderror" placeholder="Product Name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                            <input type="number" class="form-control" @error('price') form-danger @enderror placeholder="Product Price" name="price" value="{{ old('price') }}">
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="description">{{ old('description') }}</textarea>
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description">{{ old('short_description') }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-success my-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
