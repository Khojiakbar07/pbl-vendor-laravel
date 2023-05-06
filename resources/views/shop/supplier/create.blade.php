@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Supplier</h5>
                <form method="POST" action="{{ route('Supplier.store') }}">
                    @csrf
                    <div class="card-body">

                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supplier Name</label>
                            <input type="text" class="form-control" placeholder="Supplier Name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supplier phone</label>
                            <input type="text" class="form-control" placeholder="Supplier phone" name="phone" value="{{ old('phone') }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supplier compone</label>
                            <input type="text" class="form-control" placeholder="Supplier phone" name="compone" value="{{ old('compone') }}">
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
