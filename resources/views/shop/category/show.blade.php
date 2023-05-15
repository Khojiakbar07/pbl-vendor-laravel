@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Show Category') }}</h5>


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
                        <td>{{ $category->image }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('Icon') }}</th>
                        <td>{{ $category->icon }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('Name') }}</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('created_at') }}</th>
                        <td>{{ $category->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('updated_at') }}</th>
                        <td>{{ $category->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('updated_at') }}</th>
                        <td>{{ \Carbon\Carbon::make($category->updated_at)->diffInMinutes() }} minut oldin ozgardi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
