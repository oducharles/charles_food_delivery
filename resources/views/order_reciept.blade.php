@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('This is your Reciept') }}</div>
                <div class="card-body">
                	<div class="form-group row">
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Customer Name') }}</label>
                        <div class="col-md-6">
                        {{ $order_user->first_name }} {{ $order_user->last_name }}
                        </div>

                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Address') }}</label>
                        <div class="col-md-6">
                        {{ $order_user->address }}
                        </div>
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Food ordered') }}</label>
                        <div class="col-md-6">
                		{{ $order_details['food_name'] }}
                        </div>
                    <!-- </div>

                    <div class="form-group row"> -->
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Quantity:') }}</label>
                        <div class="col-md-6">
                		{{ $order_details['quantity'] }}
                        </div>
                    <!-- </div>

                    <div class="form-group row"> -->
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Amount:') }}</label>
                        <div class="col-md-6">
                		{{ $order_details['price'] }}
                        </div>

                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Reciept_number:') }}</label>
                        <div class="col-md-6">
                		{{ $order_details['reciept_number'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection