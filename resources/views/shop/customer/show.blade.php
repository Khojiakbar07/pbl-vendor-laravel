@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded mb-3 pt-1 mt-4" src="{{ asset($customer->image) }}" height="100" width="100" alt="User avatar">
                            <div class="user-info text-center">
                                <h4 class="mb-2">{{ $customer->name }}</h4>
                            </div>
                        </div>
                    </div>

                    <p class="mt-4 small text-uppercase text-muted">Details</p>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <span class="fw-semibold me-1">Name:</span>
                                <span>{{ $customer->name }}</span>
                            </li>


                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">Birthday:</span>
                                <span>{{$customer->birthday}}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">Age :</span>
                                <span>{{ \Carbon\Carbon::make($customer->birthday)->diffInYears(today()) }}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">Contact:</span>
                                <span>{{ $customer->phone }}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-semibold me-1">Status:</span>
                                <span class="badge bg-label-success">Active</span>
                            </li>
                            <li class="pt-1">
                                <span class="fw-semibold me-1">Country:</span>
                                <span>{{ $customer->address }}</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:;" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                            <a href="javascript:;" class="btn btn-label-danger suspend-user waves-effect">Suspended</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="card-header flex-column flex-md-row">
                            <div class="head-label text-center">
                                <h5 class="card-title mb-0">{{ __('History of operations')  }}</h5>
                            </div>
                            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <div class="btn-group"><button
                                            class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2"
                                            tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                                            aria-expanded="false"><span><i class="ti ti-file-export me-sm-1"></i> <span
                                                    class="d-none d-sm-inline-block">{{ __('Export') }}</span></span><span
                                                class="dt-down-arrow"></span></button></div> <button
                                        class="btn btn-secondary create-new btn-primary" tabindex="0"
                                        aria-controls="DataTables_Table_0" type="button"><span><i class="ti ti-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">{{ __('Add New Record') }}</span></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="DataTables_Table_0_length"><label>{{ __('Show') }} <select
                                            name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                            <option value="7">7</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                        </select>{{ __('entries') }} </label></div>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>{{ __('Search') }}:<input type="search"
                                                                                                                   class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                            </div>
                        </div>
                        <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0"
                               aria-describedby="DataTables_Table_0_info" style="width: 1216px;">
                            <thead>
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                    style="width: 41px; display: none;" aria-label=""></th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    style="width: 119px;" aria-label="Name: activate to sort column ascending">ID</th>


                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    style="width: 107px;" aria-label="Date: activate to sort column ascending">Date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    style="width: 146px;" aria-label="Salary: activate to sort column ascending">Update</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    style="width: 141px;" aria-label="Status: activate to sort column ascending">Status</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 151px;" aria-label="Actions">
                                    Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd">
                                <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0
                                    to 0 of 0 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a
                                                href="#" aria-controls="DataTables_Table_0" data-dt-idx="previous" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#"
                                                                                                                            aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0"
                                                                                                                            class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>







{{--        <div class="col-md-12">--}}
{{--            <div class="card mb-4">--}}
{{--                <h5 class="card-header">{{ __('Show') }}</h5>--}}


{{--                <table class="table">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th scope="col">{{ __('Column') }}</th>--}}
{{--                        <th scope="col">{{ __('Value') }}</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                    <th scope="row">{{ __('Image') }}</th>--}}
{{--                        <td>--}}
{{--                            <img src="{{ asset($customer->image) }}" class="img-fluid">--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                    <th scope="row">{{ __('Name') }}</th>--}}
{{--                        <td>{{ $customer->name }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                    <th scope="row">{{ __('Fullname') }}</th>--}}
{{--                        <td>{{ $customer->fullname }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                    <th scope="row">{{ __('birthday') }}</th>--}}
{{--                        <td>{{ $customer->birthday }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                    <th scope="row">{{ __('Age') }}</th>--}}
{{--                        <td>{{ \Carbon\Carbon::make($customer->birthday)->diffInYears(today()) }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{ __('Phone') }}</th>--}}
{{--                        <td>{{ $customer->phone }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{__('Address')}}</th>--}}
{{--                        <td>{{ $customer->address }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}

{{--                        <th scope="row">{{ __('Author') }}</th>--}}
{{--                        <td>{{ $customer->user->name }}</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <th scope="row">{{ __('created_at') }}</th>--}}
{{--                        <td>{{ $customer->created_at }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{ __('updated_at') }}</th>--}}
{{--                        <td>{{ $customer->updated_at->format('d.m.Y H:i') }}</td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}



    </div>

@endsection
