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
                            <img src="{{ asset($customer->image) }}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">{{ __('Name') }}</th>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                    <th scope="row">{{ __('Fullname') }}</th>
                        <td>{{ $customer->fullname }}</td>
                    </tr>
                    <tr>
                    <th scope="row">{{ __('birthday') }}</th>
                        <td>{{ $customer->birthday }}</td>
                    </tr>
                    <tr>
                    <th scope="row">{{ __('Age') }}</th>
                        <td>{{ \Carbon\Carbon::make($customer->birthday)->diffInYears(today()) }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('Phone') }}</th>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{__('Address')}}</th>
                        <td>{{ $customer->address }}</td>
                    </tr>
{{--                    <tr>--}}

{{--                        <th scope="row">{{ __('Author') }}</th>--}}
{{--                        <td>{{ $customer->user->name }}</td>--}}
{{--                    </tr>--}}

                    <tr>
                        <th scope="row">{{ __('created_at') }}</th>
                        <td>{{ $customer->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ __('updated_at') }}</th>
                        <td>{{ $customer->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
