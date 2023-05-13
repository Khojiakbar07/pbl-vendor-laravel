@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">{{ __('Edit') }}</h5>
                <form method="POST" action="{{ route('profile.update', auth()->id()) }}">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">

                        @include('layouts.admin.inc.form_error')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" value="{{ auth()->user()->name }}">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-success my-3">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
