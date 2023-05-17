@extends('layouts.admin')

@section('content')

    <div>
        <form class="row" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf

            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">{{__('Import image')}}</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">{{__('Short Description')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description">{{ old('short_description') }}</textarea>
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="description">{{ old('description') }}</textarea>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card mb-4">
                <div class="card-body">


                    <div class="row mb-3">
                        <div class="col-8">
                            <label for="price" class="form-label">{{ __('Price') }}</label>
                            <input type="number" id="price" class="form-control" placeholder="{{ __('Price') }}" name="price" value="{{ old('price') }}">
                        </div>
                        <div class="col-4">
                            <label for="defaultSelect" class="form-label">{{ __('Currency') }}</label>
                            <select id="defaultSelect" class="form-select">
                                <option value="uzs">UZS</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="current_stock" class="form-label">{{ __('Stocks') }}</label>
                        <input type="number" id="current_stock" class="form-control" placeholder="{{ __('Stocks') }}" name="current_stock" value="{{ old('price') }}">
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-4">
                            <label for="brand_label" class="form-label">{{ __('Category') }}</label>
                            <select name="brand_id" id="brand_label" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
                                @foreach($categories as $brand)
                                    <option data-tokens="{{ $brand->name }}" value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-4">
                            <label for="brand_label" class="form-label">{{ __('Brand') }}</label>
                            <select name="brand_id" id="brand_label" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
                                @foreach($suppliers as $brand)
                                    <option data-tokens="{{ $brand->name }}" value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12 mb-4">
                            <label for="brand_label" class="form-label">{{ __('Supplier') }}</label>
                            <select name="brand_id" id="brand_label" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
                                @foreach($brands as $brand)
                                    <option data-tokens="{{ $brand->name }}" value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-lg btn-success my-3">{{__('Submit')}}</button>
                    </div>
                </div>
                </div>
            </div>

        </form>
    </div>

@endsection
