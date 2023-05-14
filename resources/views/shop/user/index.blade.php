@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">{{ __('User') }}</h5>
        <div class="d-flex align-self-end px-5">
            <a href="{{ route('user.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Avatar') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Created at') }}</th>
                    <th>{{ __('Actions') }}</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($users as $user)
                <tr>
                    <td>
                        <strong>{{ $user->id }}</strong>
                    </td>
                    <td>
                        <img src="{{ asset($user->image) }}" class="img-fluid" style="width: 5rem;">
                    </td>
                    <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td><span class="badge bg-label-primary me-1">{{ __('Active') }}</span></td>
                    <td>{{ \Carbon\Carbon::make($user->created_at)->format('d.m.Y H:i') }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('user.show', $user->id) }}">
                                    <i class="ti ti-eye me-1"></i>
                                    {{ __('Show') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}">
                                    <i class="ti ti-pencil me-1"></i>
                                    {{ __('Edit') }}
                                </a>
                                <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="dropdown-item delete-user">
                                        <i class="ti ti-trash me-1"></i>
                                        {{ __('Delete') }}
                                    </button>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

            <div class="pagination text-center d-flex justify-content-center m-3">
                {{ $users->links() }}
            </div>

        </div>
    </div>
    <!--/ Hoverable Table rows -->

    <script>
        $('.delete-user').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
@endsection
