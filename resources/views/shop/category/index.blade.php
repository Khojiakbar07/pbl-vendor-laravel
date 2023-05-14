@extends('layouts.admin')

@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">{{ __('Categories') }}</h5>
        <div class="d-flex align-self-end px-5">
            <a href="{{ route('category.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Image') }}</th>
                    <th>{{ __('Category') }}</th>
                    <th>{{ __('Level') }}</th>
                    <th>{{ __('Icon') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Created at') }}</th>
                    <th>{{ __('Actions') }}</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($categories as $category)
                <tr>
                    <td>
                        <strong>{{ $category->id }}</strong>
                    </td>
                    <td>
                        <img src="{{ asset($category->image) }}" class="img-fluid" style="width: 5rem;">
                    </td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                    </td>
                    <td>
                        {{ $category->level }}
                    </td>
                    <td>
                        {{ $category->icon }}
                    </td>
                    <td>
                        <span class="badge bg-label-primary me-1">{{ __('Active') }}</span>
                    </td>
                    <td>
                        {{ \Carbon\Carbon::make($category->created_at)->format('d.m.Y H:i') }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('category.show', $category->id) }}">
                                    <i class="ti ti-eye me-1"></i>
                                    {{ __('Show') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('category.edit', $category->id) }}">
                                    <i class="ti ti-pencil me-1"></i>
                                    {{ __('Edit') }}
                                </a>
                                <form method="POST" action="{{ route('category.destroy', $category->id) }}">
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
                {{ $categories->links() }}
            </div>

        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
