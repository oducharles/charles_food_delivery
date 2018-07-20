@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Make Payment') }}</div>

                <div class="card-body">
                    <form method="POST" action="/paid" aria-label="{{ __('Make Payment') }}">
                        @csrf

                        @if(empty($my_orders))

                        @else
                            <input name="food_name" value="{{ $my_orders['food_name'] }}" hidden>
                            <input name="price" value="{{ $my_orders['price'] }}" hidden>
                            <input name="quantity" value="{{ $my_orders['quantity'] }}" hidden>
                            <input name="meal_time" value="{{ $my_orders['meal_time'] }}" hidden>
                            <input name="expected_time" value="{{ $my_orders['expected_time'] }}" hidden>
                        @endif

                        @foreach($hold_my_info as $row)
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Current Location/Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $row->address }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Mobile Money Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone-confirm" type="text" class="form-control" name="phone-confirm" value="{{ $row->phone_number }}"  required>
                            </div>
                        </div>
                        @endforeach

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