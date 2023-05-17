@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{__('Create')}}</h5>
                <form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="formFile" class="form-label">{{__('Import image')}}</label>
                            <input class="form-control" type="file" id="image" name="image" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{__('Customer Name')}}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Customer Name') }}" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="col-md-6">
                        <label class="form-label" for="multicol-birthdate">{{__('Birth Date')}}</label>
                        <input type="date" id="multicol-birthdate" class="form-control dob-picker flatpickr-input" name="birthday" value="{{old('birthday')}}" readonly="readonly">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                            <label class="form-label" for="phone-number-mask">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text">UZ (+99 8 )</span>
                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask" placeholder="90-123-45-67" name="phone" value="90-705-75-01" readonly="readonly">
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">{{__('Address')}}</label>
                            <textarea id="basic-default-message" class="form-control" name="address" placeholder="{{__('Address')}}">{{old('address')}}</textarea>
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
