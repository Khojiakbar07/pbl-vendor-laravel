@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">{{ __('supplier') }}</h5>
        <div class="d-flex align-self-end px-5">
            <a href="{{ route('supplier.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <thsupplier</th>
                    <th>Phone</th>
                    <th>Compone</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($suppliers as $supplier)
                <tr>
                    <td>
                        <strong>{{ $supplier->id }}</strong>
                    </td>
                    <td><a href="{{ route('supplier.show', $supplier->id) }}">{{ $supplier->name }}</a></td>
                    <td>{{ $supplier->user->name }}</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>{{ \Carbon\Carbon::make($supplier->created_at)->diffInMinutes() }} minut oldin</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('supplier.edit', $supplier->id) }}"
                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                >
                                <form method="POST" action="{{ route('supplier.destroy', $supplier->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <button type="submit" class="btn-light delete-user"><i class="ti ti-trash me-1"></i> Delete</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

            <div class="pagination text-center d-flex justify-content-center m-3">
                {{$suppliers->links() }}
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
