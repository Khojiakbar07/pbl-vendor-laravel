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
                            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                            <input type="text" class="form-control @error('name') form-danger @enderror" placeholder="Category Name" name="name" value="{{ old('name') }}">
                        </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Import image</label>
                                <input class="form-control" type="file" id="image" name="image" />
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Import image</label>
                                <input class="form-control" type="file" id="icon" name="icon" />
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
