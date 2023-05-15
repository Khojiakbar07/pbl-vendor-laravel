@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Show') }}</h5>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Column</th>
                        <th scope="col">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <th scope="row">Image</th>
                    <td>
                        <img src="{{ asset($product->image) }}" class="img-fluid">
                    </td>

                    <tr>
                        <th scope="row">Author</th>
                        <td>{{ $product->user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">short_description</th>
                        <td>{{ $product->short_description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">price</th>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">created_at</th>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ $product->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ \Carbon\Carbon::make($product->updated_at)->diffInMinutes() }} minut oldin ozgardi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
