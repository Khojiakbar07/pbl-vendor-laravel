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
                        <th scope="row">Image</th>
                        <td>
                            <img src="{{ asset($customer->image) }}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Fullname</th>
                        <td>{{ $customer->fullname }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Birthday</th>
                        <td>{{ $customer->birthday }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Age</th>
                        <td>{{ $customer->age }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td>{{ $customer->address }}</td>
                    </tr>
                    <tr>

                        <th scope="row">Author</th>
                        <td>{{ $customer->user->name }}</td>
                    </tr>

                    <tr>
                        <th scope="row">created_at</th>
                        <td>{{ $customer->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ $customer->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ \Carbon\Carbon::make($customer->updated_at)->diffInMinutes() }} minut oldin ozgardi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
