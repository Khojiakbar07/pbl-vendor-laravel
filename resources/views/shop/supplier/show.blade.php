@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Show supplier</h5>


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
                        <td>{{ $supplier->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td>{{ $supplier->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Compone</th>
                        <td>{{ $supplier->comone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">created_at</th>
                        <td>{{ $supplier->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ $supplier->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ \Carbon\Carbon::make($supplier->updated_at)->diffInMinutes() }} minut oldin ozgardi</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
