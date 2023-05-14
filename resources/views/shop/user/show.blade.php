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
                            <img src="{{ asset($user->image) }}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">created_at</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ $user->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ \Carbon\Carbon::make($user->updated_at)->diffInMinutes() }} minut oldin ozgardi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
