@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Show') }}</h5>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">{{ __('Column') }}</th>
                        <th scope="col">{{ __('Value') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{ __('Image') }}</th>
                        <td>
                            <img src="{{ asset($brand->image) }}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('Name') }}</th>
                        <td>{{ $brand->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('Author') }}</th>
                        <td>{{ $brand->user->name }}</td>
                    </tr>

                    <tr>
                        <th scope="row">{{ __('Created_at') }}</th>
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
