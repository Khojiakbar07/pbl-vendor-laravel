@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">{{ __('customers') }}</h5>
        <div class="d-flex align-self-end px-5">
            <a href="{{ route('customer.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Fullname</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach(customers as customer)
                <tr>
                    <td>
                        <strong>{{ customer->id }}</strong>
                    </td>
                    <td>
                        <img src="{{ asset(customer->image) }}" class="img-fluid" style="width: 5rem;">
                    </td>
                    <td><a href="{{ route('customer.show', customer->id) }}">{{ customer->name }}</a></td>
                    <td>{{ customer->user->name }}</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>{{ \Carbon\Carbon::make(customer->created_at)->diffInMinutes() }} minut oldin</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('customer.edit', customer->id) }}"
                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                >
                                <form method="POST" action="{{ route('customer.destroy', customer->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="dropdown-item delete-user"><i class="ti ti-trash me-1"></i> Delete</button>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

            <div class="pagination text-center d-flex justify-content-center m-3">
                {{ customers->links() }}
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
