@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Create') }}</h5>
                <form method="POST" action="{{ route('supplier.store', $supplier->id) }}">git
                    @csrf
                    <div class="card-body">

                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supplier Name</label>
                            <input type="text" class="form-control" placeholder="Supplier Name" name="name" value="{{$supplier->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supplier phone</label>
                            <input type="text" class="form-control" placeholder="Supplier phone" name="phone" value="{{$supplier->phone}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supplier company</label>
                            <input type="text" class="form-control" placeholder="Supplier company" name="company" value="{{$supplier->company}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Note</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="note" >{{$supplier->note}}</textarea>
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
