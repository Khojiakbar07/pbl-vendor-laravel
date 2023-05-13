@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Brand</h5>
                <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" placeholder="Brand Name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Import image </label>
                            <input class="form-control" type="file" id="image" name="image" />
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
