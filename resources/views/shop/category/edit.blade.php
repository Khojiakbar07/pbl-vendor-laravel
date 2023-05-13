@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit Category</h5>
                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                            <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{ $category->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Default file input example</label>
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
