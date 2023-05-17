@extends('layouts.admin')

@section('content')

    <div>
        <form class="row" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf

            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ $product->name }}">
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label>
                            <input id="slug" type="text" class="form-control" placeholder="{{ __('Slug') }}" name="slug" value="{{ $product->slug }}">
                        </div>

                        @if($product->image)
                            <img class="img-fluid" src="{{ asset($product->image) }}" alt="{{ __('Image') }}">
                        @endif

                        <div class="mb-3">
                            <label for="image" class="form-label">{{__('Import image')}}</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">{{__('Short Description')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_description">{{ $product->short_description }}</textarea>
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="description">{{ $product->description }}</textarea>
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
                                <input type="number" id="price" class="form-control" placeholder="{{ __('Price') }}" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="col-4">
                                <label for="price_currency" class="form-label">{{ __('Currency') }}</label>
                                <select id="price_currency" class="form-select" name="price_currency">
                                    <option value="uzs">UZS</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-8">
                                <label for="price_additional" class="form-label">{{ __('Additional Price') }}</label>
                                <input type="number" id="price_additional" class="form-control" placeholder="{{ __('Price') }}" name="price_additional" value="{{ $product->price_additional }}">
                            </div>
                            <div class="col-4">
                                <label for="price_additional_currency" class="form-label">{{ __('Currency') }}</label>
                                <select id="price_additional_currency" class="form-select" name="price_additional_currency">
                                    <option value="uzs">UZS</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-8">
                                <label for="price_additional" class="form-label">{{ __('Additional Price') }}</label>
                                <input type="number" id="price_additional" class="form-control" placeholder="{{ __('Price') }}" name="price_additional" value="{{ $product->price_additional  }}">
                            </div>
                            <div class="col-4">
                                <label for="price_additional_currency" class="form-label">{{ __('Currency') }}</label>
                                <select id="price_additional_currency" class="form-select" name="price_additional_currency">
                                    <option value="uzs">UZS</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="current_stock" class="form-label">{{ __('Stocks') }}</label>
                            <input type="number" id="current_stock" class="form-control" placeholder="{{ __('Stocks') }}" name="current_stock" value="{{ $product->current_stock }}">
                        </div>

                        <div class="mb-3">
                            <div class="col-md-12 mb-4">
                                <label for="brand_label" class="form-label">{{ __('Category') }}</label>
                                <select name="brand_id" id="brand_label" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
                                    <option value="">{{ __('Empty') }}</option>
                                    @foreach($categories as $category)
                                        <option data-tokens="{{ $category->name }}" value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-12 mb-4">
                                <label for="brand_label" class="form-label">{{ __('Brand') }}</label>
                                <select name="brand_id" id="brand_label" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
                                    <option value="">{{ __('Empty') }}</option>
                                    @foreach($brands as $brand)
                                        <option data-tokens="{{ $brand->name }}" value="{{ $brand->id }}" @if($product->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-12 mb-4">
                                <label for="brand_label" class="form-label">{{ __('Supplier') }}</label>
                                <select name="brand_id" id="brand_label" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
                                    <option value="">{{ __('Empty') }}</option>
                                    @foreach($suppliers as $supplier)
                                        <option data-tokens="{{ $supplier->name }}" value="{{ $supplier->id }}" @if($product->supplier_id == $supplier->id) selected @endif>{{ $supplier->name }}</option>
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
