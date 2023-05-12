@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Create Product') }}</h5>
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                            <input type="number" class="form-control" placeholder="Product Price" name="price" value="{{ old('price') }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Brand</label>
                            <select class="form-select" name="brand_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-6 mb-4">
                                <label for="selectpickerLiveSearch" class="form-label">{{ __('Brand') }}</label>
                                <select
                                    id="selectpickerLiveSearch"
                                    class="selectpicker w-100"
                                    data-style="btn-default"
                                    data-live-search="true"
                                >
                                    @foreach($brands as $brand)
                                    <option data-tokens="{{ $brand->name }}" value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-6 mb-4">
                                <label for="selectpickerLiveSearch" class="form-label">Live Search</label>
                                <select
                                    id="selectpickerLiveSearch"
                                    class="selectpicker w-100"
                                    data-style="btn-default"
                                    data-live-search="true"
                                >
                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Import image</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>

                        {{--
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Read plain</label>
                            <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label">Datalist example</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="San Francisco"></option>
                                <option value="New York"></option>
                                <option value="Seattle"></option>
                                <option value="Los Angeles"></option>
                                <option value="Chicago"></option>
                            </datalist>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                            <select multiple="" class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        --}}

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
