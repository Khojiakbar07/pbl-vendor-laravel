@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Show') }}</h5>

                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">

                            <img src="{{ asset($user->avatar) }}" class="img-fluid img-thumbnail" alt="null">
                            <div class="user-info text-center">
                                <h4 class="mb-2">{{ $user->name }}</h4>
                                <span class="badge bg-label-secondary mt-1">{{$user->user_type}}</span>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 small text-uppercase text-muted">Details</p>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <span class="fw-semibold me-1">Username:</span>
                                <span>{{$user->name}}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">Email:</span>
                                <span>{{$user->email}}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">Status:</span>
                                <span class="badge bg-label-success">Active</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">User type:</span>
                                <span class="badge bg-label-secondary">{{$user->user_type}}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">created_at:</span>
                                <span>{{$user->updated_at->format('d.m.Y')}}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">updated_at:</span>
                                <span>{{  \Carbon\Carbon::make($user->updated_at)->diffForHumans()}}</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a  href="{{ route('user.edit', $user->id) }}" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                            <a href="javascript:;" class="btn btn-label-danger suspend-user waves-effect">Suspended</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
