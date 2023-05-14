@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">{{ __('Products') }}</h5>
        <div class="d-flex align-self-end px-5">
            <a href="{{ route('product.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($products as $product)
                <tr>
                    <td>
                        <strong>{{ $product->id }}</strong>
                    </td>
                    <td>
                        <img src="{{ asset($product->image) }}" class="img-fluid">
                    </td>
                    <td>
                        <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                    </td>
                    <td>
                        {{ $product->user->name }}
                    </td>
                    <td>
                        <span class="badge bg-label-primary me-1">{{ __('Active') }}</span>
                    </td>
                    <td>
                        {{ \Carbon\Carbon::make($customer->created_at)->format('d.m.Y H:i') }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">
                                    <i class="ti ti-pencil me-1"></i> {{ __('Edit') }}
                                </a>
                                <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <button type="submit" class="btn-light delete-user"><i class="ti ti-trash me-1"></i> {{ __('Delete') }}</button>
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
                {{ $products->links() }}
            </div>

        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
