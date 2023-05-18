@extends('layouts.admin')

@section('page_js')
    <script src="{{ asset('assets/js/app-user-list.js') }}"></script>
@endsection

@section('content')
{{--    <div class="row g-4 mb-4">--}}
{{--        <div class="col-sm-6 col-xl-3">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-start justify-content-between">--}}
{{--                        <div class="content-left">--}}
{{--                            <span>Session</span>--}}
{{--                            <div class="d-flex align-items-center my-1">--}}
{{--                                <h4 class="mb-0 me-2">21,459</h4>--}}
{{--                                <span class="text-success">(+29%)</span>--}}
{{--                            </div>--}}
{{--                            <span>Total Users</span>--}}
{{--                        </div>--}}
{{--                        <span class="badge bg-label-primary rounded p-2">--}}
{{--                          <i class="ti ti-user ti-sm"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-xl-3">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-start justify-content-between">--}}
{{--                        <div class="content-left">--}}
{{--                            <span>Paid Users</span>--}}
{{--                            <div class="d-flex align-items-center my-1">--}}
{{--                                <h4 class="mb-0 me-2">4,567</h4>--}}
{{--                                <span class="text-success">(+18%)</span>--}}
{{--                            </div>--}}
{{--                            <span>Last week analytics </span>--}}
{{--                        </div>--}}
{{--                        <span class="badge bg-label-danger rounded p-2">--}}
{{--                          <i class="ti ti-user-plus ti-sm"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-xl-3">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-start justify-content-between">--}}
{{--                        <div class="content-left">--}}
{{--                            <span>Active Users</span>--}}
{{--                            <div class="d-flex align-items-center my-1">--}}
{{--                                <h4 class="mb-0 me-2">19,860</h4>--}}
{{--                                <span class="text-danger">(-14%)</span>--}}
{{--                            </div>--}}
{{--                            <span>Last week analytics</span>--}}
{{--                        </div>--}}
{{--                        <span class="badge bg-label-success rounded p-2">--}}
{{--                          <i class="ti ti-user-check ti-sm"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-xl-3">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="d-flex align-items-start justify-content-between">--}}
{{--                        <div class="content-left">--}}
{{--                            <span>Pending Users</span>--}}
{{--                            <div class="d-flex align-items-center my-1">--}}
{{--                                <h4 class="mb-0 me-2">237</h4>--}}
{{--                                <span class="text-success">(+42%)</span>--}}
{{--                            </div>--}}
{{--                            <span>Last week analytics</span>--}}
{{--                        </div>--}}
{{--                        <span class="badge bg-label-warning rounded p-2">--}}
{{--                          <i class="ti ti-user-exclamation ti-sm"></i>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-xxl flex-grow-1 container-p-y">--}}
{{--        <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Invoice /</span> List</h4>--}}

{{--        <!-- Invoice List Table -->--}}
{{--        <div class="card">--}}
{{--            <div class="card-datatable table-responsive">--}}
{{--                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">--}}
{{--                    <div class="row ms-2 me-3">--}}
{{--                        <div--}}
{{--                            class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-2">--}}
{{--                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select--}}
{{--                                        name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"--}}
{{--                                        class="form-select">--}}
{{--                                        <option value="10">10</option>--}}
{{--                                        <option value="25">25</option>--}}
{{--                                        <option value="50">50</option>--}}
{{--                                        <option value="100">100</option>--}}
{{--                                    </select></label></div>--}}
{{--                            <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">--}}
{{--                                <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary btn-primary"--}}
{{--                                                                                    tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i--}}
{{--                                                class="ti ti-plus me-md-1"></i><span class="d-md-inline-block d-none">Create--}}
{{--                                            Invoice</span></span></button> </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div--}}
{{--                            class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2">--}}
{{--                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"--}}
{{--                                                                                                        class="form-control" placeholder="Search Invoice"--}}
{{--                                                                                                        aria-controls="DataTables_Table_0"></label></div>--}}
{{--                            <div class="invoice_status mb-3 mb-md-0"><select id="UserRole" class="form-select">--}}
{{--                                    <option value=""> Select Status </option>--}}
{{--                                    <option value="Downloaded" class="text-capitalize">Downloaded</option>--}}
{{--                                    <option value="Draft" class="text-capitalize">Draft</option>--}}
{{--                                    <option value="Paid" class="text-capitalize">Paid</option>--}}
{{--                                    <option value="Partial Payment" class="text-capitalize">Partial Payment</option>--}}
{{--                                    <option value="Past Due" class="text-capitalize">Past Due</option>--}}
{{--                                    <option value="Sent" class="text-capitalize">Sent</option>--}}
{{--                                </select></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <table class="invoice-list-table table border-top dataTable no-footer dtr-column"--}}
{{--                           id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1214px;">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th class="control sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0"--}}
{{--                                rowspan="1" colspan="1" style="width: 0px; display: none;"--}}
{{--                                aria-label=": activate to sort column ascending"></th>--}}
{{--                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"--}}
{{--                                colspan="1" style="width: 78px;" aria-label="#ID: activate to sort column ascending"--}}
{{--                                aria-sort="descending">#ID</th>--}}
{{--                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"--}}
{{--                                style="width: 55px;" aria-label=": activate to sort column ascending"><i--}}
{{--                                    class="ti ti-trending-up"></i></th>--}}
{{--                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"--}}
{{--                                style="width: 311px;" aria-label="Client: activate to sort column ascending">Client</th>--}}
{{--                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"--}}
{{--                                style="width: 87px;" aria-label="Total: activate to sort column ascending">Total</th>--}}
{{--                            <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0"--}}
{{--                                rowspan="1" colspan="1" style="width: 157px;"--}}
{{--                                aria-label="Issued Date: activate to sort column ascending">Issued Date</th>--}}
{{--                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 117px;"--}}
{{--                                aria-label="Balance">Balance</th>--}}
{{--                            <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 103px;"--}}
{{--                                aria-label="Actions">Actions</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}

{{--                            <td class="" style="">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">--}}
{{--                                        <i class="ti ti-mail mx-2 ti-sm"></i></a>--}}
{{--                                    <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" aria-label="Preview Invoice" data-bs-original-title="Preview Invoice">--}}
{{--                                        <i class="ti ti-eye mx-2 ti-sm"></i></a>--}}
{{--                                    <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm"></i></a>--}}
{{--                                        <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="app-invoice-edit.html"--}}
{{--                                                                                                                             class="dropdown-item">Edit</a><a href="javascript:;"--}}
{{--                                                                                                                                                              class="dropdown-item">Duplicate</a>--}}
{{--                                            <div class="dropdown-divider"></div><a href="javascript:;"--}}
{{--                                                                                   class="dropdown-item delete-record text-danger">Delete</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                    <div class="row mx-2">--}}
{{--                        <div class="col-sm-12 col-md-6">--}}
{{--                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">--}}
{{--                                Showing 1 to 10 of 50 entries</div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-6">--}}
{{--                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="paginate_button page-item previous disabled"--}}
{{--                                        id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"--}}
{{--                                                                            data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>--}}
{{--                                    <li class="paginate_button page-item active"><a href="#"--}}
{{--                                                                                    aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"--}}
{{--                                                                                    class="page-link">1</a></li>--}}
{{--                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"--}}
{{--                                                                              data-dt-idx="1" tabindex="0" class="page-link">2</a></li>--}}
{{--                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"--}}
{{--                                                                              data-dt-idx="2" tabindex="0" class="page-link">3</a></li>--}}
{{--                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"--}}
{{--                                                                              data-dt-idx="3" tabindex="0" class="page-link">4</a></li>--}}
{{--                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"--}}
{{--                                                                              data-dt-idx="4" tabindex="0" class="page-link">5</a></li>--}}
{{--                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"--}}
{{--                                                                                                               aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0"--}}
{{--                                                                                                               class="page-link">Next</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}





    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($orders as $order)
                    <tr>
                        <td>
                            <strong>{{ $order->id }}</strong>
                        </td>
                        <td>
                            <img src="{{ asset($order->image) }}" class="img-fluid" style="width: 5rem;">
                        </td>
                        <td>
                            <a href="{{ route('order.show', $order->id) }}">{{ $order->name }}</a>
                        </td>
                        <td>
                            {{ $order->user?->name ?? __('Empty') }}
                        </td>
                        <td>
                            <span class="badge bg-label-primary me-1">{{ __('Active') }}</span>
                        </td>
                        <td>
                            {{ \Carbon\Carbon::make($order->created_at)->format('d.m.Y H:i') }}
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('order.show', $order->id) }}">
                                        <i class="ti ti-eye me-1"></i>
                                        {{ __('Show') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('order.edit', $order->id) }}">
                                        <i class="ti ti-pencil me-1"></i>
                                        {{ __('Edit') }}
                                    </a>
                                    <form method="POST" action="{{ route('order.destroy', $order->id) }}">
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
                {{ $orders->links() }}
            </div>


        </div>
        <!-- Offcanvas to add new user -->
        <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasAddUser"
            aria-labelledby="offcanvasAddUserLabel"
        >
            <div class="offcanvas-header">
                <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                ></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                    <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Full Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="add-user-fullname"
                            placeholder="John Doe"
                            name="userFullname"
                            aria-label="John Doe"
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add-user-email">Email</label>
                        <input
                            type="text"
                            id="add-user-email"
                            class="form-control"
                            placeholder="john.doe@example.com"
                            aria-label="john.doe@example.com"
                            name="userEmail"
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add-user-contact">Contact</label>
                        <input
                            type="text"
                            id="add-user-contact"
                            class="form-control phone-mask"
                            placeholder="+1 (609) 988-44-11"
                            aria-label="john.doe@example.com"
                            name="userContact"
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add-user-company">Company</label>
                        <input
                            type="text"
                            id="add-user-company"
                            class="form-control"
                            placeholder="Web Developer"
                            aria-label="jdoe1"
                            name="companyName"
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="country">Country</label>
                        <select id="country" class="select2 form-select">
                            <option value="">Select</option>
                            <option value="Australia">Australia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="user-role">User Role</label>
                        <select id="user-role" class="form-select">
                            <option value="subscriber">Subscriber</option>
                            <option value="editor">Editor</option>
                            <option value="maintainer">Maintainer</option>
                            <option value="author">Author</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="user-plan">Select Plan</label>
                        <select id="user-plan" class="form-select">
                            <option value="basic">Basic</option>
                            <option value="enterprise">Enterprise</option>
                            <option value="company">Company</option>
                            <option value="team">Team</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
