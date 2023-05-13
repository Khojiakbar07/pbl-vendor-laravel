@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{__('Create Customer')}}</h5>
                <form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="formFile" class="form-label">{{__('Import image ')}}</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{__('Customer Name')}}</label>
                            <input type="text" class="form-control" placeholder="Customer Name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{__('Customer Fullname')}}</label>
                            <input type="text" class="form-control" placeholder="Customer Name" name="fullname" value="{{ old('fullanme') }}">
                        </div>
                        <div class="col-md-6">
                        <label class="form-label" for="multicol-birthdate">{{__('Birth Date')}}</label>
                        <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input" name="birth" value="th{{old('birth')}}" placeholder="YYYY-MM-DD" readonly="readonly">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">{{__('Phone')}}Phone</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="ti ti-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" name="phone" placeholder="+998 93 123 45 67" aria-label="+998 93 123 45 67" aria-describedby="basic-icon-default-phone2" value="{{old('phone')}}">
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">{{__('Address')}}</label>
                            <textarea id="basic-default-message" class="form-control" name="address" placeholder="Addreass" value="{{old('address')}}"></textarea>
                        </div>

                            <div>
                            <button type="submit" class="btn btn-lg btn-success my-3">{{__('Submit')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
