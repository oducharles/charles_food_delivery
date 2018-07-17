@extends('welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Location/Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ordered_food" class="col-md-4 col-form-label text-md-right">{{ __('Food Ordered') }}</label>

                            <div class="col-md-6">
                                <input id="plate" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="plate" value="1" required>{{ ('plate(s) of') }} 
                                <input id="ordered_food" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="ordered_food" value="Beans" required>

                                @if ($errors->has('ordered_food'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ordered_food') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="delivery_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}</label>

                            <div class="col-md-6">
                                <input id="delivery_time" type="delivery_time" class="form-control{{ $errors->has('delivery_time') ? ' is-invalid' : '' }}" name="delivery_time" required>

                                @if ($errors->has('delivery_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('delivery_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Mobile Money Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone-confirm" type="phone" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Complete Payment') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection