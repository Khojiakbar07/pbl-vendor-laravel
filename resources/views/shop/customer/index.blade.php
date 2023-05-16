@extends('layouts.admin')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>{{ __('All Customers') }}</span>
                            <div class="d-flex align-items-center my-1">
                                <h4 class="mb-0 me-2">{{ $customers->total() }}</h4>
                            </div>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                          <i class="ti ti-user ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>{{ __('Active Customers') }}</span>
                            <div class="d-flex align-items-center my-1">
                                <h4 class="mb-0 me-2">{{ $customers->total() }}</h4>
                            </div>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                          <i class="ti ti-user-plus ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">{{ __('Customers') }}</h5>
        <!--        <div class="d-flex align-self-end px-5">
            <a href="{{ route('customer.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
        </div>-->

        <div class="row m-2 pb-3">
            <div class="col-md-2">
                <div class="me-3">
                    <div class="dataTables_length" id="DataTables_Table_0_length">
                        <label>
                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label>
                            <input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                    <div class="dt-buttons btn-group flex-wrap">
                        <div class="btn-group">
                            <button class="btn btn-secondary buttons-collection dropdown-toggle btn-label-secondary mx-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false">
                                <span><i class="ti ti-screen-share me-1 ti-xs"></i>Export</span>
                                <span class="dt-down-arrow"></span>
                            </button>
                        </div>
                        <a class="btn btn-secondary add-new btn-primary" tabindex="0" type="button" href="{{ route('customer.create') }}">
                            <span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">{{ __('Create') }}</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive text-nowrap">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Image') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Actions') }}</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($customers as $customer)
                    <tr>
                        <td>
                            <strong>{{ $customer->id }}</strong>
                        </td>
                        <td>
                            <img src="{{ asset($customer->image) }}" class="img-fluid" style="width: 5rem;">
                        </td>
                        <td>
                            <a href="{{ route('customer.show', $customer->id) }}">{{ $customer->name }}</a>
                        </td>
                        <td>
                            {{ $customer->phone }}
                        </td>
                        <td>
                            <span class="badge bg-label-primary me-1">{{ __('Active') }}</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('customer.show', $customer->id) }}">
                                        <i class="ti ti-eye me-1"></i>
                                        {{ __('Show') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('customer.edit', $customer->id) }}">
                                        <i class="ti ti-pencil me-1"></i>
                                        {{ __('Edit') }}
                                    </a>
                                    <form method="POST" action="{{ route('customer.destroy', $customer->id) }}">
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
                {{ $customers->links() }}
            </div>

        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
