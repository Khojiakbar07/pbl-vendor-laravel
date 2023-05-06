@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Show brand</h5>


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
                        <td>{{ $brand->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Author</th>
                        <td>{{ $brand->user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">description</th>
                        <td>{{ $brand->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">short_description</th>
                        <td>{{ $brand->short_description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">price</th>
                        <td>{{ $brand->price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">created_at</th>
                        <td>{{ $brand->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ $brand->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ \Carbon\Carbon::make($brand->updated_at)->diffInMinutes() }} minut oldin ozgardi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
