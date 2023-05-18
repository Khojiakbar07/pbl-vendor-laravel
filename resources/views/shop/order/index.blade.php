@extends('layouts.admin')

@section('page_js')
    <script src="{{ asset('assets/js/app-user-list.js') }}"></script>
@endsection

@section('content')

    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">{{ __('Orders') }}</h5>
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
                            <a href="{{ route('order.show', $order->id) }}">{{ __('Customer') }}</a>
                        </td>
                        <td>
                            {{ $order->total_price ?? '0' }} UZS
                        </td>
                        <td>
                            <span class="badge bg-label-primary me-1">{{ __('Paid') }}</span>
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
